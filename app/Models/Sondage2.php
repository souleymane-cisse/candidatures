<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sondage2 extends Model
{
    use HasFactory;

    protected $table = 'sondage2';

    protected $fillable = ['user_id', 'choix1', 'choix2', 'choix3'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
