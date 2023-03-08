<?php

namespace App\Services;

abstract class BaseService
{

    /**
     * Base repository
     *
     * @var \Prettus\Repository\Eloquent\BaseRepository
     */
    protected $repository;

    protected $with_load = [];

    public function find($id, $with = false)
    {
        $result = $this->repository->find($id);

        if ($with !== false && !empty($result)) {
            if (is_array($with)) {
                $this->with_load = array_merge($this->with_load, $with);
            }

            $result = $result->loadMissing($this->with_load);
        }

        return $result;
    }

    public function delete($id)
    {
        $row = $this->find($id);
        $row->delete();

        return true;
    }
}
