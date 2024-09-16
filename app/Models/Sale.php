<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = ['seller_id','customer_id','vehicle_id','total'];

    public function seller(): BelongsTo{
        return $this->belongsTo(Seller::class);
    }

    public function customer(): BelongsTo{
        return $this->belongsTo(Customer::class);
    }

    public function vehicle(): BelongsTo{
        return $this->belongsTo(Vehicle::class);
    }
}
