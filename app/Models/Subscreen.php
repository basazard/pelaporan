<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscreen extends Model
{
    use HasFactory;

    protected $primaryKey = 'subscreen_id';

    protected $guarded =[];

    public $timestamps = false;

    public $incrementing = false;

    public function screen()
    {
        return $this->belongsTo(Screen::class, 'screen_id', 'screen_id');
    }
}
