<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function checkinout()
    {
        return $this->hasOne(CheckInOut::class);
    }

    public function bill()
    {
        return $this->hasOne(Bill::class);
    }

    public function additionalbills()
    {
        return $this->hasMany(AdditionalBill::class);
    }


}