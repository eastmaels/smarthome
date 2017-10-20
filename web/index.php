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

        <!-- Title -->
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
                    <img src="images/air-conditioner.png" alt="">
                    <div class="caption">
                        <h3>Airconditioner</h3>
                        <p><input type="text" class="form-control timer" value="00:00:00" readonly/></p>
                        <h4><span class="label label-default status"></span></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature appliance" id="bedroomlight">
                <div class="thumbnail">
                    <img src="images/bedroom-light.jpeg" alt="">
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
            <div class="col-lg-12">
                <h3>Consumption Calculator</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6 hero-feature calculator">
                <input type="month" class="form-control month-selector" />
                <div class="input-group">
                  <input type="text" class="form-control hours-used" /> 
                  <span class="input-group-addon" >Hours Used</span>
                </div>
                <div class="input-group">
                  <input type="text" class="form-control wattage" /> 
                  <span class="input-group-addon" >Wattage</span>
                </div>
                <div class="input-group">
                  <input type="text" class="form-control kwhr" /> 
                  <span class="input-group-addon" >KW/hour</span>
                </div>
                <hr/>
                <input type="text" class="form-control consumption-cost" />
                <button class="btn btn-default">Calculate</button>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
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
                
                if ($on) {
                    $on.on("click", {appliance : $appliance}, startTimer);
                    $off.on("click", {appliance : $appliance}, stopTimer);
                    $reset.on("click", {appliance : $appliance}, resetTimer);
                    
                    $.getJSON('/status.php', { device : applianceId}, function(data) {
                        // disable buttons
                        const isOn = (data.status === "on");
                        $appliance.find('.toggle-on').prop('disabled', isOn);
                        $appliance.find('.toggle-off').prop('disabled', !isOn);
                    });

                }

            });
        });

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
            $.getJSON('/countdown.php', { device : applianceId, status : "reset"});
            
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
	        if (applianceId == "countdown") {
    	        x /= 24;
    	        days = Math.floor(x);
    	        return [pad2(days), pad2(hours), pad2(minutes), pad2(seconds)].join(':');
	        } else {
    	        return [pad2(hours), pad2(minutes), pad2(seconds)].join(':');
	        }
	    }

    </script>
</body>

</html>