<?php

namespace App\Models\mechanicserives;


use App\Models\User;
use App\Models\services\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MechanicService extends Model
{
    use HasFactory;

    protected $table = "mechanic_service";

    public function mechanic(){
    return $this->belongsTo(User::class, 'mechanic_id');
    }

    public function service(){
    return $this->belongsTo(Service::class);
    }

}
