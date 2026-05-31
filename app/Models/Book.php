<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable =[
        'title',
        'author',
        'year',
        'publisher',
        'city',
        'cover',
        'quantity',
        'bookshelf_id',
    ];

    public function bookshelf()
    {
        return $this->belongsTo(Bookshelf::class, 'bookshelf_id', 'id');
    }

    public static function getDataBooks()
    {
        $books = Book::with('bookshelf')->get();
        $books_filter = [];

        $no = 1;

        for($i=0; $i < $books->count(); $i++){

            $books_filter[$i]['no'] = $no++;
            $books_filter[$i]['judul'] = $books[$i]->title;
            $books_filter[$i]['penulis'] = $books[$i]->author;
            $books_filter[$i]['tahun'] = $books[$i]->year;
            $books_filter[$i]['penerbit'] = $books[$i]->publisher;
            $books_filter[$i]['kota'] = $books[$i]->city;
            $books_filter[$i]['quantity'] = $books[$i]->quantity;
            $books_filter[$i]['kategori'] = $books[$i]->bookshelf_id;
        }

        return $books_filter;
    }
}