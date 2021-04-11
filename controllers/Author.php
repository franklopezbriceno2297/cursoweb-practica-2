<?php

class Author extends Model {

  static $authors = [
    [
      'id'=>1,
      'author'=>'Abraham Silberschatz',
      'nationality'=>'Israelis / American',
      'birth_year'=>1952,
      'field1'=>'Database Systems',
      'field2'=>'Operating Systems',
      'books_book_id'=>1,
      'books_title'=>'Operating System Concepts',
      'books_book_id_2'=>2,
      'books_title_2'=>'Database System Concepts'
    ], 
    [
      'id'=>2,
      'author'=>'Andrew S. Tanenbaum',
      'nationality'=>'Dutch / American',
      'birth_year'=>1944,
      'field1'=>'Distributed computing',
      'field2'=>'Operating Systems',
      'books_book_id'=>3,
      'books_title'=>'Computer Networks',
      'books_book_id_2'=>4,
      'books_title_2'=>'Modern Operating Systems'
    ]
  ];

  public static function all() { 
    return self::$authors; 
  }

  public static function find($id) {
    foreach (self::$authors as $key => $author)
      if ($author['id'] == $id) return $author;
  
    return [];
  }
}
?>