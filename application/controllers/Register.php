<?php

class Register extends CI_Controller {

        public function index()
        {
                

                 $this->load->library('form_validation');
                 $this->load->helper('form');
                 $this->form_validation->set_rules('email', 'Email', 'required|regex_match[/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/]');
                 $this->form_validation->set_rules('name', 'Name', "required|regex_match[/^([a-zA-Z]{2,}\s[a-zA-z]{1,}'?-?[a-zA-Z]{2,}\s?([a-zA-Z]{1,})?)/]");
                 $this->form_validation->set_rules('mobile', 'Mobile', 'required');
                 $this->form_validation->set_rules('dob', 'Dob', 'required');
                 $this->form_validation->set_rules('pin', 'Pin', 'required|regex_match[/^[1-9][0-9]{5}$/]');
                 

                 if ($this->form_validation->run() == FALSE)
                 {
                         $this->load->view("View_form");
                 }
                 else
                 {      $data=array(
                    "name"=>$this->input->post("name"),
                    "email"=>$this->input->post("email"),
                    "mobile"=>$this->input->post("mobile"),
                    "DOB"=>$this->input->post("dob"),
                    "pincode"=>$this->input->post("pin")
                );
                         
                $this->load->model("My_model");
                $this->my_model->insert_data($data);
                
                 }
                

        }
}