<?php
  class HomeController extends Controller {

    public function index() {  
      return view('home/home', ['title'=>'Welcome']);
    }
  }
?>