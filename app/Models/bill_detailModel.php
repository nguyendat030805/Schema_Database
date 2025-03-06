<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class bill_detailModel extends Model
{
    use HasFactory;

    protected $fillable = ['bill_id', 'product_id', 'quantity', 'unit_price'];

    public function bill()
    {
        return $this->belongsTo(billsModel::class);
    }

    public function product()
    {
        return $this->belongsTo(products5Model::class);
    }
}
