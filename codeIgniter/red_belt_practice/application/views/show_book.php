<div class="container">
	<div class="row">
		<div class="six columns" >
			<h4>Book name</h4>
		</div>
		<div class="six columns">
			<a href="/books/">Home</a> - <a href="#">Logout</a>
		</div>
	</div>
	<div class="row">
	<div class="six columns" >
		<h4>Reviews;</h4>
		<div id="book1">		
			<h4><a href="/books/user">user 1</a></h3>
			<span class="star-rating">
			  <input type="radio" name="rating" value="1"><i></i>
			  <input type="radio" name="rating" value="2"><i></i>
			  <input type="radio" name="rating" value="3"><i></i>
			  <input type="radio" name="rating" value="4"><i></i>
			  <input type="radio" name="rating" value="5"><i></i>
			</span>
			<strong class="choice">Rating</strong>
			<p><a href="#">Jerry</a>: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>

			<p>Posted on November 23, 2014</p>
		</div>
		<div id="book1">		
			<h4><a href="/books/user">user 2</a></h3>
			<span class="star-rating">
			  <input type="radio" name="rating" value="1"><i></i>
			  <input type="radio" name="rating" value="2"><i></i>
			  <input type="radio" name="rating" value="3"><i></i>
			  <input type="radio" name="rating" value="4"><i></i>
			  <input type="radio" name="rating" value="5"><i></i>
			</span>
			<strong class="choice">Rating</strong>
			<p><a href="#">Jerry</a>: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>

			<p>Posted on November 23, 2014</p>
		</div>
		<div id="book1">		
			<h4><a href="/books/user">user 3</a></h3>
			<span class="star-rating">
			  <input type="radio" name="rating" value="1"><i></i>
			  <input type="radio" name="rating" value="2"><i></i>
			  <input type="radio" name="rating" value="3"><i></i>
			  <input type="radio" name="rating" value="4"><i></i>
			  <input type="radio" name="rating" value="5"><i></i>
			</span>
			<strong class="choice">Rating</strong>
			<p><a href="#">Jerry</a>: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>

			<p>Posted on November 23, 2014</p>
		</div>
	    		


	</div>
	<div class="six columns">
		
		<form action="/books/submit_review" method="post"> 
			<label>Add reviews</label>
			<textarea name="book_review" class="u-full-width"></textarea>

			<label>Rating</label>
			<span class="star-rating">
			  <input type="radio" name="rating" value="1"><i></i>
			  <input type="radio" name="rating" value="2"><i></i>
			  <input type="radio" name="rating" value="3"><i></i>
			  <input type="radio" name="rating" value="4"><i></i>
			  <input type="radio" name="rating" value="5"><i></i>
			</span>


			<input type="hidden" name="sumit_review" value="review_submited">
			<button type="submit" class="button-primary u-full-width">Submit review</button>
		</form>
	</div>
</div>
</div>