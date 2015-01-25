<script type="text/javascript">
	$(document).ready(function()
	{	
		var rand = Math.floor((Math.random() * 50) + 1);
		var rand1 = Math.floor((Math.random() * 50) + 1);
		var multi = (rand * rand1);
		alert(rand + ' x ' + rand1 + ' = ' + multi);
	});
</script>