<?php
  require_once('Publisher.php');

  class PublisherController extends Controller {

    public function index() {  
      return view('publisher/index', ['publishers'=>Publisher::all(), 'title'=>'Publisher List']);
    }

    public function show($id) {
      $publisher = Publisher::find($id);
      return view('publisher/show', ['publisher'=>$publisher, 'title'=>'Publisher Detail']);
    }
  }
?>