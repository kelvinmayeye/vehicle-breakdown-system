<?php

namespace App\Models\requests;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\services\Service;

class ServiceRequest extends Model
{
    use HasFactory;

    protected $table = "request";

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
