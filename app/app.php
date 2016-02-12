<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/CD.php";
    require_once __DIR__."/../src/Artist.php";

    session_start();

    if(empty($_SESSION['cd_list'])) {
        $_SESSION['cd_list'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('home.html.twig', array('newcd' => CD::getAll()));
    });

    $app->get("/add", function() use ($app) {
        return $app['twig']->render('add.html.twig');
    });


    $app->post("/confirmation", function() use ($app) {
        $cd = new CD($_POST['artist'], $_POST['album']);
        $cd->save();
        return $app['twig']->render('confirmation.html.twig', array('newcd'=>$cd));
    });

    $app->post("/clear_list", function() use ($app) {
      return $app['twig']->render('home.html.twig', array('newcd'=> CD::deleteAll()));
    });

    $app->get("/search", function() use ($app) {
        return $app['twig']->render('search.html.twig');
    });

    $app->get('/search_results', function() use ($app) {
        $name = new Artist($_GET['artist']);
        $artist = cd->getArtist();
        return $app['twig']->render('results.html.twig', array('input_artist' => $name, 'newcd'=> CD::getAll(), 'artist_name' => $cd->getArtist. 'matched_artist' => cd.matchArtist()));
    });





    return $app;


?>
