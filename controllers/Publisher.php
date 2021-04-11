<?php

class Publisher extends Model {

  static $publishers = [
    [
      'id'=>1,
      'publisher'=>'John Wiley & Sons',
      'country'=>'United States',
      'founded'=>1807,
      'genere'=>'Academic',
      'books_book_id'=>1,
      'books_title'=>'Operating System Concepts',
      'books_book_id_2'=>2,
      'books_title_2'=>'Database System Concepts'
    ], 
    [
      'id'=>2,
      'publisher'=>'Pearson Education',
      'country'=>'United Kingdom',
      'founded'=>1844,
      'genere'=>'Education',
      'books_book_id'=>3,
      'books_title'=>'Computer Networks',
      'books_book_id_2'=>4,
      'books_title_2'=>'Modern Operating Systems'
    ]
  ];

  public static function all() { 
    return self::$publishers; 
  }

  public static function find($id) {
    foreach (self::$publishers as $key => $publisher)
      if ($publisher['id'] == $id) return $publisher;
  
    return [];
  }
}
?>