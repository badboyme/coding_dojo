<div class="container">
	<div class="row">
		<div class="col-md-4"><h2>Ninja Gold Game</h2></div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="input-group">
	          <div class="input-group-addon">
	          	<h4 class="text-primary">Your Gold $</h4>
	          </div>
	          <div class="input-group-addon">
	          	<h4 class="text-success"><?=$this->session->userdata('goldCounter') ?></h4>
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
		<form action="/process_money/reset">
 		<input type="hidden" name="reset">
 		<input type="submit" value="Play Again" class="btn btn-primary">

 	</form>		
	<div class="col-md-4">
			<h4>Activities</h4></div>
		</div>
	<hr>
 	<div class="row highlight">	
		<?php // note = fix bug when starting session.
			$Activity = $this->session->userdata('LogMessages');
			krsort($Activity);
			foreach ($Activity as $value) 
			{
				echo $value ;	
			
		} ?>


	</div> 
</div>