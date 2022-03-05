<?php

namespace Pages;

use Pages\Page;
use Models\HomeModel;
use Models\AboutModel;

class Home extends Page {

    function __construct() {
        $this->model = new HomeModel();
        $this->model1 = new AboutModel();
        Parent::__construct();
    }

    public function index() {
        $this->data['categories'] = $this->model->getHomeCategories();

        $this->data['about'] = $this->model1->GET();
        
        $this->load('views/frontend/home/index.php');
        
    }

}