<?php


    class User extends CI_Controller{
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('user_model');
        }
        
        public function login(){
            
            

            $data['judul'] = 'Login';
            $this->session->user = $this->input->post('token');
            
            
          
            $token = $this->db->get_where('token' , ['token' => $this->session->user] )->result_array();
            
            
            $this->load->view('templates/header' , $data);
            $this->load->view('user/login');
            $this->load->view('templates/footer');

           
            if( $token && $token[0]['aktif'] != 1){
             
                $this->session->login_user = true;
                $this->user_model->user_active($this->session->user);
                redirect('user/index');

               
                

            }
            else{
                $this->session->set_flashdata('login_salah' , 'token tidak terdaftar atau sudah pernah digunakan' );

            }

        
            

            
        }

        public function index(){
            
            $data['judul'] = 'pilih ketua 1';
            $data['ketua_1'] = $this->user_model->index();
            if( $this->session->login_user  ){
                
                if( $this->session->pilih_ketua_1 ) {
                    
                    redirect('user/index_2');
                    die;

                
                
            }

            else{
                $this->load->view('templates/header' , $data);
                $this->load->view('user/index' , $data);
                $this->load->view('templates/footer');
            }
            
            
        }
                else{
                    redirect('user/login');
                    die;
                }
        
        

            



        }

        public function logout(){
            $this->session->sess_destroy();
            // $this->session->user = false;
            // $this->session->pilih_ketua_1 = false;
            redirect('user/end');
        }

        public function end(){
            $data['judul'] = 'end';
        
         
                $this->load->view('templates/header', $data);
                $this->load->view('user/sukses');
                $this->load->view('templates/footer');
            

        
        }

        // pilih krtua
        public function pilih_ketua_1($id){
            $this->user_model->pilih_ketua_1($id);
            $this->session->pilih_ketua_1 = true;
            redirect('user/index_2');
            
        }
        
        public function pilih_ketua_2($id){
            $this->user_model->pilih_ketua_2($id);
            
           

        }

        public function index_2(){
            $data['judul'] = 'pilih ketua 2';
            $data['ketua_1'] = $this->user_model->index_2();


            if($this->session->login_user){

                $this->load->view('templates/header', $data);
                $this->load->view('user/index_2', $data);
                $this->load->view('templates/footer');
            }

            else{
                redirect('user/login');
            }
            // echo $this->session->user;
        }

        // detail kandidat ketua ke;as 10

        public function detail_ketua_2($id){
            $data['ketua_1'] = $this->db->get_where('ketua_2',['id' => $id])->result_array();
            $data['judul'] = 'pilih kandidat ketua 2';
            if($this->session->login_user){
                $this->load->view('templates/header' , $data );
                $this->load->view('user/detail_ketua_2' , $data);
                $this->load->view('templates/footer');
            }

            else{
                redirect('user/login');
            }
        }


        // detail kandidat saat user mengklik tombol pilih

        public function detail_ketua_1($id){

            $data['ketua_1'] = $this->db->get_where('ketua_1',['id' => $id])->result_array();
            $data['judul'] = 'pilih kandidat';
            if($this->session->login_user){
                
                if( $this->session->pilih_ketua_1 ) {
                    
                    redirect('user/index_2');
                    die;
                }
                else{
                    $this->load->view('templates/header' , $data );
                    $this->load->view('user/detail_ketua_1' , $data);
                    $this->load->view('templates/footer');
                }
            }

            else{
                redirect('user/login');
            }
        }
    }