<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\NewsRepositoryInterface;

class NewsController extends Controller
{
    protected $newsRepository;

    public function __construct(
        NewsRepositoryInterface $newsRepository
    ) {
        $this->newsRepository = $newsRepository;
    }

    public function listNews()
    {
        return view('admin.news.blade.php');
    }

    public function getNews()
    {
        $news =$this->newsRepository->getListNews();

        return view('user.news', ['data' => $news]);
    }

    public function detailNews($slug)
    {
        $data = $this->newsRepository->detailNews($slug);

        return view('user.detailNews', ['data' => $data]);
    }
}
