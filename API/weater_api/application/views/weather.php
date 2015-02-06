
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>hi</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){
		alert('Hi, get the weather!');
		$("form").submit(function(){
			$.get($(this).attr('action')+"?callback=?", $(this).serialize(), function(derby){
				var temp = derby.data.current_condition[0].temp_F;
				var wind = derby.data.current_condition[0].windspeedMiles;
				var winddir16Point = derby.data.current_condition[0].winddir16Point;
					
				console.log(derby);
				$('#forecast').html("The current temperature is: " + temp + " F <br />" + "Wind speed : " + wind + "<br />Wind direction : " +winddir16Point);
			}, 'json');
			return false;
		});
	});
	</script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  </head>
  <body>
<div class="container">
	<div class="row">
		<div class="col-md-4"><h2>Weather</h2></div>
	</div>
	<div class="row">
	<form action="http://api.worldweatheronline.com/free/v2/weather.ashx" method="get">
		<select name="q">
			<option value="94303">Mountain View</option>
			<option value="98005">Seattle</option>
			<option value="90028">Hollywood</option>
		</select>
		<input type="hidden" name="key" value="394bd4c2bb6b69b5255f49a0b383f">
		<input type="hidden" name="format" value="json">
		<input class="btn btn-primary" type="submit" value="Get weather!">
	</form>
	<div id="forecast"></div>
	</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </body>
</html>