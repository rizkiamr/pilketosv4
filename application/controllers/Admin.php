<?php


class Admin extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin_model');
            $this->load->library('form_validation');
        }
        
        
        public function index(){
            $data['judul'] = 'dashboard';
            $data['pemilih'] = $this->admin_model->pemilih();
            $data['sudah_memilih'] = $this->admin_model->sudah_memilih();
            $data['ketua1'] = $this->admin_model->index();
            $data['ketua2'] = $this->admin_model->ketua_2();

            if( $this->session->login ){
                $this->load->view('templates/header', $data);
                $this->load->view('admin/index' , $data);
                $this->load->view('templates/footer');
            
            }
            else {
                redirect('admin/login');
            }
        }


        public function login(){
            $data['judul'] = 'dashboard';
            $this->load->view('templates/header' , $data);
            $this->load->view('admin/login');
            $this->load->view('templates/footer');

            if( $this->input->post('username') == 'admin' && $this->input->post('password') == 'osis_smea' ){
                $this->session->login = true;
                redirect('admin/index');
                
            }

            else {
                $this->session->login = false;
                $this->session->set_flashdata('login_admin_salah' , 'username atau password salah');
            }
        }

        // logout

        public function logout(){
            $this->session->sess_destroy();
            redirect('home');
        }

        public function daftar_kandidat(){
            $data['judul'] = 'daftar kandidat';

            
            $data['ketua_1'] = $this->admin_model->index();
            $data['ketua_2'] = $this->admin_model->ketua_2();
            

            if ( $this->session->login ){

            $this->load->view('templates/header', $data);
            $this->load->view('admin/daftar_kandidat' , $data);
            $this->load->view('templates/footer');

            }

            else{
                redirect('admin/login');
            }
        }

        public function lihat_hasil(){
            $data['judul'] = 'lihat hasil';

            if( $this->session->login){
            $data['ketua_1'] = $this->admin_model->index();
            $data['ketua_2'] = $this->admin_model->ketua_2();
            
            $this->load->view('templates/header' , $data);
            $this->load->view('admin/lihat_hasil' , $data);
            $this->load->view('templates/footer' );

            }

            else{
                redirect('admin/login');
            }
        }

        public function tambah_ketua_1(){


            
            $data['judul'] = 'tambah kandidat ketua 1';
            $data['kandidat'] = $this->admin_model->index();

            $this->form_validation->set_rules('nama' , 'Nama' , 'required');
            $this->form_validation->set_rules('kelas' , 'Kelas' , 'required');
            $this->form_validation->set_rules('visi' , 'Visi dan Misi' , 'required');

            if($this->form_validation->run() == false ){
                // $error = array('error' => $this)
                $this->load->view('templates/header' , $data);
                $this->load->view('admin/tambah_ketua_1', $data);
                $this->load->view('templates/footer' );
            }

            else{
                $this->admin_model->tambah_ketua_1();
                $this->session->set_flashdata('flash' , 'berhasil ditambahkan');
                redirect( 'admin/daftar_kandidat');
            }

        }

        public function hapus_ketua_1($id) {
            $this->admin_model->hapus_ketua_1($id);
            $this->session->set_flashdata('flash' , 'dihapus');
            echo 'berhasil';
            redirect('admin/daftar_kandidat');

        }

        public function hapus_ketua_2($id) {
            $this->admin_model->hapus_ketua_2($id);
            echo 'berhasil';
            redirect('admin/daftar_kandidat');

        }

        
        public function tambah_ketua_2(){

       
            
            $data['judul'] = 'tambah kandidat ketua 2';
            $data['kandidat'] = $this->admin_model->index();

            $this->form_validation->set_rules('nama' , 'Nama' , 'required');
            $this->form_validation->set_rules('kelas' , 'Kelas' , 'required');
            $this->form_validation->set_rules('visi' , 'Visi dan Misi' , 'required');

            if($this->form_validation->run() == false ){
                // $error = array('error' => $this)
                $this->load->view('templates/header' , $data);
                $this->load->view('admin/tambah_ketua_2', $data);
                $this->load->view('templates/footer' );
            }

            else{
                $this->admin_model->tambah_ketua_2();
                $this->session->set_flashdata('flash' , 'berhasil ditambahkan');
                redirect( 'admin/daftar_kandidat');
            }

        }

    // edit data

    public function edit_ketua_1($id){
        $data['judul'] = 'edit kandidat 1';
        $data['kandidat'] = $this->db->get_where(  'ketua_1' , ['id' => $id])->result_array();

        $this->form_validation->set_rules('nama' , 'Nama' , 'required');
        $this->form_validation->set_rules('kelas' , 'Kelas' , 'required');
        $this->form_validation->set_rules('visi' , 'Visi dan Misi' , 'required');

        if($this->form_validation->run() == false ){
            // $error = array('error' => $this)
            $this->load->view('templates/header' , $data);
            $this->load->view('admin/edit_ketua_1', $data);
            $this->load->view('templates/footer' );
        }

        else{
            $this->admin_model->edit_ketua_1($id);
            $this->session->set_flashdata('flash' , 'berhasil diubah');
            redirect( 'admin/daftar_kandidat');
        }
    }


    // edit ketua 

    public function edit_ketua_2($id){
        $data['judul'] = 'edit kandidat 2';
        $data['kandidat'] = $this->db->get_where(  'ketua_2' , ['id' => $id])->result_array();

        $this->form_validation->set_rules('nama' , 'Nama' , 'required');
        $this->form_validation->set_rules('kelas' , 'Kelas' , 'required');
        $this->form_validation->set_rules('visi' , 'Visi dan Misi' , 'required');

        if($this->form_validation->run() == false ){
            // $error = array('error' => $this)
            $this->load->view('templates/header' , $data);
            $this->load->view('admin/edit_ketua_1', $data);
            $this->load->view('templates/footer' );
        }

        else{
            $this->admin_model->edit_ketua_2($id);
            $this->session->set_flashdata('flash' , 'berhasil diubah');
            redirect( 'admin/daftar_kandidat');
        }
    }

    // detail kandidat 
    // halaman lihat hasil

    public function detail_kandidat_1($id){
        $data['judul'] = 'detail kandidat';
        $data['ketua_1'] = $this->db->get_where('ketua_1' , ['id' => $id])->result_array();
        $this->load->view('templates/header' , $data);
        $this->load->view('admin/detail_kandidat_1', $data);
        $this->load->view('templates/footer' );
    }

    
    public function detail_kandidat_2($id){
        $data['judul'] = 'detail kandidat';
        $data['ketua_2'] = $this->db->get_where('ketua_2' , ['id' => $id])->result_array();
        $this->load->view('templates/header' , $data);
        $this->load->view('admin/detail_kandidat_2', $data);
        $this->load->view('templates/footer' );
    }

       
    }