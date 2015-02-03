<div class="container">
<div class="row">
  <div class="col-md-6"><h3>Welcome user</h3></div>
  <div class="col-md-6 logout"><h3><a href="/login/log_out">Log off</a></h3></div>
</div>	
	<table class="table">
		<tr>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Email</td>
		</tr>
		<tr>
			<td><?=$this->session->userdata['first_name'];?></td>
			<td><?=$this->session->userdata['last_name'];?></td>
			<td><?=$this->session->userdata['email'];?></td>
		</tr>
	</table>
</div>