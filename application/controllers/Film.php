<?php

class Film extends CI_Controller
{
    public function index()
    {
        echo "Hello Zainimar Cute";
        $client = new GuzzleHttp\Client();
        $url = 'http://localhost:8080/webservice/sakila/film_svc.php';
        //call url page web service api 
        $res = $client->request('GET', $url);
        $rows = json_decode($res->getBody()->getContents());
        foreach ($rows as $film) {
            echo $film->title . '<br>';
        }
    }
}