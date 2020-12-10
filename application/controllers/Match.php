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

    public function match_team_update(){
        $team_1_id = $this->input->post('team1');
        $team_2_id = $this->input->post('team2');

        if($team_1_id == $team_2_id){
            $this->session->set_flashdata('team_match','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Team 1 and Team 2 must be different to update
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('match');
          return;
        }
        else{
            $result =$this->match_model->match_team_update($team_1_id , $team_2_id);
            if($result){
                $this->session->set_flashdata('team_match','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Team updated Succesfully
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            }else{
                $this->session->set_flashdata('team_match','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Something Wrong contact system admin
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            }
          redirect('match');


        }

    }
}