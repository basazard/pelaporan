<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screen extends Model
{
    use HasFactory;

    protected $primaryKey = 'screen_id';

    protected $guarded =[];

    public $timestamps = false;

    public $incrementing = false;

    public function screengroup()
    {
        return $this->belongsTo(Screengroup::class, 'screengroup_id', 'screengroup_id');
    }

    public function subscreens(){
        return $this->hasMany(Subscreen::class, 'screen_id', 'screen_id');
    }
}
