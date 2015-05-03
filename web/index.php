<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return 'Hello';
});

$app->run();

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Confuso</title>
  </head>
  <body>
    <h4>Would this be where I start my site?</h4>
  </body>
</html>