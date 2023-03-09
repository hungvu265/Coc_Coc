<?php

namespace App\Services;
use App\Repositories\LinkImageRepository;
use App\Repositories\AdvertisementRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdvertisementService extends BaseService
{
    private $linkImageRepository;

	public function __construct(
        AdvertisementRepository $advertisementRepository,
        LinkImageRepository $linkImageRepository
    )
    {
		$this->repository = $advertisementRepository;
        $this->linkImageRepository = $linkImageRepository;
	}

	public function getALl($with = [], $paginate = 10)
    {
		$advertisements = $this->repository->getAll($paginate);
        if (! empty($with)) {
            $advertisements->loadMissing($with);
        }

        return $advertisements;
	}

    public function createLinkImage($dataRequest, $advertisementId)
    {
        $linkImages = [];
        foreach ($dataRequest['link_image'] as $link) {
            $linkImages[] = [
                'id' => Str::uuid(),
                'advertisement_id' => $advertisementId,
                'link' => $link,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        return DB::table('link_images')->insert($linkImages);
    }
}
