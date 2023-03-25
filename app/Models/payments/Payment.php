<?php

namespace App\Models\payments;


use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;


    public function customer(){
    return $this->belongsTo(User::class, 'customer_id');
    }

    public function mechanic(){
    return $this->belongsTo(User::class, 'mechanic_id');
    }

}
