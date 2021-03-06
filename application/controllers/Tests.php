<?php

class Tests extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->load->view('/tests/index');
    }
    public function admin_layout(){
        $this->layout->layout='admin_layout';
        $this->layout->layoutsFolder='layouts/admin';
        $this->breadcrumbs->push('admin_layout','/');
        $this->layout->navTitle='Navigator title';
        $this->layout->render();        
    }
    
    public function lmenu(){
        $this->layout->layout='admin_layout';
        $this->layout->layoutsFolder='layouts/admin';
        $this->breadcrumbs->push('admin_layout','/');
        $this->layout->navTitle='Menu Test';
        $this->scripts_include->includePlugins(array('multiselect'),'js');
        $this->layout->render();  
    }
    
    public function resume_layout(){
        $this->layout->layout='resume_layout';
        $this->layout->layoutsFolder='layouts/resume';
        $this->breadcrumbs->push('resume_layout','/');
        $this->layout->navTitle='Navigator title';
        $this->layout->render();        
    }
    
    public function ecom_layout(){
        $this->layout->layout='ecom_layout';
        $this->layout->layoutsFolder='layouts/ecom';
        $this->breadcrumbs->push('ecom_layout','/');
        $this->layout->navTitle='Navigator title';
        $this->layout->render();        
    }
    
    public function admin_layout2(){
        $this->layout->layout='admin_layout';
        $this->layout->layoutsFolder='layouts/admin';
        $this->breadcrumbs->push('admin_layout','/');
        $this->layout->navTitle='Navigator title';
        $this->layout->render();        
    }
}

