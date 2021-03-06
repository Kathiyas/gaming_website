<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('upload');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        
        $this->load->database();
      
         $this->load->model('team_model');
      
    }

    public function index(){
        $data["page_title"] = "Dashborad";
        $data['teams']  = $this->team_model->get_all_teams();
        $this->load->view('admin/index.php' , $data);
    }

    public function add_team(){
        if($_FILES['file_name']['name'] && $this->input->post('name') != ""){
            $extension = pathinfo($_FILES['file_name']['name'], PATHINFO_EXTENSION);
            $unique_no = uniqid(rand()) . time();
            $filename = $unique_no . '.' . $extension;
            $team_name = $this->input->post('name');

            $target_path = "./images/";
            if (!is_dir($target_path)) {
                mkdir($target_path);
            }

            $config = array();
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['overwrite'] = TRUE;
            $config['remove_spaces'] = TRUE;
            $config['file_name'] = $filename;
            $config['upload_path'] = $target_path;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('file_name');

            if ($this->team_model->add_team($filename ,$team_name)) {
                $this->session->set_flashdata('team_upload', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Team added Sucessfully
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('/');
            } else {
                $this->session->set_flashdata('team_upload', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Something went wrong please contact  admin 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
                redirect('/');
            }

        }
        
        else 
         {
            //$error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('team_upload', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Please check may be team name or file is not selectet sucessfully
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('/');
        }
        
        
    }

    public function view_team(){
      //  $data['teams']  = $this->match_model->get_all_teams();
    }
}