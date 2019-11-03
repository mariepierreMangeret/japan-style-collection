<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actuality extends Model
{
    protected $fillable = ['title', 'content'];

    public function file()
    {
        return $this->hasOne(File::class);
    }
}
