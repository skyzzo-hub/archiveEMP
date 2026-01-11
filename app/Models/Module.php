<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //
    public function files()
    {
        return $this->hasMany(File::class);
    }

}
