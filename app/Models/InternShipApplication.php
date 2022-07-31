<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternShipApplication extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo(StudentUser::class,'student_user_id');
    }

    public function internShipPost()
    {
        return $this->belongsTo(internShipPost::class,'intern_ship_post_id');
    }


}
