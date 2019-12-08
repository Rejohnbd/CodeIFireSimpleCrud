<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __constrct() {
        parent::__construct();
        $this->load->library('firebase');
    }
    
    private function db_reference(){
        $firebase = $this->firebase->init();
        $db = $firebase->getDatabase();
        $reference = $db->getReference('Users');
        return $reference;
    }

    public function index() {
        $data[] = array();
        $db_reference = $this->db_reference();
        $value = $db_reference->getValue();
        $data['users'] = $value; 
        $data['navbar'] = $this->load->view('templates/navbar', '', TRUE);
        $data['content'] = $this->load->view('templates/dashboard', $data, TRUE);
        $this->load->view('master', $data);
    }
    
    public function show_form(){
        $data[] = array();
        $data['navbar'] = $this->load->view('templates/navbar', '', TRUE);
        $data['content'] = $this->load->view('templates/addform', '', TRUE);
        $this->load->view('master', $data);
    }
    
    public function save_data(){
        $data = array();
        $id = $this->db_reference()->push()->getKey();
        $data['id'] = $id;
        $data['userName'] = $this->input->post('user_name', true);
        $data['userEmail'] = $this->input->post('user_email', true);
        $data['userPhone'] = $this->input->post('user_phone', true);
        $data['address'] = $this->input->post('address', true);
        $data['isAdmin'] = $this->input->post('is_admin', true);
        $update = [
           $id => $data
        ];
        $db_reference = $this->db_reference();
        $message = $db_reference->update($update)->getKey();
        if($message === 'Users'){
            $fdata = array();
            $fdata['status'] = 'success';
            $fdata['message'] = 'Saved Successfully';
            $this->session->set_flashdata($fdata);
            $this->show_form();
        }else{
            $fdata = array();
            $fdata['status'] = 'error';
            $fdata['message'] = 'Can not save Data';
            $this->session->set_flashdata($fdata);
            $this->show_form();
        }
    }
    
    public function edit_user($id){
        $data = array();
        $db_reference = $this->db_reference();
        $value = $db_reference->getSnapshot()->getChild($id)->getValue();
        $data['user'] = $value;
        $data['navbar'] = $this->load->view('templates/navbar', '', TRUE);
        $data['content'] = $this->load->view('templates/editform',$data, TRUE);
        $this->load->view('master', $data);
    }
    
    public function update_data(){
        
        $data = array();
        $id = $this->input->post('id', true);
        $data['id'] = $this->input->post('id', true);
        $data['userName'] = $this->input->post('user_name', true);
        $data['userEmail'] = $this->input->post('user_email', true);
        $data['userPhone'] = $this->input->post('user_phone', true);
        $data['address'] = $this->input->post('address', true);
        $data['isAdmin'] = $this->input->post('is_admin', true);
        $update = [
           $id => $data
        ];
        $db_reference = $this->db_reference();
        $message = $db_reference->update($update)->getKey();
        if($message === 'Users'){
            $fdata = array();
            $fdata['status'] = 'success';
            $fdata['message'] = 'Update Successfully';
            $this->session->set_flashdata($fdata);
            $this->index();
        }else{
            $fdata = array();
            $fdata['status'] = 'error';
            $fdata['message'] = 'Can not Update Data';
            $this->session->set_flashdata($fdata);
            $this->index();
        }
    }
    
    public function delete_user($id){
        $id = $id;
        $update = [
           $id => null
        ];
        $db_reference = $this->db_reference();
        $message = $db_reference->update($update)->getKey();
        if($message === 'Users'){
            $fdata = array();
            $fdata['status'] = 'success';
            $fdata['message'] = 'Delete Successfully';
            $this->session->set_flashdata($fdata);
            $this->index();
        }else{
            $fdata = array();
            $fdata['status'] = 'error';
            $fdata['message'] = 'Can not Delete Data';
            $this->session->set_flashdata($fdata);
            $this->index();
        }
    }

}
