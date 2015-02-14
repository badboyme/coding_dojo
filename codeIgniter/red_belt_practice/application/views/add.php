<div class="container" style="margin-top: 10%">
	<div class="row">
		<h3>Add a book title and a review</h3>
		<form action="/books/add_book" method="post" >
			<label>Book title</label>
			<input type="text" name="add_title" value="title">

			<label>Author</label>
			<select name="add_author">
				<option>author name</option>
				<option>author name</option>
				<option>author name1</option>
				<option>author name</option>
			</select>

			<label>Or add new author</label>
			<input type="text" name="add_add_author" value="me">

			<label>Review</label>
			<textarea name="add_review">this is a review</textarea>

			<label>Rating</label>
			<select name="add_rating">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
			<input type="hidden" name="add_book" value="added_book">
			<button type="submit" class="button-primary">Add book and review</button>
		</form>
	</div>
</div>