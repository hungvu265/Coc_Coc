<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class LinkImageModel extends BaseModel
{
    use HasFactory;

    protected $table = 'link_images';

    protected $fillable = [
        'id',
        'advertisement_id',
        'link'
    ];
}
