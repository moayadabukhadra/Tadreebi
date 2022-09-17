<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternShipPost extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(CompanyUser::class,'company_users_id');
    }

    public function applications()
    {
        return $this->hasMany(InternShipApplication::class,'intern_ship_application_id');
    }

    public function proposals(){
        return $this->hasMany(Proposal::class,'proposal_id');
    }

}
