<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    use HasFactory;

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function ink_level()
    {
        return $this->belongsTo(InkLevel::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

}
