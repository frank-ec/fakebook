<?php

class Home extends Controller {

    public function index(){

        $data = [
            "name"=>"Mi sitio",
            "address"=>"Ecuador"
        ];
           $this->view('home', $data);

    }
}



?>