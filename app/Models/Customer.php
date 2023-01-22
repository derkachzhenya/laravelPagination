<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Customer extends Model
{
    use HasFactory, Searchable;

    protected $table="customers";
    protected $guarded = [];

    public function toSearchableArray()
    {
        return [
            
            'customer_name' => $this->name,
            
        ];
    }

}


