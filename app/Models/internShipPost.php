<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class internShipPost extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(CompanyUser::class,'company_user_id');
    }

    public function application()
    {
        return $this->hasMany(InternShipApplication::class,'intern_ship_application_id');
    }

}
