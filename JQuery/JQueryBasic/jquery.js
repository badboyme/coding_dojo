$(document).ready(function(){

	//alert('Welcome');

	//sddClass
	$('#addClassButton').click(function(){
		$('.addClass').addClass('addClassJQ');
	});

	//addAfter
	$('#afterButton').click(function(){
		$( ".after" ).after("Hi! ");
	});

	//append
	$('#appendButton').click(function(){
		$('.appendText').append("<strong>Hello!</strong>");
	});

	//attr		
	$('#attrButton').click(function(){
		$( "#ninjaImg" ).attr({
	 		src: "ninja.jpeg",
	  		title: "jQuery",
	 	 	alt: "jQuery Logo"
		});
	$( "#attrButton" ).text( $( "img" ).attr( "alt" ) );
	})
	//before
	$('#before').click(function(){
		$( "#beforeP" ).before( $( "b" ) );
	});

	//html
	$('#htmlB').click(function(){
		$( ".htmlD" ).html( "<b>Wow!</b> Such excitement..." );
		$( ".htmlD" )
  		.append( document.createTextNode( "!!!" ) )
  		.css( "color", "red" );
  	});

  	//.text
  	$('#textButton').click(function(){
  		$('.textTest').text('Hi, this is a test.');
  	});

  	$('#val').keyup(function(){
  		var value = $(this).val();
  		$('#valP').text(value);
  	})
  	.keyup();

})