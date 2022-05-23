<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpClient\HttpClient;
use GuzzleHttp\Psr7\Request;

class SearchBeerController extends Controller
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function searchBeerByFood()
    {

        $httpClient = HttpClient::create();

        $options = [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ]
        ];

        $response = $httpClient->request('GET', 'https://api.punkapi.com/v2/beers');
        $dataJson = json_decode($response->getContent(), true);
        echo $response->getContent();
        die;
   }
}