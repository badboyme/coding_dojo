
<div class="container">

	<div class="row">
		<div class="col-md-4"><h1>Courses</h1>
		<h3>Add a new course</h3>
		</div>
	</div>
	<div class="row">
		<form class="form-horizontal" action="/main/add" method="post">
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
		    <div class="col-sm-10">
		      <input type="text" name="name" class="form-control" id="inputEmail3">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
		    <div class="col-sm-10">
		      <textarea name="description" class="form-control" rows="3"></textarea>
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		    	<input type="hidden" name="addCourse">
 				<input type="submit" value="Add" class="btn btn-primary">
		    </div>
		  </div>
		</form>

		<table class="table table-condensed">
			<tr class="info">
				<td>Name</td>
				<td>Description</td>
				<td>Created</td>
				<td>Action</td>				
			</tr>
		<?php 
		krsort($ShowAll);
		foreach ($ShowAll as $value) 
		{ ?>
			
			<tr>
				<td><?=$value['name'] ?></td>
				<td><?=$value['description']?></td>
				<td><?=$value['created_at']?></td>
				<td><a href="/main/destroy/<?=$value['id']?>">Remove</a></td>				
			</tr>


		<?php } ?>
								
		</table>
	</div>
</div>