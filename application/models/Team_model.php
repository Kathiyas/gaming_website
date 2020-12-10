<?php

class Team_model extends CI_model {
    public function add_team($file_name , $name){
        $data = array(

            'name' => $name,
            'img' => $file_name,
            
            'created_at' => date('Y-m-d H:i:s', time()),
        );
        $result = $this->db->insert('team', $data);
        return $result;
    }
    

    public function get_all_teams(){
        $q = $this->db->get('team');
        if($q->num_rows() > 0):
            foreach($q->result() as $row):
                $data[] = $row;
            endforeach;
            return $data;
        else:
            return false;
        endif;
        
    }
}

?>