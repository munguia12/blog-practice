<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class News extends Model
{
    protected $newsApiKey;

    public function __construct()
    {
        $this->newsApiKey = env('NEWS_API_KEY');
    }

    public function getNews()
    {
        $client = new Client();
        $response = $client->get('https://newsapi.org/v2/top-headlines', [
            'query' => [
                'country' => 'us',
                'apiKey' => $this->newsApiKey,
            ],
        ]);

        return json_decode($response->getBody()->getContents());
    }
}
