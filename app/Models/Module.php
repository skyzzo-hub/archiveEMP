<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model

{
    protected $fillable = ['name', 'coefficient', 'semestre'];

    public function files()
    {
        return $this->hasMany(File::class);
    }

}
