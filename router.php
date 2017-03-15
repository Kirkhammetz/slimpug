<?php
  use \Psr\Http\Message\ServerRequestInterface as Request;
  use \Psr\Http\Message\ResponseInterface as Response;

  $pug = new Pug\Pug(array(
    'prettyprint' => true,
    'extension' => '.pug',
    'basedir' => realpath('./assets/pug'),
    'cache' => realpath('./assets/pug/cache'),
  ));

  /**
   * ROUTES
   */
  $app->get('/', function (Request $request, Response $response) use($pug) {
    return $pug->render($pug->getOption('basedir') . '/index.pug');
  });
  
