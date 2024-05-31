<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sondage1 extends Model
{
    use HasFactory;

    protected $table = 'sondage1';

    protected $fillable = ['user_id', 'interet'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
