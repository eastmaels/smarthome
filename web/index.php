<?php
header("Access-Control-Allow-Origin: *");
$result=shell_exec('chmod 777 /app/web/scripts/*');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heroic Features - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Smart Home</a>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Welcome to Your Future Home!</h1>
            <p>(The Future of Philippine Home Automation)</p>
        </header>

        <hr/>
        <div class="row">
            <div class="col-lg-12">
                <h3>Monthly Countdown Timer</h3>
            </div>
        </div>

        <div class="row hero-spacer appliance" id="countdown">
            <div class="col-lg-12">
                <p><input type="text" class="form-control timer input-lg" style="text-align: center" value="00:00:00" readonly/></p>
            </div>
            <div class="col-lg-2">
                <div>
                    <button type="button" class="btn btn-primary toggle-on">On</button>
                    <button type="button" class="btn btn-default toggle-off">Pause</button>
                </div>
            </div>
            <div class="col-lg-1">
                <button type="button" class="btn btn-warning toggle-reset">Reset</button>
            </div>
            <div class="col-lg-1 col-lg-offset-7">
                <button type="button" class="btn btn-warning toggle-reset-10" >Reset to 10 Seconds</button>
            </div>
        </div>

        <hr/>

        <div class="row">
            <div class="col-lg-12">
                <h3>Here are the status of your equipment:</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature appliance" id="tv">
                <div class="thumbnail">
                    <img src="images/tv.jpg" alt="">
                    <div class="caption">
                        <h3>Television</h3>
                        <p><input type="text" class="form-control timer" value="00:00:00" readonly/></p>
                        <h4><span class="label label-default status"></span></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature appliance" id="dininglight">
                <div class="thumbnail">
                    <img src="images/dining_light.jpg" alt="">
                    <div class="caption">
                        <h3>Dining Light</h3>
                        <p><input type="text" class="form-control timer" value="00:00:00" readonly/></p>
                        <h4><span class="label label-default status"></span></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature appliance" id="aircon">
                <div class="thumbnail">
                    <img src="images/air-conditioner.jpg" alt="">
                    <div class="caption">
                        <h3>Airconditioner</h3>
                        <p><input type="text" class="form-control timer" value="00:00:00" readonly/></p>
                        <h4><span class="label label-default status"></span></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature appliance" id="bedroomlight">
                <div class="thumbnail">
                    <img src="images/bedroom-light.jpg" alt="">
                    <div class="caption">
                        <h3>Bedroom Light</h3>
                        <p><input type="text" class="form-control timer" value="00:00:00" readonly/></p>
                        <h4><span class="label label-default status"></span></h4>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <hr/>

        <div class="row">
            <div class="col-lg-3">
                <h3>TV Consumption Calculator</h3>
            </div>
            <div class="col-lg-3">
                <h3>Dining Light Consumption Calculator</h3>
            </div>
            <div class="col-lg-3">
                <h3>Airconditioner Consumption Calculator</h3>
            </div>
            <div class="col-lg-3">
                <h3>Bedroom Light Consumption Calculator</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6 hero-feature calculator" data-id="tv">
                <input type="month" class="form-control month-selector" />
                <div class="input-group">
                  <input type="number" class="form-control hours-used" readonly /> 
                  <span class="input-group-addon" >Hours Used</span>
                </div>
                <div class="input-group">
                  <input type="number" class="form-control wattage" value="25"/> 
                  <span class="input-group-addon" >Wattage / Hr</span>
                </div>
                <div class="input-group">
                  <span class="input-group-addon" >Php</span>
                  <input type="number" class="form-control kwh" value="0.00989"/> 
                  <span class="input-group-addon" >kWh</span>
                </div>
                <button class="btn btn-primary calculate">Calculate</button>
                <div class="btn-group">
                  <button class="btn btn-default save">Save</button>
                  <button class="btn btn-default load">Load</button>
                </div>
                <div class="alert alert-success alert-dismissible notification" role="alert" style="display: none;">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   Saved.
                </div>
                <hr/>
                <div class="input-group">
                  <span class="input-group-addon" >Php</span>
                  <input type="text" class="form-control consumption-cost" />
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature calculator" data-id="dininglight">
                <input type="month" class="form-control month-selector" />
                <div class="input-group">
                  <input type="number" class="form-control hours-used" readonly /> 
                  <span class="input-group-addon" >Hours Used</span>
                </div>
                <div class="input-group">
                  <input type="number" class="form-control wattage" value="12"/> 
                  <span class="input-group-addon" >Wattage / Hr</span>
                </div>
                <div class="input-group">
                  <span class="input-group-addon" >Php</span>
                  <input type="number" class="form-control kwh" value="0.00989"/> 
                  <span class="input-group-addon" >kWh</span>
                </div>
                <button class="btn btn-primary calculate">Calculate</button>
                <div class="btn-group">
                  <button class="btn btn-default save">Save</button>
                  <button class="btn btn-default load">Load</button>
                </div>
                <div class="alert alert-success alert-dismissible notification" role="alert" style="display: none;">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   Saved.
                </div>

                <hr/>
                <div class="input-group">
                  <span class="input-group-addon" >Php</span>
                  <input type="text" class="form-control consumption-cost" />
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature calculator" data-id="aircon">
                <input type="month" class="form-control month-selector" />
                <div class="input-group">
                  <input type="number" class="form-control hours-used" readonly /> 
                  <span class="input-group-addon" >Hours Used</span>
                </div>
                <div class="input-group">
                  <input type="number" class="form-control wattage" value="559.5"/> 
                  <span class="input-group-addon" >Wattage / Hr</span>
                </div>
                <div class="input-group">
                  <span class="input-group-addon" >Php</span>
                  <input type="number" class="form-control kwh" value="0.00989"/> 
                  <span class="input-group-addon" >kWh</span>
                </div>
                <button class="btn btn-primary calculate">Calculate</button>
                <div class="btn-group">
                  <button class="btn btn-default save">Save</button>
                  <button class="btn btn-default load">Load</button>
                </div>
                <div class="alert alert-success alert-dismissible notification" role="alert" style="display: none;">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   Saved.
                </div>
                <hr/>
                <div class="input-group">
                  <span class="input-group-addon" >Php</span>
                  <input type="text" class="form-control consumption-cost" />
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature calculator" data-id="bedroomlight">
                <input type="month" class="form-control month-selector" />
                <div class="input-group">
                  <input type="number" class="form-control hours-used" readonly /> 
                  <span class="input-group-addon" >Hours Used</span>
                </div>
                <div class="input-group">
                  <input type="number" class="form-control wattage" value="10"/> 
                  <span class="input-group-addon" >Wattage / Hr</span>
                </div>
                <div class="input-group">
                  <span class="input-group-addon" >Php</span>
                  <input type="number" class="form-control kwh" value="0.00989"/> 
                  <span class="input-group-addon" >kWh</span>
                </div>
                <button class="btn btn-primary calculate">Calculate</button>
                <div class="btn-group">
                  <button class="btn btn-default save">Save</button>
                  <button class="btn btn-default load">Load</button>
                </div>
                <div class="alert alert-success alert-dismissible notification" role="alert" style="display: none;">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   Saved.
                </div>
                <hr/>
                <div class="input-group">
                  <span class="input-group-addon" >Php</span>
                  <input type="text" class="form-control consumption-cost" />
                </div>
            </div>

        </div>

       <hr/>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <h3 style="text-align: center">Total Consumption</h3>
            </div>
        </div>

        <div class="row hero-spacer">
            <div class="col-lg-4 col-lg-offset-4">
                <div class="input-group">
                  <span class="input-group-addon" >Php</span>
                  <input type="number" class="form-control input-lg" id="total-consumption" style="text-align: center" readonly/>
                  <span class="input-group-btn">
                    <button class="btn btn-default input-lg calculate-total" type="button">Calculate</button>
                  </span>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.appliance').each(function() {
                
                const $appliance = $(this);
                const applianceId = $appliance.attr('id');

                // Update the timer every 1 second
                var interval = setInterval(function() {
                    var $timer = $appliance.find('.timer');
                    var $statusHtml = $appliance.find('.status');
                    $.getJSON('/get_elapsed_time.php', { device : applianceId}, function(data) {
                        $timer.val(defaultFormatMilliseconds(data.elapsed, applianceId));
                        
                        const status = data.status;
                        $statusHtml.html(status.toUpperCase());
                        if (status == "on") {
                            $statusHtml.addClass('label-primary');
                            $statusHtml.removeClass('label-default');
                        }  else {
                            $statusHtml.addClass('label-default');
                            $statusHtml.removeClass('label-primary');
                        }
                    })
                }, 1000);

                var $on = $appliance.find('.toggle-on');
                var $off = $appliance.find('.toggle-off');
                var $reset = $appliance.find('.toggle-reset');
                const $reset10 = $appliance.find('.toggle-reset-10');
                
                if ($on) {
                    $on.on("click", {appliance : $appliance}, startTimer);
                    $off.on("click", {appliance : $appliance}, stopTimer);
                    $reset.on("click", { appliance : $appliance }, resetTimer);
                    $reset10.on("click", { appliance : $appliance, timeleft : 10 }, resetTimer);
                    
                    $.getJSON('/status.php', { device : applianceId}, function(data) {
                        // disable buttons
                        const isOn = (data.status === "on");
                        $appliance.find('.toggle-on').prop('disabled', isOn);
                        $appliance.find('.toggle-off').prop('disabled', !isOn);
                    });

                }

            });
            
            $('.calculator').each(function() {
                const $calculator = $(this);
                const deviceId = $calculator.data("id");

                var $monthSelector = $calculator.find('.month-selector');
                $monthSelector.on('change', { calculator : $calculator }, getConsumption);

                var $calculate = $calculator.find('.calculate');
                $calculate.on("click", { calculator : $calculator }, calculate);

                const $hoursUsed = $calculator.find('.hours-used');
                const $wattage = $calculator.find('.wattage');
                const $kwh = $calculator.find('.kwh');
                
                var $save = $calculator.find('.save');
                $save.on("click", { calculator : $calculator }, function() {
                    localStorage.setItem(deviceId + "ym", $monthSelector.val());
                    localStorage.setItem(deviceId + "wattage", $wattage.val());
                    localStorage.setItem(deviceId + "kwh", $kwh.val());
                    $calculator.find(".notification").fadeIn("slow").delay(500).fadeOut("slow");
                });

                var $load = $calculator.find('.load');
                $load.on("click", { calculator : $calculator }, function() {
                    $monthSelector.val(localStorage.getItem(deviceId + "ym"));
                    $monthSelector.trigger('change');
                    $wattage.val(localStorage.getItem(deviceId + "wattage"));
                    $kwh.val(localStorage.getItem(deviceId + "kwh"));
                });
                
            });

            $('.calculate-total').on('click', function() {
               var total = 0;
               $(".consumption-cost").each(function() {
                  total += parseFloat($(this).val()); 
               });
               
               $("#total-consumption").val(total.toFixed(2));
            });
        });

        function getConsumption(event) {
            const $calculator = $(event.data.calculator);
            const deviceId = $calculator.data("id");
            console.log(deviceId);
            console.log($(this).val());
            $.getJSON('/get_consumption.php', 
                { device : deviceId, ym : $(this).val() }, 
                function(data) {
                    $calculator.find(".hours-used")
                        .val(parseFloat(parseInt(data.consumption) / 3600).toFixed(2));
                }).fail(function() {
                    $calculator.find(".hours-used").val(0);
                });
        }

        function calculate(event) {
            const $calculator = $(event.data.calculator);
            const $hourUsed = $calculator.find(".hours-used");
            const $wattage = $calculator.find(".wattage");
            const $kwh = $calculator.find(".kwh");
            
            const consumption = parseFloat($hourUsed.val()) * parseFloat($wattage.val()) * parseFloat($kwh.val());
            $calculator.find(".consumption-cost").val(consumption.toFixed(2));
        }

        function startTimer(event) {
            const $appliance = $(event.data.appliance);
            const applianceId = $appliance.attr('id');
            $.getJSON('/countdown.php', { device : applianceId, status : "on"});
            
            // disable buttons
            $appliance.find('.toggle-on').prop('disabled', true);
            $appliance.find('.toggle-off').prop('disabled', false);
        }

        function stopTimer(event) {
            const $appliance = $(event.data.appliance);
            const applianceId = $appliance.attr('id');
            $.getJSON('/countdown.php', { device : applianceId, status : "off"});

            // disable buttons
            $appliance.find('.toggle-on').prop('disabled', false);
            $appliance.find('.toggle-off').prop('disabled', true);
        }

        function resetTimer(event) {
            const $appliance = $(event.data.appliance);
            const applianceId = $appliance.attr('id');
            $.getJSON('/countdown.php', 
                { device : applianceId, status : "reset", timeleft : event.data.timeleft}
            );
            
            // disable buttons
            $appliance.find('.toggle-on').prop('disabled', false);
            $appliance.find('.toggle-off').prop('disabled', true);
        }


	    function pad2(number) {
	         return (number < 10 ? '0' : '') + number;
	    }

	    function defaultFormatMilliseconds(millis, applianceId) {
	        var x, seconds, minutes, hours, days;
	        x = millis;
	        seconds = Math.floor(x % 60);
	        x /= 60;
	        minutes = Math.floor(x % 60);
	        x /= 60;
	        hours = Math.floor(x % 24);
	        x /= 24;
	        days = Math.floor(x);
	        return [pad2(days), pad2(hours), pad2(minutes), pad2(seconds)].join(':');
	    }

    </script>
</body>

</html>