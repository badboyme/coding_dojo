
  <div class="container">
	  <div class="row" style="margin-top: 10%">
	    <div class="six columns" >
	    	<h2>Register</h2>
		    <form action="/main/register" method="post">
		    	<?php 
				if ($this->session->flashdata("login_error")) 
				{
					echo "<h4>" . $this->session->flashdata("login_error") . "</h4>" ;
				}
				?>

		    		<label>Name</label>
		    		<input type="text" name="name" value="Esteban" placeholder="Esteban" class="u-full-width" >

		    		<label>Alias</label>
		    		<input type="text" name="alias" value="Derby" placeholder="Derby" class="u-full-width" >


		    		<label>Email</label>
		    		<input type="email" name="email" value="email@email.com" placeholder="email@email.com" class="u-full-width" >

		    		<label>Password</label>
		    		<input type="password" name="password" value="11111111" placeholder="At least 8 characteters" maxlength="8" class="u-full-width" >

		    		<label>Confirm password</label>
		    		<input type="password" name="passconf" value="11111111" placeholder="At least 8 characteters" maxlength="8" class="u-full-width" >
	    			<br />
	    			<input type="hidden" name="register" value="register">
	    			<button type="submit" class="button-primary u-full-width">Register</button>
		    </form>


	    </div>
	    <div class="six columns">
	    	<h2>Login</h2>
	    		<?php 
				if ($this->session->flashdata("login_error1")) 
				{
					echo "<h4>" . $this->session->flashdata("login_error1") . "</h4>" ;
				}
				?>
	    	<form action="/main/login" method="post">

		    		<label>Email</label>
		    		<input type="email" name="l_email" value="email@email.com" placeholder="email@email.com" class="u-full-width" >

		    		<label>Password</label>
		    		<input type="password" name="l_password" value="11111111" placeholder="At least 8 characteters" maxlength="8" class="u-full-width" >

	    			<input type="hidden" name="l_pass" value="signin">
	    			<button type="submit" class="button-primary u-full-width">Login</button>
		    </form>

	    </div>
    </div>
  </div>