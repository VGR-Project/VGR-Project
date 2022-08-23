<?php

class profile extends Controller{
    public function index(){
        $data["title"] = "Edit Profile";
        $this->view("template/header", $data);
        $this->view("profile/index", $data);
        $this->view("template/footer");
    }
}