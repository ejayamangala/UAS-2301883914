<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    use HasFactory;

    protected $table = 'ebook';
    protected $primaryKey = 'ebook_id';

    protected $fillable = [
        'ebook_id',
        'title',
        'author',
        'description',
    ];


    public function order(){
        return $this->hasMany(Order::class);
    }
}
