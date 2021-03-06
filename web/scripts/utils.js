var STEEMIT_100_PERCENT = 10000;
var STEEMIT_VOTE_REGENERATION_SECONDS = (5 * 60 * 60 * 24);
var HOURS = 60 * 60 * 1000;

function toTimer(ts) {
  var h = Math.floor(ts / HOURS);
  var m = Math.floor((ts % HOURS) / 60000);
  var s = Math.floor((ts % 60000) / 1000);
  return padLeft(h, 2) + ':' + padLeft(m, 2) + ':' + padLeft(s, 2);
}

function padLeft(v, d) {
  var l = (v + '').length;
  if (l >= d) return v + '';
  for(var i = l; i < d; i++)
    v = '0' + v;
  return v;
}

function updateTimers() {
  var timers = $('.timer');

  for (var i = 0; i < timers.length; i++) {
    var timer = $(timers[i]);
    if(!timer.attr('time')) return;

    var time = parseInt(timer.attr('time'));

    if(timer.attr('dir') == 'up')
      time += 1000;
    else
      time = Math.max(time - 1000, 0);

    timer.attr('time', time);
    timer.text(toTimer(time));
  }
}

Number.prototype.formatMoney = function(c, d, t){
var n = this,
    c = isNaN(c = Math.abs(c)) ? 2 : c,
    d = d == undefined ? "." : d,
    t = t == undefined ? "," : t,
    s = n < 0 ? "-" : "",
    i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
    j = (j = i.length) > 3 ? j % 3 : 0;
   return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
 };

 var steemPrice;
 var rewardBalance;
 var recentClaims;
 var currentUserAccount;
 var votePowerReserveRate;
 var totalVestingFund;
 var totalVestingShares;
 function updateSteemVariables() {
     steem.api.setOptions({ url: 'https://api.steemit.com/' });
     steem.api.getRewardFund("post", function (e, t) {
         rewardBalance = parseFloat(t.reward_balance.replace(" STEEM", ""));
         recentClaims = t.recent_claims;
     });
     steem.api.getCurrentMedianHistoryPrice(function (e, t) {
         steemPrice = parseFloat(t.base.replace(" SBD", "")) / parseFloat(t.quote.replace(" STEEM", ""));
     });
     steem.api.getDynamicGlobalProperties(function (e, t) {
         votePowerReserveRate = t.vote_power_reserve_rate;
         totalVestingFund = parseFloat(t.total_vesting_fund_steem.replace(" STEEM", ""));
         totalVestingShares = parseFloat(t.total_vesting_shares.replace(" VESTS", ""));
     });

     setTimeout(updateSteemVariables, 180 * 1000)
 }
 updateSteemVariables();

 function getVotingPower(account) {
     var voting_power = account.voting_power;
     var last_vote_time = new Date((account.last_vote_time) + 'Z');
     var elapsed_seconds = (new Date() - last_vote_time) / 1000;
     var regenerated_power = Math.round((STEEMIT_100_PERCENT * elapsed_seconds) / STEEMIT_VOTE_REGENERATION_SECONDS);
     var current_power = Math.min(voting_power + regenerated_power, STEEMIT_100_PERCENT);
     return current_power;
 }

 function getVoteValue(voteWeight, account, power) {
     if (!account) {
         return;
     }
     if (rewardBalance && recentClaims && steemPrice && votePowerReserveRate) {

         var effective_vesting_shares = Math.round(getVestingShares(account) * 1000000);
         var voting_power = account.voting_power;
         var weight = voteWeight * 100;
         var last_vote_time = new Date((account.last_vote_time) + 'Z');


         var elapsed_seconds = (new Date() - last_vote_time) / 1000;
         var regenerated_power = Math.round((STEEMIT_100_PERCENT * elapsed_seconds) / STEEMIT_VOTE_REGENERATION_SECONDS);
         var current_power = power || Math.min(voting_power + regenerated_power, STEEMIT_100_PERCENT);
         var max_vote_denom = votePowerReserveRate * STEEMIT_VOTE_REGENERATION_SECONDS / (60 * 60 * 24);
         var used_power = Math.round((current_power * weight) / STEEMIT_100_PERCENT);
         used_power = Math.round((used_power + max_vote_denom - 1) / max_vote_denom);

         var rshares = Math.round((effective_vesting_shares * used_power) / (STEEMIT_100_PERCENT))

         var voteValue = rshares
           * rewardBalance / recentClaims
           * steemPrice;

         return voteValue;

     }
 }

function timeTilFullPower(account){
     var cur_power = getVotingPower(account);
     return (STEEMIT_100_PERCENT - cur_power) * STEEMIT_VOTE_REGENERATION_SECONDS / STEEMIT_100_PERCENT;
 }

 function getVestingShares(account) {
     var effective_vesting_shares = parseFloat(account.vesting_shares.replace(" VESTS", ""))
       + parseFloat(account.received_vesting_shares.replace(" VESTS", ""))
       - parseFloat(account.delegated_vesting_shares.replace(" VESTS", ""));
     return effective_vesting_shares;
 }
