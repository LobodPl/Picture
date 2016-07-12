<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/
?>
<html>
<head>
<link href="./bower_components/lightbox2/dist/css/lightbox.css" rel="stylesheet">
</head>
<body>
<?php
$n = 1;
$folder = dir("./pic");
while (false !== ($entry = $folder->read())) {
	if (($entry !== ".")&&($entry !== ".."))
   echo "<a href='./pic/".$entry."' data-lightbox='image-".$n."' data-title='Opis'><img src='./pic/".$entry."' height='150' width='150'></a><br>";
	$n++;

}
$folder->close();
?>
<script src="./bower_components/lightbox2/dist/js/lightbox-plus-jquery.min.js"></script>
</body>
</html>