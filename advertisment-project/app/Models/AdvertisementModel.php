<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdvertisementModel extends BaseModel
{
    use HasFactory;

    protected $table = 'advertisements';

    protected $fillable = [
        'id',
        'title',
        'description',
        'price'
    ];

    public function linkImages()
    {
        return $this->hasMany(LinkImageModel::class, 'advertisement_id', 'id');
    }
}
