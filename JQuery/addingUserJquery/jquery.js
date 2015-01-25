$(document).ready(function(){

	$('form').submit(function(){
		$('.users').append(
		'<tr><td>' + $("#firstName").val() +'</td>' + 
		'<td>' + $("#lastName ").val() +'</td>' +
		'<td>' + $("#emailAddress ").val() +'</td>' +
		'<td>' + $("#number ").val() +'</td></tr>'
		);
		return false;
	})	
})