<?php

namespace App\Repositories\Contracts;

interface NewsRepositoryInterface
{
    public function detailNews($slug);

    public function getListNews();
}
