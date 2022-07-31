<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentUser extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function internShipApplication()
    {
        return $this->hasMany(InternShipApplication::class,'intern_ship_application_id');
    }

    public function proposal()
    {
        return $this->hasMany(Proposal::class,'Propsal_id');
    }





}
