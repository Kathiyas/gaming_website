<?php

class Match_model extends CI_model {

    public function get_teams(){
        $match =  $this->db->get("game_match");
        $team =  $this->db->get("team");
        
        if($match->num_rows() > 0):
            foreach($match->result() as $row):
                foreach($team->result() as $match_row):
                    if($match_row->id == $row->team_1_id):
                        $row->team_1_name = $match_row->name; 
                    endif;
                    if($match_row->id == $row->team_2_id):
                        $row->team_2_name = $match_row->name; 
                    endif;    
                endforeach;    
                $data[] = $row;
            endforeach;
            return $data;
        else:
            return false;
        endif;
    }


}