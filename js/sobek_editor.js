(function(){
	
	tinymce.init({
    	selector: ".editor"
		,language: "pt_BR"
		,max_height: 500
		,min_height: 250
		,height : 380
 	});
	
	
	$('#sobek-tab').click(function(){
		
		var rawText = tinyMCE.get('raw-text').getContent();
		
		$('#sobek-text-input').val($(rawText).text());
		
		
	});
	
	
})();


