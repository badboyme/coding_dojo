<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hi</title>
    <!-- Latest compiled and minified CSS -->
  	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <script>
  $(document).ready(function() {
	$("input#button").click(function() {
		$.ajax("http://localhost:8888/users/random")

		.done(function(response){
			var obj = $.parseJSON(response);
			$("#messages").append("Name : " + obj.name + " Age : " + obj.age + "<br />");
		})
		return false;
	});
   });

  </script>
  </head>
  <body>
<div class="container">
	<div class="row">
		<div class="col-md-4"><h2>Get random name</h2></div>
	</div>
	<div class="row">
	 	<form id="mainForm">
	 		<input id="button" name="submit" class="btn btn-primary" type="submit" value="Get a random user info" />

	 	</form>
	</div>
	<div id="messages"></div>

</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </body>
</html>