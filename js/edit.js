var $fileInput = $('#ff');
$fileInput.on('change', function() {
	var $textContainer = $('#text');
	var fileName = $(this).val().split('\\').pop();
	$textContainer.text(fileName);
});
