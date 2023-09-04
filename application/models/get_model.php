<?php
defined('BASEPATH') or exit('No direct script access allowed');

class get_model extends CI_Model
{
    
    function get_Data()
    {
        $this->db->trans_start();
        $this->db->select("*");
        $this->db->from('research');
        $resultArray = $this->db->get()->result_array();
        $this->db->trans_complete();
        return $resultArray;
    }


    function get_Contact_Data()
    {
        $this->db->trans_start();       
        $this->db->select("*");
        $this->db->from('contact');
        $resultArray = $this->db->get()->result_array();
        $this->db->trans_complete();
        return $resultArray;
    }

    function get_Nursery_Data()
    {
        $this->db->trans_start();       
        $this->db->select("*");
        $this->db->from('nurserybooking');
        $resultArray = $this->db->get()->result_array();
        $this->db->trans_complete();
        return $resultArray;
    }

    function get_Data2()
    {
        $this->db->trans_start();
        $this->db->select("*");
        $this->db->from('training');
        $resultArray = $this->db->get()->result_array();
        $this->db->trans_complete();
        return $resultArray;
    }

    function get_Research()
    {
       
        $this->db->trans_start();
        $this->db->select("*");
        $this->db->from('research');
        $this->db->where('Id',$_POST['T']);
        $resultArray = $this->db->get()->result_array();
        $this->db->trans_complete();
         return $resultArray;
    }
    function get_Training()
    {
       
        $this->db->trans_start();
        $this->db->select("*");
        $this->db->from('training');
        $this->db->where('ID',$_POST['R']);
        $resultArray = $this->db->get()->result_array();
        $this->db->trans_complete();
         return $resultArray;
    }
   


}