<div class="container">
	<div class="row">
		<div class="col-md-4"><h2>Ninja Gold Game</h2></div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="input-group">
	          <div class="input-group-addon">Your Gold $</div>
	          <div class="input-group-addon">
	          	<b> <?=$this->session->userdata('goldCounter') ?></b>
	          </div>
	        </div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-md-3">
			<h3>Farm</h3>
 			<p>Earn 10-20</p>
 			<form action="/process_money/farm" method="post">
 				<input type="hidden" name="farm">
 				<input type="submit" value="Find Gold" class="btn btn-primary">
 			</form>
		</div>
 		<div class="col-xs-6 col-md-3">
 			<h3>Cave</h3>
 			<p>Earn 5-10</p>
 			<form action="/process_money/cave" method="post">
 				<input type="hidden" name="cave">
 				<input type="submit" value="Find Gold" class="btn btn-primary">
 			</form> 	
 		</div>
 		<div class="col-xs-6 col-md-3">
 			<h3>House</h3>
 			<p>Earn 2-5</p>
  			<form action="/process_money/house" method="post">
 				<input type="hidden" name="house">
 				<input type="submit" value="Find Gold" class="btn btn-primary">
 			</form>
 		</div>
 		<div class="col-xs-6 col-md-3">
 			<h3>Casino</h3>
 			<p>Earn/Takes 0-50</p>
 			<form action="/process_money/casino" method="post">
 				<input type="hidden" name="casino">
 				<input type="submit" value="Find Gold" class="btn btn-primary">
 			</form>
 		</div>
	</div>
	<div class="row">
		<div class="col-md-4"><h5>Activities</h5></div>
	</div>
 	<div class="row highlight">

 		<p class="text-muted">test</p>
		<p class="text-primary">test</p>
		<p class="text-success">test</p>
		<p class="text-info">test</p>
		<p class="text-warning">test</p>
		<p class="text-danger">test</p>
	</div> 
</div>