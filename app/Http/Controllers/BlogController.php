<?php

namespace App\Http\Controllers;

use App\Models\News;
use GuzzleHttp\Client;

class BlogController extends Controller
{
    protected $newsModel;
    protected $randomUserApiUrl;

    public function __construct()
    {
        $this->newsModel = new News();
        $this->randomUserApiUrl = 'https://randomuser.me/api/';
    }

    public function index()
    {
        $news = $this->newsModel->getNews();

        foreach ($news->articles as $article) {
            $article->author = $this->getRandomUser();
        }

        return view('blog.index', compact('news'));
    }

    protected function getRandomUser()
    {
        $client = new Client();
        $response = $client->get($this->randomUserApiUrl);

        $user = json_decode($response->getBody()->getContents());

        return $user->results[0];
    }
}
