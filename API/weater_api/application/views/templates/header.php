<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript">
	alert("hi");
	$(document).ready(function(){

		$("form").submit(function(){
			$.get($(this)).attr('action')+"?callback=?", $(this).serialize(), function(derby){
				var temp = derby.data.current_condition[0].temp_F;
				$('#forecast').text("the current temperature is: " + temp);
			}, 'json');
			return false;
		});
	});
	</script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  </head>
  <body>
