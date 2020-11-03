<?php 

require(__DIR__.'/../vendor/autoload.php');

$fw = Base::instance();
$fw->UPLOADS = 'uploads/';

$fw->route('GET /upload', function($fw) { ?>
<p>Pretty please only upload jpg, gif, or png files.
<form action="/upload" method="post" enctype="multipart/form-data">
	<input type="file" name="myfile">
	<input type="submit" value="Upload">
</form>
<?php });

$fw->route('POST /upload', function($fw) { 

	// first screen for a virus. 

	// second thing is validate the extension, and whitelist allowed extension types.



	Web::instance()->receive();
	$fw->reroute('/upload', false);
});

$fw->run();