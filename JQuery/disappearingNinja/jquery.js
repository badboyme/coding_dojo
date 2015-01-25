$(document).ready(function(){	
		
	$( ".ninjaImgShow" ).click(function() {
		$( this ).fadeOut( "slow" );
	});

	$( "#restore" ).click(function() {
		$( ".ninjaImgShow" ).fadeIn( "slow", function() {
		// Animation complete
		});
	});
})	
