<?php

class Auth extends Controller   {

    public function index()
    {
        if ( !isset($_POST['login']) ) {
            $this->view("auth/index");
        } else {
            $this->model('Auth_model')->login($_POST);
        }
    }

    public function logout()
    {
      session_start();
      $_SESSION = [];
      session_unset();
      session_destroy();

      header('Location: '.BASEURL.'/auth/login');
    }

}