<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Base extends CI_Controller{
    function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->helper('text');
        $this->load->library('pagination');
        $this->load->library('upload');
        $this->load->library('email');


    }

}

