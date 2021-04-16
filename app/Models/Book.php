<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [ 'title', 'excerpt', 'isbn', 'pages', 'cost', 'value', 'released', 'condition_id', 'genre_id' ];
  
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
  
    public function condition()
    {
        return $this->belongsTo(Condition::class);
    }
  
    public function book_authors()
    {
        return $this->hasMany(Book_author::class);
    }
}
