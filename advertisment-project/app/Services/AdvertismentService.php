<?php

namespace App\Services;
use App\Services\BaseService;
use App\Repositories\AdvertismentRepository;

class AdvertismentService extends BaseService
{
	public function __construct(AdvertismentRepository $advertismentRepository) {
		$this->repository = $advertismentRepository;
	}

	public function getALl() {
		return $this->repository->all();
	}
}

?>