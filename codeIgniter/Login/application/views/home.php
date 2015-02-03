<div class="container">
<div class="row">
	<div class="col-xs-6">
	<?php 
		if ($this->session->flashdata("login_error")) 
		{
			echo "<h4 class='bg-danger center'>" . $this->session->flashdata("login_error") . "</h4>" ;
		}
	?>
			<form action="/login/user_login" method="post">
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Email</label>
			    <div class="col-sm-10">
			      <input type="email" name="email" class="form-control" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label">Password</label>
			    <div class="col-sm-10">
			      <input type="password" name="password" maxlength="10" class="form-control" placeholder="Password">
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <input type="submit" name="login" value="login" class="btn btn-primary">
			    </div>
			  </div>
			</form>
	  </div>
  <div class="col-xs-6">
	<?php 
		if ($this->session->flashdata("login_error1")) 
		{
			echo "<h4 class='bg-danger center'>" . $this->session->flashdata("login_error1") . "</h4>" ;
		}
	?>
	<?php 
		if ($this->session->flashdata("success")) 
		{
			echo "<h4 class='bg-primary center'>" . $this->session->flashdata("success") . "</h4>" ;
			
		}
	?>

		<form class="form-horizontal" action="/login/register" method="post">
		  <div class="form-group">
		    <label class="col-sm-2 control-label">First Name</label>
		    <div class="col-sm-10">
		      <input type="text" name="first_name" class="form-control" placeholder="First Name">
		    </div>
		  </div>

		  <div class="form-group">
		    <label class="col-sm-2 control-label">Last Name</label>
		    <div class="col-sm-10">
		      <input type="text" name="last_name" class="form-control" placeholder="Last Name">
		    </div>
		  </div>
		 
		  <div class="form-group">
		    <label class="col-sm-2 control-label">Email</label>
		    <div class="col-sm-10">
		      <input type="email" name="email" class="form-control" placeholder="Email">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" name="password" maxlength="10" class="form-control" placeholder="Password">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-2 control-label">Confirm Password</label>
		    <div class="col-sm-10">
		      <input type="password" name="passconf" maxlength="10" class="form-control" placeholder="Confirm Password">
		    </div>
		  </div>		  


		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <input type="submit" class="btn btn-primary">
		    </div>
		  </div>
		</form>
  </div>
</div>
</div>