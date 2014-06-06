jQuery( function($){
	
	function go(){
		$('img').animate( {'width': '100%'}, 3000, function(){
			$('img').animate( {'width': '20%'}, 3000 );	
			go();
		}); 
	}
	
	go();
	

});