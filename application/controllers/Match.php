<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Match extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('upload');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
         $this->load->model('team_model');
         $this->load->model('match_model');

      
    }

    // public function index(){
    //     $data["page_title"] = "Dashborad";
    //     $data['teams']  = $this->team_model->get_all_teams();
    //     $this->load->view('admin/match.php' , $data);
    // }

    public function index(){
        $data["page_title"] = "Dashborad";
        $data['teams']  = $this->match_model->get_teams();
        $data['teams_list']  = $this->team_model->get_all_teams();
        $this->load->view('admin/match.php' , $data);

    }
}