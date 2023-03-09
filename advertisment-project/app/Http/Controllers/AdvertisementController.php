<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdvertisementRequest;
use App\Http\Resources\AdvertisementDetailResource;
use App\Http\Resources\AdvertisementResource;
use App\Services\AdvertisementService;

class AdvertisementController extends AppBaseController
{
    protected $advertisementService;

    public function __construct(AdvertisementService $advertisementService)
    {
        $this->advertisementService = $advertisementService;
    }

    public function index()
    {
        $advertisements = $this->advertisementService->getAll(['linkImages']);

        return $this->sendResponse(AdvertisementResource::collection($advertisements), 'Created success');
    }

    public function show($id)
    {
        $advertisement = $this->advertisementService->find($id);
        if (empty($advertisement)) {
            return $this->sendError('Advertisement not found');
        }

        return $this->sendResponse(new AdvertisementDetailResource($advertisement), 'Advertisement retrieved successfully');
    }

    public function store(AdvertisementRequest $request)
    {
        try {
            $dataRequest = $request->validated();
            $advertisement = $this->advertisementService->create($dataRequest);
            $this->advertisementService->createLinkImage($dataRequest, $advertisement->id);

            return $this->sendResponse($advertisement->id, 'Created success');
        } catch (\Exception $e) {
            return $this->sendError('Created error', 400);
        }
    }
}
