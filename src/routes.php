<?php
// Routes

$app->get('/', function ($request, $response, $args) {

    $args['th'] = json_decode(file_get_contents("th.json"), true);
    $args['coindesk'] = json_decode(file_get_contents("coindesk.json"), true);

    //http://api.coindesk.com/v1/bpi/currentprice.json

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});