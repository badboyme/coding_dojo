<div class="container">
	<div class="row">
	  <div class="col-md-6"><h3>Products</h3></div>
	  <div class="col-md-6"><h3>Your cart</h3></div>
	</div>
	
		<table class="table">
			
			<tr class="danger">
				<td>Description</td>
				<td>Price</td>
				<td>Quantity</td>
				<td></td>
			</tr>
		<?php foreach ($showAll as $value) 
		{ ?>
		 <form action="/main/cart/<?=$value['id']?>" method="post" >
			<tr>
				<td><?=$value['description']?></td>
				<td><?=$value['price']?></td>
				<td>
					<select name="quantity">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</td>
				<input type="hidden" name="products_id" value="<?=$value['id']?>">
				<td><input type="submit" class="btn btn-danger"  value="Buy Now"></td>
			</tr>
		</form>
		<?php } ?>
		</table>
	


</div>