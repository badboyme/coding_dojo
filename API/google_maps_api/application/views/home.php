<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Get directions app</title>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script>
    $(document).ready(function() {
    	$("form").on("submit", function() {
    		$.ajax({
    			url: "/main/direction",
    			type: "POST",
    			data: {
    					origin: $("input#from").val(),
    					destination: $("input#to").val()
    				}
    				
    			})
    		 .done(function(data) {
    				console.log(data);
    				console.log(data.routes[0].legs);
    				console.log(data.routes[0].legs[0].steps[0].html_instructions);
    				// var directions = data.routes[0].copyrights;
    				// console.log(data.routes[0].legs[1].start_address);

    		 	})

    		return false;
    	});
    });
    
    </script>
    <style type="text/css">
    	/*.getInfo {
    		text-align: center;
    	}*/
    </style>
  </head>
  <body>

<div class="container text-center">
	<div class="row">
		<div class="col-md-4"><h2>Get directions</h2></div>
	</div>
	<div class="row">
		<form>
			<label>From:</label>
			<input id="from" type="text" name="origin" value="San Jose">
			<label>To:</label>
			<input id="to" type="text" name="destination" value="San Francisco">
			<input class="btn btn-primary" type="submit" value="Get Directions">
		</form>
		<h3>Directions from $fromCity to $toCity</h3>
		<div id="directions"></div>
	</div>
</div>
  
  </body>
</html>