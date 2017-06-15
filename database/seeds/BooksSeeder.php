<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\Book;
class BooksSeeder extends Seeder
{
    public function run()
    {
        // Sample penulisan
        $author1 = Author::create(['name'=>'Mohammad Fauzal Adhim']);
        $author2 = Author::create(['name'=>'Indah Lorentina']);
        $author3 = Author::create(['name'=>'Salim A. Fillah']);

		// Sample buku
        $book1 = Book::create(['title'=>'Kupinang Engkau Dengan Hamdalah','amount'=>3,'author_id'=>$author1->id]);
 		$book2 = Book::create(['title'=>'Jalan Cinta Para Pejuang','amount'=>2,'author_id'=>$author2->id]);
 		$book3 = Book::create(['title'=>'Membingkai Surga Di Dalam Rumah Tangga','amount'=>4,'author_id'=>$author3->id]);
 		$book4 = Book::create(['title'=>'Cinta & Seks Rumah Tangga Muslim','amount'=>3,'author_id'=>$author3->id]);
    }
}
