<?php

namespace App\Models\requests;


use App\Models\User;
use App\Models\services\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

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
