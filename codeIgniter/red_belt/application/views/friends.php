
<div class="container">
	<div class="row">
		<div class="six columns">
		<h3>Hello,	<?=$this->session->userdata['name'];?></h3>
		<h4>here is a list of your friends a</h4>
		<table>
			<tr>
				<td>
					<h5>Alias</h5>
				</td>
				<td>
					<h5>Action</h5>
				</td>
			</tr>
			
			<?php foreach ($chicken as $value) 
			{ ?>
			<tr>
				<td><p><?=$value['alias']?></p></td>
				<td><p><a href="/friends/user/<?=$value['friendId']?>">View profile</a> - <a href="/friends/delete/<?=$value['friendId']?>">Remove</a></p></td>
			</tr>	
			<?php } ?>
			</tr>
		</table>
		</div>
		<div class="six columns">
		<h4>No friends</h4>
				<table>
			<tr>
				<td>
					<h5>Alias</h5>
				</td>
				<td>
					<h5>Action</h5>
				</td>
			</tr>
			<tr>
				<td>
					<h5><a href="">Julian</a></h5>
				</td>
				<td>
					<a href=""><h5>Add as Friend</a></h5>
			</td>
			</tr>
		</table>
		</div>
	</div>
</div>

