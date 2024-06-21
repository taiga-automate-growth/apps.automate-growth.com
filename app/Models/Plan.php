<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'plan_name', 'description', 'trial_duration', 'price', 'payments_span'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }
}
