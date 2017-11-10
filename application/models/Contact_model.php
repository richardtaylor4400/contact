<?php
class Contact_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_contacts($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('contacts');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('contacts', array('id' => $slug));
        return $query->row_array();
    }
    
    public function get_contact_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('contacts');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('contacts', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_contact($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
 
        $data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
			'mobile' => $this->input->post('mobile'),
            'phone' => $this->input->post('phone'),
        );
        
        if ($id == 0) {
            return $this->db->insert('contacts', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('contacts', $data);
        }
    }
    
    public function delete_contact($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('contacts');
    }
}
