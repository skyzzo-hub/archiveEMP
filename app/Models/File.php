<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files';
    protected $fillable = [
        'filename',
        'filepath',
        'category',
        'filetype',
        'size',
        'icon'
    ];
    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
