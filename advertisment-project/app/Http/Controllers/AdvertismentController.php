<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdvertismentService;

class AdvertismentController extends Controller
{
    protected $advertismentService;

    public function __construct(AdvertismentService $advertismentService) {
        $this->advertismentService = $advertismentService;
    }

    public function index() {
        $advertisments = $this->advertismentService->getAll();
        dd($advertisments);

        return response()->json(['data' => $advertisments]);
    }

    public function show() {
        dd(2);
    }

    public function store() {
        dd(3);
    }
}
