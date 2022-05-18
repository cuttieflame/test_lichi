<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, int $int)
 */
class Group extends Model
{
    use HasFactory;

    public function products() {
        return $this->hasMany(Product::class,'id_group','id');
    }
    public function groups() {
        return $this->hasMany(Group::class,'id_parent','id');
    }
    public function childrenProducts()
    {
        return $this->hasMany(Group::class,'id_parent','id')
            ->with(['groups','products']);
    }
}
