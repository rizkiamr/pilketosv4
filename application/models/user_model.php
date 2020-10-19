<?php

    class user_model extends CI_Model{
        public function index(){
            return $this->db->get('ketua_1')->result_array();
        }

        public function pilih_ketua_1($id){
            $this->db->where('id' , $id);
          
            $this->db->set('jumlah' , 'jumlah+1' , false);
            $this->db->update('ketua_1');
        }

        
        public function pilih_ketua_2($id){
            $this->db->where('id' , $id);
          
            $this->db->set('jumlah' , 'jumlah+1'  , false);
            $this->db->update('ketua_2');

            redirect('user/logout');

        }

        public function user_active($user){
            $this->db->where('token' ,$user);
            $this->db->set('aktif' , 1);
            $this->db->update('token');

            
        }

        public function index_2(){
            return $this->db->get('ketua_2')->result_array();
        }
        
    }