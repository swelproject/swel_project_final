<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class payment extends CI_Controller {

    function addCreditPage() {

        if ($this->session->userdata('logged_in')) {
            $id = $this->session->userdata('user_id');
            $this->load->view('view_selectBank');
        } else {
            
        }
    }

    function convertFromCreditToShelinat() {
        if ($this->session->userdata('logged_in')) {
            $id = $this->session->userdata('user_id');

            $this->load->model('user_model');
            $data['res'] = $this->user_model->get_User($id);

            $this->load->view('view_fromcreditToShelin', $data);
        } else {
            
        }
    }

    function okMessage() {
        echo "ok message </br>";
        $config['allow_get_array'] = TRUE;
        // Either of these should work
        $query_string = http_build_query($this->input->get());
        $query_string = $this->input->server('QUERY_STRING');
        $query_string = substr($query_string, 6);
//        echo $query_string;
        $data['res'] = urlencode($query_string);
        $this->load->view('view_payment', $data);
//        $this->load->view('view_payment');
    }

    function cancelMessage() {
        echo "cancel  message ";
    }

}

?>
