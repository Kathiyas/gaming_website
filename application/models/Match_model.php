<?php

use function PHPSTORM_META\type;

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

    public function get_team_turn($match_id){
        //echo "match: " .$match_id;
       // die();
       //echo gettype($match_id);
                    
         $result =   $this->db->select('turn_team_id')
                    ->where('id', $match_id)
                    ->get('game_match');
      
      if($result->num_rows() > 0){
            foreach($result->result() as $row):
   
                $data[] = $row;
            endforeach;
      }
      else{
          echo 'not found';
      }
        return $data;       
    }

    public function turn_update($turn_id ,$match_id ){
        $this->db->set('turn_team_id', ($turn_id == 1)?2:1);
        $this->db->where('id', $match_id);
        if($this->db->update('game_match')){
            return true;
        }
        else
            return false;

    }

    public function get_map($map_id){
        $id = $map_id[4];
        $sql = "SELECT name FROM map where id = '$id'";
       $result =  $this->db->query($sql);

       if($result->num_rows() > 0){
            foreach($result->result() as $row):

                $data[] = $row;
            endforeach;
            return $data;
         }
        
    }


    public function update_map($map_name , $turn_id,$match_id){

    
        $sql = "SELECT * FROM map_ban where match_id = '$match_id'";
        $result1 =  $this->db->query($sql);

        if($result1->num_rows() > 0){
            foreach($result1->result() as $row):

                $data1[] = $row;
            endforeach;
            
        }
          
        $data = array(
            $map_name => $turn_id,
            ($turn_id == 1)? 'num_of_team_1_ban':'num_of_team_2_ban' => ($turn_id == 1)? ((int)$data1[0]->num_of_team_1_ban+1): ((int)$data1[0]->num_of_team_2_ban+1)
        );
        $this->db->where('match_id', $match_id);
       $result =  $this->db->update('map_ban',$data);
        //$result =  $this->db->query($sql1);
        //die();

        if($result){
            return true;
        }
        else
            return false;


    }

    public function get_map_status(){
       $result = $this->db->get("map_ban");

        if($result->num_rows() > 0){
            foreach($result->result() as $row):

                $data[] = $row;
            endforeach;
            return $data;
        }
        return false;

    }

    public function get_num_ban($turn_id , $match_id){
        $sql = "SELECT * FROM map_ban where match_id = '$match_id'";
        $result =  $this->db->query($sql);
        //echo $turn_id;
        if($result->num_rows() > 0){
             foreach($result->result() as $row):
 
                 $data[] = $row;
             endforeach;
             
        }

     return  ($turn_id == 1) ? (int)$data[0]->num_of_team_1_ban:(int)$data[0]->num_of_team_2_ban;
      
    }

    public function insert_selected_match($turn_id , $match_id , $map_id , $map_name){
        $id = $map_id[4];
        $data = array(
            'match_id' => $match_id,
            'map_id' => $id,
            'team_id' =>$turn_id
        );
        
        $this->db->insert('selected_match', $data);

       
       $sql = "SELECT * FROM map_ban where match_id = '$match_id'";
       $result1 =  $this->db->query($sql);

       if($result1->num_rows() > 0){
           foreach($result1->result() as $row):

               $data1[] = $row;
           endforeach;
           
       }
         
       $data = array(
           $map_name => ($turn_id == 1)? '3':'4',
           ($turn_id == 1)? 'num_of_team_1_ban':'num_of_team_2_ban' => ($turn_id == 1)? ((int)$data1[0]->num_of_team_1_ban+1): ((int)$data1[0]->num_of_team_2_ban+1)
       );
       //var_dump( $data);
       $this->db->where('match_id', $match_id);
      $result =  $this->db->update('map_ban',$data);

      $this->db->set('turn_team_id', ($turn_id == 1)?2:1);
      $this->db->where('id', $match_id);
      $this->db->update('game_match');
          

      if($result){
          return true;
      }
      else{
        return false;
      }
    }

    public function update_selected_match($turn_id , $match_id , $map_id , $map_name){
        $id = $map_id[4];
        $data = array(
            'match_id' => $match_id,
            'map_id' => $id,
            'team_id' =>$turn_id
        );
        
        $this->db->insert('selected_match', $data);

        $sql = "SELECT * FROM map_ban where match_id = '$match_id'";
       $result1 =  $this->db->query($sql);

       if($result1->num_rows() > 0){
           foreach($result1->result() as $row):

               $data1[] = $row;
           endforeach;
           
       }
         
       $data = array(
           $map_name => 5
       );
       //var_dump( $data);
       $this->db->where('match_id', $match_id);
       $result =  $this->db->update('map_ban',$data);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    public function reset_map_ban($match_id){
        $data = array(
            'club_house' => 0,
            'coastline' => 0,
            'consulate' => 0,
            'kafe_dostoyevsky'=> 0,
            'oregon' =>0,
            'theme_park' => 0,
            'villa' => 0,
            'num_of_team_1_ban' => 0,
            'num_of_team_2_ban' => 0
        );
      $this->db->where('match_id', $match_id);
      if($this->db->update('map_ban' ,$data)){
          return true;
      }else{
          return false;
      }

    }

    public function reset_selected_map($match_id){
        $this->db->query("DELETE FROM selected_match WHERE match_id='$match_id'");
    }

    public function rest_turn($match_id){
        $data = array(
            'turn_team_id' => 1
        );
        $this->db->where('id', $match_id);
        if($this->db->update('game_match' ,$data)){
            return true;
        }else{
            return false;
        }
    }

    public function get_selected_match($match_id){
       $result =  $this->db->query("SELECT * FROM selected_match where match_id = '$match_id' ");
       if($result->num_rows() > 0){
        foreach($result->result() as $row):

            $data[] = $row;
        endforeach;
        }

        return ($result->num_rows());
        
    }

    public function get_selected_match_name($match_id){
        $result =  $this->db->query(" SELECT * FROM selected_match JOIN map ON selected_match.match_id = '$match_id' and selected_match.map_id = map.id");
        if($result->num_rows() > 0){
         foreach($result->result() as $row):
 
             $data[] = $row;
         endforeach;
         return $data;
         }

         return array();  

         
    }

    public function find_non_selected_map($match_id){
        $result = $this->db->query("SELECT * FROM map_ban where match_id = '$match_id'");

        if($result->num_rows() > 0){
            foreach($result->result() as $row):

                $data[] = $row;
            endforeach;
        }

        if($data[0]->club_house == 0){
            return 'club_house';
        }
        else if($data[0]->coastline == 0){
            return 'coastline';
        }
        else if($data[0]->consulate == 0){
            return 'consulate';
        }
        else if($data[0]->kafe_dostoyevsky == 0){
            return 'kafe_dostoyevsky';
        }
        else if($data[0]->oregon == 0){
            return 'oregon';
        }
        else if($data[0]->theme_park == 0){
            return 'theme_park';
        }
        else if($data[0]->villa == 0){
            return 'villa';
        }

    }


}