(function(){
	
	tinymce.init({
    	selector: ".editor"
		,language: "pt_BR"
		,max_height: 500
		,min_height: 250
		,height : 280
 	});
	
	
	$('#sobek-tab').click(function(){
		
		var rawText = tinyMCE.get('raw-text').getContent();
		
		$('#sobek-text-input').val($(rawText).text());
		
		
	});
	
	$('#file-input').change(function(){

		var fileHelper = new FileHelper();
		var file = fileHelper.loadFile('file-input');
		if(file){
			
			fileHelper.getAsText(file, function(evt){

				tinyMCE.get('raw-text').setContent(evt.target.result);
			});
			
		}
		
		
});
	
	
})();


