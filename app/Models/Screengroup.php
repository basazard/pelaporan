<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screengroup extends Model
{
    use HasFactory;

    protected $primaryKey = 'screengroup_id';

    protected $guarded =[];

    public $timestamps = false;

    public $incrementing = false;

    public function screens()
    {
        return $this->hasMany(Screen::class, 'screengroup_id', 'screengroup_id');
    }
     
}
