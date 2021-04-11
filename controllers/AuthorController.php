<?php
  require_once('Author.php');

  class AuthorController extends Controller {

    public function index() {  
      return view('author/index', ['authors'=>Author::all(), 'title'=>'Author List']);
    }

    public function show($id) {
      $author = Author::find($id);
      return view('author/show', ['author'=>$author, 'title'=>'Author Detail']);
    }
  }
?>