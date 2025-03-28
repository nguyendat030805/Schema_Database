<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class customerModel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'gender', 'email', 'address', 'phone_number', 'note'];

    public function bills()
    {
        return $this->hasMany(billsModel::class);
    }
}
