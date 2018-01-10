$(function () {
    var contribots = [
        { name: 'utopian-io', interval: 2.4 }
    ];
    var contribot_names = [];
    contribots.forEach(function (bot) {
      contribot_names.push(bot.name);
    });
    steem.api.setOptions({ url: 'https://api.steemit.com/' });

    function loadContribBotInfo() {
        steem.api.getAccounts(contribot_names, function (err, result) {
            try {
                result.forEach(function (account) {
                    var vote = getVoteValue(100, account);
                    var last_vote_time = new Date((account.last_vote_time) + 'Z');

                    var bot = contribots.filter(function (b) { return b.name == account.name; })[0];
                    bot.last_vote_time = last_vote_time;
                    bot.vote = vote * bot.interval / 2.4;
                    bot.power = getVotingPower(account) / 100;
                    bot.last = (new Date() - last_vote_time);
                    bot.next = timeTilFullPower(account) * 1000;
                });
            } catch (err) {
                $('#contrib_bot_error').css('display', 'block');
            }

            setTimeout(showContribBotInfo, 5 * 1000);
            setTimeout(loadContribBotInfo, 10 * 1000);
        });
    }

    function showContribBotInfo(bot) {
        contribots.forEach(function(bot) {
            bot.last += 1000;
            bot.next = Math.max(bot.next - 1000, 0);
        });

        $('#contribots_table tbody').empty();

        contribots.forEach(function(bot) {
            var row = $(document.createElement('tr'));

            var td = $(document.createElement('td'));
            var link = $(document.createElement('a'));
            link.attr('href', 'http://www.steemd.com/@' + bot.name);
            link.attr('target', '_blank');
            var text = '@' + bot.name;

            link.html("<img class='userpic' src='https://steemitimages.com/u/" + bot.name + "/avatar'></img>" + text);
            td.append(link);
            row.append(td);

            td = $(document.createElement('td'));
            td.text('$' + bot.vote.formatMoney() + ' (' + (bot.interval / 2.4 * 100) + '%)');
            row.append(td);

            td = $(document.createElement('td'));
            var bar = $('#randowhale-progress div').clone();

            var pct = (bot.power - 80) * 10;
            bar.attr('aria-valuenow', pct);
            bar.css('width', pct + '%');
            bar.text(bot.power.formatMoney());

            var div = $(document.createElement('div'));
            div.addClass('progress');
            div.append(bar);
            td.append(div);
            row.append(td);

            td = $(document.createElement('td'));
            td.addClass('timer');
            td.attr('dir', 'up');
            td.attr('time', bot.last);
            td.text(toTimer(bot.last));
            row.append(td);

            td = $(document.createElement('td'));
            td.addClass('timer');
            td.attr('time', bot.next);
            td.text(toTimer(bot.next));
            row.append(td);

            $('#contribots_table tbody').append(row);
            $('[data-toggle="tooltip"]').tooltip();

        });

    }

    setInterval(updateTimers, 1000);
    setTimeout(loadContribBotInfo, 5 * 1000);

});
