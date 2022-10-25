<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'materials';
    protected $guarded = [];
    protected $hidden;

    // To get relational data from Type
    public function types() 
    {
        return $this->hasMany(Type::class, 'material_id');
    }
}
