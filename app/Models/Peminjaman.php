<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $guarded = ['id'];

    public function buku() {
        return $this->belongsTo(Buku::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
    use HasFactory;

    use SoftDeletes;
}
