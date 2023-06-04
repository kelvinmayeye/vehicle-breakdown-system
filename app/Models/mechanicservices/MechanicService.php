<?php

namespace App\Models\mechanicservices;

use App\Models\payments\Payment;
use App\Models\requests\ServiceRequest;
use App\Models\User;
use App\Models\services\Service;
use GuzzleHttp\Psr7\ServerRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MechanicService extends Model
{
    use HasFactory;

    protected $table = "mechanic_service";

    public function service(){
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function mechanic(){
        return $this->belongsTo(User::class, 'mechanic_id');
    }

}
