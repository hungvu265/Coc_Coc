<?php

namespace App\Repositories;

use App\Models\LinkImageModel;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

class LinkImageRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return LinkImageModel::class;
    }
}
