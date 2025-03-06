<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class billsModel extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'date_order', 'total', 'payment', 'note'];

    public function customer()
    {
        return $this->belongsTo(customerModel::class);
    }

    public function billDetails()
    {
        return $this->hasMany(bill_detailModel::class);
    }
}
