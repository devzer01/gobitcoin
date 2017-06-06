<?php

    $url = "https://bx.in.th/api/";
    $th = json_decode(getUrl($url), true);
    $args['th'] = $th[1]['last_price'];


    var_dump($th);


function getUrl($url) {
    // Get cURL resource
    $curl = curl_init();
    // Set some options - we are passing in a useragent too here
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL =>  $url,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36'
    ));
    // Send the request & save response to $resp
    $resp = curl_exec($curl);
    // C lose request to clear up some resources
    curl_close($curl);
}
