<?php

namespace App\Repositories\News;

use App\Models\News;
use App\Repositories\News\NewsRepositoryInterface;
use App\Repositories\BaseRepository;

class NewsRepository extends BaseRepository implements NewsRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return News::class;
    }

}
