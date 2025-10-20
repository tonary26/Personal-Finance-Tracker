<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Spending;

class Category extends Model
{
    public function spendings()
    {
        return $this->hasMany(Spending::class, 'category_id', 'id');
    }
}
