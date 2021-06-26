<?php
class Login extends CI_Controller {

        public function index()
        {   $this->load->library('form_validation');
                $this->load->view('admin/login');
             
        }
        public function authenticate(){
                $this->load->library('form_validation');
                $this->load->model('Admin_model');

                $this->form_validation->set_rules('username','Username','trim|required');
                $this->form_validation->set_rules('password','Password','trim|required');

                if ($this->form_validation->run() == true){
      // $username= trim($this->input->post('username'));
      // $password= trim($this->input->post('password'));
                
                        //form_suucces
                  $this->load->view('admin/dashboard');
                }else{
                    $this->load->view('admin/login');
                    //form_error
                }
        }
}