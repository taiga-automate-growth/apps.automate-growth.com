<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['contract_id', 'billing_date', 'deadline'];

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }
}
