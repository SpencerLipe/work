jQuery( function($){
	
	stop = false;
	
	function go(){

		$('img').animate( {'width': '100%'}, 3000, function(){
			$('img').animate( {'width': '20%'}, 3000 );	
			
			if( stop == true ) return;
			go();
		}); 
	}
	
	go();
	
	$('#stop').click( function(){
		stop = true;
	});
	

});