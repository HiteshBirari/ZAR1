<?php
defined('BASEPATH') or exit('No direct script access allowed');

class upload_model extends CI_Model
{
    function upload_Data()
    {
        /* Location */
        $appendFilePathStringPath = "";

        $location = 'upload/';

        // Count total files
        $countfiles = count($_FILES['file']['name']);

        //$filename_arr = array();

        //$finalloc = "";
        for ($i = 0; $i < $countfiles; $i++) {
            $location = 'upload/';

            $temporyFile = explode(".", $_FILES["file"]["name"][$i]);
            $newsFileOrPdf = substr(md5(time()), 0, 10) . $i . '.' . end($temporyFile);
            $appendFilePathStringPath = $location . $newsFileOrPdf;
            if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $location . $newsFileOrPdf)) {
                // $finalloc = $finalloc . $appendFilePathStringPath . "|";

            }
        }
        //$finalloc = substr($finalloc, 0, -1);
        echo json_encode($$appendFilePathStringPath);
        echo ($appendFilePathStringPath);
        $insertData = array(
            'Title' => $_POST['title'],
            'Name_Of_Scheme' => $_POST['name_of_scheme'],
            'Year_Of_Inception' => $_POST['year_of_inception'],
            'Mandates' => $_POST['mandates'],
            'Image' => $appendFilePathStringPath,
            'Name_Of_Officer' => $_POST['name_of_officer'],
            'Post_Of_Officer' => $_POST['post_of_officer'],
            'Mobile' => $_POST['mobile'],
            'Email' => $_POST['email'],
            'Supporting_Staff' => $_POST['supporting_staff'],
            'Ongoing_Experiments' => $_POST['ongoing_experiments'],
            'Recommendation' => $_POST['recommendation'],

        );
        $this->db->insert('research', $insertData);
        $this->db->trans_complete();
        return true;

    }
    function upload_Data2()
    {
        /* Location */
        $appendFilePathStringPath = "";

        $location = 'upload2/';

        // Count total files
        $countfiles = count($_FILES['file']['name']);

        //$filename_arr = array();

        //$finalloc = "";
        for ($i = 0; $i < $countfiles; $i++) {
            $location = 'upload2/';

            $temporyFile = explode(".", $_FILES["file"]["name"][$i]);
            $newsFileOrPdf = substr(md5(time()), 0, 10) . $i . '.' . end($temporyFile);
            $appendFilePathStringPath = $location . $newsFileOrPdf;
            if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $location . $newsFileOrPdf)) {
                // $finalloc = $finalloc . $appendFilePathStringPath . "|";

            }
        }
        //$finalloc = substr($finalloc, 0, -1);
        echo json_encode($$appendFilePathStringPath);
        echo ($appendFilePathStringPath);
        $insertData = array(
            'TITLE' => $_POST['title1'],
            'NAME_OF_SCHEME' => $_POST['name_of_scheme1'],
            'YEAR_OF_INCEPTION' => $_POST['year_of_inception1'],
            'MANDATES' => $_POST['mandates1'],
            'IMAGE' => $appendFilePathStringPath,
            'NAME_OF_OFFICER' => $_POST['name_of_officer1'],
            'POST_OF_OFFICER' => $_POST['post_of_officer1'],
            'MOBILE' => $_POST['mobile1'],
            'EMAIL' => $_POST['email1'],
            'SUPPORTING_STAFF' => $_POST['supporting_staff1'],
            'STUDENTS_TRAINED' => $_POST['students_trained'],
            'INTAKE_CAPACITY' => $_POST['intake_capacity'],
            'SYLLABUS' => $_POST['syllabus_details'],
            'PUBLICATION' => $_POST['publication'],

        );
        $this->db->insert('training', $insertData);
        $this->db->trans_complete();
        return true;

    }
    function get_Data()
    {
        $this->db->trans_start();
        $this->db->select("*");
        $this->db->from('research');
        $resultArray = $this->db->get()->result_array();
        $this->db->trans_complete();
        return $resultArray;
    }
    //getBannerImages
    function get_Research()
    {

        $this->db->trans_start();
        $this->db->select("*");
        $this->db->from('research');
        $this->db->where('Title', $_POST['T']);
        $resultArray = $this->db->get()->result_array();
        $this->db->trans_complete();
        return $resultArray;
    }

    //deleteData
    function delete_data($id)
    {
        $this->db->where("Id", $id);
        $this->db->delete("research");

    }

    function delete_data2($id2)
    {
        $this->db->where("ID", $id2);
        $this->db->delete("training");

    }

    function upload_Contact()
    {
        $insertData = array(
            'Name' => $_POST['cname'],
            'Mobile' => $_POST['cphone'],
            'Email' => $_POST['cemail'],
            'Message' => $_POST['cmessage'],
            
        );
        $this->db->insert('contact', $insertData);
        $this->db->trans_complete();
        return true;

    }


    function upload_Nursery()
    {
        $insertData = array(
            'Name' => $_POST['nname'],
            'Mobile' => $_POST['nmobile'],
            'Address' => $_POST['naddress'],
            'Category' => $_POST['ncategory'],
            'Quantity' => $_POST['nquantity'],
            
        );
        $this->db->insert('nurserybooking', $insertData);
        $this->db->trans_complete();
        return true;

    }

     //updateData
    function update_research1()
    {
        $appendFilePathStringPath = "";
        $location = 'upload/';
        $countfiles = count($_FILES['file']['name']);
        for ($i = 0; $i < $countfiles; $i++) {
            $location = 'upload/';
            $temporyFile = explode(".", $_FILES["file"]["name"][$i]);
            $newsFileOrPdf = substr(md5(time()), 0, 10) . $i . '.' . end($temporyFile);
            $appendFilePathStringPath = $location . $newsFileOrPdf;
            move_uploaded_file($_FILES['file']['tmp_name'][$i], $location . $newsFileOrPdf);
        }
        echo json_encode($appendFilePathStringPath);
        $updatedatarray = array(
            'Title' => $_POST['Title'],
            'Name_Of_Scheme' => $_POST['Name_Of_Scheme'],
            'Year_Of_Inception' => $_POST['Year_Of_Inception'],
            'Mandates' => $_POST['Mandates'],
            'Image' => $appendFilePathStringPath,
            'Name_Of_Officer' => $_POST['Name_Of_Officer'],
            'Post_Of_Officer' => $_POST['Post_Of_Officer'],
            'Mobile' => $_POST['Mobile'],
            'Email' => $_POST['Email'],
            'Supporting_Staff' => $_POST['Supporting_Staff'],
            'Ongoing_Experiments' => $_POST['Ongoing_Experiments'],
            'Recommendation' => $_POST['Recommendation'],
        );
        $getUserId = $_POST['Id'];
        $this->db->where('Id', $getUserId);
        $this->db->update('research', $updatedatarray);
        $this->db->trans_complete();
        return true;
    }

    //updateData2
    function update_research2()
    {
        $updatedatarray = array(
            'Title' => $_POST['Title'],
            'Name_Of_Scheme' => $_POST['Name_Of_Scheme'],
            'Year_Of_Inception' => $_POST['Year_Of_Inception'],
            'Mandates' => $_POST['Mandates'],
            'Name_Of_Officer' => $_POST['Name_Of_Officer'],
            'Post_Of_Officer' => $_POST['Post_Of_Officer'],
            'Mobile' => $_POST['Mobile'],
            'Email' => $_POST['Email'],
            'Supporting_Staff' => $_POST['Supporting_Staff'],
            'Ongoing_Experiments' => $_POST['Ongoing_Experiments'],
            'Recommendation' => $_POST['Recommendation'],
        );
        $getUserId = $_POST['Id'];
        $this->db->where('Id', $getUserId);
        $this->db->update('research', $updatedatarray);
        $this->db->trans_complete();
        return true;
    }



    //updateData
    function update_training1()
    {
        $appendFilePathStringPath = "";
        $location = 'upload2/';
        $countfiles = count($_FILES['file']['name']);
        for ($i = 0; $i < $countfiles; $i++) {
            $location = 'upload2/';
            $temporyFile = explode(".", $_FILES["file"]["name"][$i]);
            $newsFileOrPdf = substr(md5(time()), 0, 10) . $i . '.' . end($temporyFile);
            $appendFilePathStringPath = $location . $newsFileOrPdf;
            move_uploaded_file($_FILES['file']['tmp_name'][$i], $location . $newsFileOrPdf);
        }
        echo json_encode($appendFilePathStringPath);
        $updatedatarray = array(
            'TITLE' => $_POST['TITLE'],
            'NAME_OF_SCHEME' => $_POST['NAME_OF_SCHEME'],
            'YEAR_OF_INCEPTION' => $_POST['YEAR_OF_INCEPTION'],
            'MANDATES' => $_POST['MANDATES'],
            'IMAGE' => $appendFilePathStringPath,
            'NAME_OF_OFFICER' => $_POST['NAME_OF_OFFICER'],
            'POST_OF_OFFICER' => $_POST['POST_OF_OFFICER'],
            'MOBILE' => $_POST['MOBILE'],
            'EMAIL' => $_POST['EMAIL'],
            'SUPPORTING_STAFF' => $_POST['SUPPORTING_STAFF'],
            'STUDENTS_TRAINED' => $_POST['STUDENTS_TRAINED'],
            'INTAKE_CAPACITY' => $_POST['INTAKE_CAPACITY'],
            'SYLLABUS' => $_POST['SYLLABUS'],
            'PUBLICATION' => $_POST['PUBLICATION'],
        );
        $getUserId = $_POST['ID'];
        $this->db->where('ID', $getUserId);
        $this->db->update('training', $updatedatarray);
        $this->db->trans_complete();
        return true;
    }

    //updateData2
    function update_training2()
    {
        $updatedatarray = array(
            'TITLE' => $_POST['TITLE'],
            'NAME_OF_SCHEME' => $_POST['NAME_OF_SCHEME'],
            'YEAR_OF_INCEPTION' => $_POST['YEAR_OF_INCEPTION'],
            'MANDATES' => $_POST['MANDATES'],
            'NAME_OF_OFFICER' => $_POST['NAME_OF_OFFICER'],
            'POST_OF_OFFICER' => $_POST['POST_OF_OFFICER'],
            'MOBILE' => $_POST['MOBILE'],
            'EMAIL' => $_POST['EMAIL'],
            'SUPPORTING_STAFF' => $_POST['SUPPORTING_STAFF'],
            'STUDENTS_TRAINED' => $_POST['STUDENTS_TRAINED'],
            'INTAKE_CAPACITY' => $_POST['INTAKE_CAPACITY'],
            'SYLLABUS' => $_POST['SYLLABUS'],
            'PUBLICATION' => $_POST['PUBLICATION'],
        );
        $getUserId = $_POST['ID'];
        $this->db->where('ID', $getUserId);
        $this->db->update('training', $updatedatarray);
        $this->db->trans_complete();
        return true;
    }


    function admin_login()
    {
       $email=$_POST['lemail'];
       $pass=$_POST['lpass'];
       $email1="patilr2502@gmail.com";
       $pass1="1234";
        print_r($email);
        print_r($pass);
       if($email==$email1)
       {    
            if($pass==$pass1)
            {
                return "Valid";
            }
            else
            {
                return "Invalid";
            }

       }
       else
       {
        return "Invalid";
       }

        
    }

}