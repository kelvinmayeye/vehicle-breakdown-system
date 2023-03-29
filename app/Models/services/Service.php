<?php

namespace App\Models\services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\mechanicserives\MechanicService;
use App\Models\request\ServiceRequest;

class Service extends Model
{
    use HasFactory;

    public function mechanicServices(){
        return $this->hasMany(MechanicService::class);
    }

    public function request(){
        return $this->hasMany(ServiceRequest::class);
    }
}
