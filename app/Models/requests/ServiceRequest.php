<?php

namespace App\Models\requests;

use App\Models\mechanicservices\MechanicService;
use App\Models\payments\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\services\Service;
use App\Models\User;

class ServiceRequest extends Model
{
    use HasFactory;

    protected $table = "requests";

        public function customer(){
            return $this->belongsTo(User::class, 'customer_id');
        }

        public function mechanicService(){
            return $this->belongsTo(MechanicService::class, 'mechanic_service_id');
        }

        public function service(){
            return $this->belongsTo(Service::class);
        }

        public function payment(){
            return $this->hasOne(Payment::class,'request_id');
        }
}
