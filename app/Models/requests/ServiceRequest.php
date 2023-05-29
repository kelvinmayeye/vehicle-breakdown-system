<?php

namespace App\Models\requests;

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

        public function mechanic(){
        return $this->belongsTo(User::class, 'mechanic_id');
        }

        public function service(){
        return $this->belongsTo(Service::class);
        }
}
