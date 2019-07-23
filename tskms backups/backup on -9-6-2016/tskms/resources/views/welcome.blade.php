<html>
	<head>
		<link rel="stylesheet" href="compiled/flipclock.css">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

		<script src="compiled/flipclock.js"></script>		
	</head>
	<body>
	<div class="clock" style="margin:2em;"></div>
	<div class="message"></div>

	<button class="start">Start Clock</button>

	<script type="text/javascript">
		var clock;
		
		$(document).ready(function() {
			
			clock = $('.clock').FlipClock(10, {
		        clockFace: 'MinuteCounter',
		        countdown: true,
		        autoStart: false,
		        callbacks: {
		        	start: function() {
		        		$('.message').html('The clock has started!');
		        	}
		        }
		    });

		    $('.start').click(function(e) {

		    	clock.start();
		    });

		});
	</script>
	
	</body>
</html>