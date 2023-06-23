<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'lang',
        'path',
        'type_id',
    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
