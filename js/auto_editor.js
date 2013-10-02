(function(){
	
	var options = {			
			max_height: 500
			,min_height: 250
			,height : 280
			, menu: {}
		
	};
	
	var reading = {
			selector: ".reading"
			//,language: "en_us"
			,toolbar: "undo redo | cut copy paste | removeformat"
	};
	
	var writing = {
				selector: ".editor"
			,	toolbar: "undo redo | cut copy paste | bold italic | aligncenter alignright alignjustify | outdent indent | formatselect removeformat"
	};
	
	
	jQuery.extend(writing, options);
	tinymce.init(writing);
	
	jQuery.extend(reading, options);
	tinymce.init(reading);
	
	
	
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


