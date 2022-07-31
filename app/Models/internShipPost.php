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
        return $this->belongsTo(CompanyUser::class,'company_id');
    }

    public function student()
    {
        return $this->belongsTo(StudentUser::class,'student_id');
    }
    
}
