<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_author extends Model
{
    use HasFactory;
    protected $table = 'book_authors';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [ 'book_id', 'author_id' ];
  
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
  
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
