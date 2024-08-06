<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected $fillable = ['title', 'excerpt', 'body']; //yang boleh diisi title, excerpt, dan body sisanya gak boleh.
    protected $guarded = ['id'];//yang tidak boleh di isi hanya id sisanya boleh.

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
