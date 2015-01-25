<style type="text/css">
	li	{
		width: 20px;
		height: 20px;
		display: inline-block;
		vertical-align: top;
		text-align: center;
		margin: 0;
	}
	li:nth-child(odd)
		{ 
		    background: yellow;
		}
</style>

<?php  
for ($i=0; $i < 8; $i++) 
	{ 
?>
	<ul id="row">
<?php
	for ($j=0; $j < 4; $j++) { 
?>
		<li>1</li>
		<li>2</li>
<?php 
	}
	for ($j=0; $j < 4; $j++) { 
		?>
		<li>1</li>
		<li>2</li>
<?php 
	}
 ?>
	</ul>
<?php  
}
?>