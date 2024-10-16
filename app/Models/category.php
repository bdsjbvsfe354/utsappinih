<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class category extends Model
{
    use HasFactory;

    protected $table ='category';

    protected $fillable = [
        'category',
        'is_active',
    ];


    public function product(): HasMany
    {
        return $this->hasMany(product::class);
    }

}
