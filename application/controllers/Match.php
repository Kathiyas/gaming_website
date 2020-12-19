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
        $data['map_status'] = $this->match_model->get_map_status();
        $data['selected_match'] = $this->match_model->get_selected_match_name($data['teams'][0]->id);
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
    public function edit(){
      $this->load->view('admin/main.php');
    }

    public function get_turn($match_id){
       $turn =  $this->match_model->get_team_turn($match_id);
       print json_encode($turn);
    }

    public function update_turn($turn ,$match_id,$map_id ){
      if($this->match_model->turn_update($turn , $match_id ) )
      { 
       $map_name =  $this->match_model->get_map($map_id);
        
          if($this->match_model->update_map($map_name[0]->name , $turn , $match_id)){
          return true;
          }
         
      }
      return false;  
    }

   public function get_num_map_ban($turn_id , $match_id ,$map_id){
       $map_name =  $this->match_model->get_map($map_id);
        $num = $this->match_model->get_num_ban($turn_id , $match_id);
        
        if($num == 3){
          $find_non_selected_map_name =  $this->match_model->find_non_selected_map($match_id);
          //var_dump(':'.$find_non_selected_map_name);
          
          if($this->match_model->update_selected_match($turn_id, $match_id,$map_id ,$find_non_selected_map_name)){
            echo 'wait';
          }
          
        }
        else if($num%2 == 0){
          echo 'ban';
        }
        else{
          echo 'selected';
        }
    }


    public function select_match($turn_id , $match_id , $map_id){
      $map_name =  $this->match_model->get_map($map_id);
       if( $this->match_model->insert_selected_match($turn_id, $match_id,$map_id ,$map_name[0]->name)){
          return true; 
       }
       else{
         return false;
       }
    }
    public function update_last_match($turn_id , $match_id , $map_id){
       $map_name =  $this->match_model->get_map($map_id);
        if($this->match_model->update_selected_match($turn_id, $match_id,$map_id ,$map_name[0]->name)){
            return true;
        }else{
          return false;
        }
    }

    public function reset($match_id){
        if($this->match_model->reset_map_ban($match_id)){
            if($this->match_model->reset_selected_map($match_id)){
               if($this->match_model->rest_turn($match_id)){
                 return true;
               }
            }
        }
    }

    public function get_selected_match($match_id){
        $result = $this->match_model->get_selected_match($match_id); 
      if ($result){
            echo $result;
        }
    }





}