<!DOCTYPE html>
<html>
<head>
	<title>Random word</title>
	<style type="text/css">
	body
	{
		text-align: center;
	}
	.box {
		border:1px solid black;
		width: 200px;
		padding: 10px;
		margin: 0 auto;
	}
	</style>
</head>
<body>
	<h3>Random Word (attempt # <?=$counter ?>)</h3>

	<form action="/">
		<p class="box"><?=$randomWord?></p>
		<button>Generate</button>
	</form>
		

</body>
</html>