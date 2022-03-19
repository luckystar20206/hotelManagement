<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Roomtype;
class Room extends Model
{
    use HasFactory;

    function Roomtype(){
return $this->belongsTo(RoomType::class,'room_type_id');
    }
}
