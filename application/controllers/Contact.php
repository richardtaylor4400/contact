<?php
class Contact extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('contact_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['contact'] = $this->contact_model->get_contacts();
        $data['title'] = 'List Of Contacts';
 
        $this->load->view('templates/header', $data);
        $this->load->view('contact/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($slug = NULL)
    {
        $data['contact_item'] = $this->contact_model->get_contacts($slug);
        
        if (empty($data['contact_item']))
        {
            show_404();
        }
 
        $data['title'] = $data['contact_item']['firstname'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('contact/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a contact';
 
        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile Number', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('contact/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->contact_model->set_contact();
            $this->load->view('templates/header', $data);
            $this->load->view('contact/success');
            $this->load->view('templates/footer');
        }
    }
    
    public function edit()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Edit a contact';        
        $data['contact_item'] = $this->contact_model->get_contact_id($id);
        
        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile Number', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('contact/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->contact_model->set_contact($id);
            $this->load->view('contact/success');
            redirect( base_url() . 'index.php/contact');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $news_item = $this->contact_model->get_contact_id($id);
        
        $this->contact_model->delete_contact($id);        
        redirect( base_url() . 'index.php/contact');        
    }
}
