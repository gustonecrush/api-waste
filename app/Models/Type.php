<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'types';
    protected $guarded = [];
    protected $hidden;
    protected $softDelete = true;

    // To get data relational from Material
    public function material() 
    {
        return $this->belongsTo(Material::class);
    }
}
