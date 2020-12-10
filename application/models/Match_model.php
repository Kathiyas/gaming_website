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
                        $row->team_1_img = $match_row->img; 
                    endif;
                    if($match_row->id == $row->team_2_id):
                        $row->team_2_name = $match_row->name;
                        $row->team_2_img = $match_row->img; 

                    endif;    
                endforeach;    
                $data[] = $row;
            endforeach;
            return $data;
        else:
            return false;
        endif;
    }

    public function match_team_update($team2_id , $team1_id){
        $data = array(
            'team_1_id'=> $team2_id,
            'team_2_id'=>$team1_id
        );
        $result = $this->db->update('game_match' , $data);
        return $result;
    }


}