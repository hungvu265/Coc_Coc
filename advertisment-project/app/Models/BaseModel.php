<?php

namespace App\Models;

use App\Traits\WithUuid;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use WithUuid;
}
