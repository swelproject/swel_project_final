<?php

class c_adv extends CI_Controller {

    function loadAddadv() {
        if ($this->session->userdata('admin_logged_in')) {
            $this->load->view('civou/view_addadv');
        } else {
            $this->load->view('civou/view_login');
        }
    }

    function alladv() {
        if ($this->session->userdata('admin_logged_in')) {
            $this->load->view('civou/view_alladv');
        } else {
            $this->load->view('civou/view_login');
        }
    }

    function delete() {
        if ($this->session->userdata('admin_logged_in')) {
            $this->load->model('sitead');
            if ($this->uri->segment(4) != '') {
                $id = $this->uri->segment(4);
                if ($this->sitead->delete($id, 'adv')) {
//                    $this->load->view('civou/view_alluser');
                    redirect('civou/c_adv/alladv/');
                } else {
                    
                }
            }
        } else {
            $this->load->view('civou/view_login');
        }
    }

    function addadv() {
        $this->load->model('sitead');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name ', 'required|trim|max_length[255]|xss_clean');
        $this->form_validation->set_rules('link', 'Link', 'required|trim|max_length[255]|xss_clean');
        $this->form_validation->set_rules('content', 'Content ', 'required|trim|xss_clean');

        if ($this->form_validation->run() == false) {
            $message = array("mes" => " لا تترك النص فارغ");
            $this->load->view('civou/view_addadv', $message);
        } else {
            $name = $this->input->post('name');
            $link = $this->input->post('link');
            $content = $this->input->post('content');
            //**********8
            $photo = $this->sitead->do_upload();
            //**********8
            $data = array(
                'title' => $name,
                'link' => $link,
                'content' => $content,
                'image' => $photo,
                'statue' => 'on'
            );
            if ($this->sitead->add($data, 'adv')) {
                $message = array("mes" => "تم أضافة الخدمة");
                $this->load->view('civou/view_addadv', $message);
                redirect("civou/c_adv/alladv");
            } else {
                $message = array("mes" => "لقد حدثت مشكله فى الاضافه .");
                $this->load->view('civou/view_addadv', $message);
            }
        }
    }

    function active() {
        if ($this->session->userdata('admin_logged_in')) {
            $this->load->model('sitead');
            if ($this->uri->segment(4) != '' && $this->uri->segment(5) != '') {
                $id = $this->uri->segment(4);
                $active = $this->uri->segment(5);
                if ($active == 'on') {
                    $active = 'off';
                } else {
                    $active = 'on';
                }
                if ($this->sitead->activeStatue($id, $active,'adv')) {
//                    $this->load->view('civou/view_allnews');
                    redirect('civou/c_adv/alladv');
                } else {
                    
                }
            }
        } else {
            $this->load->view('civou/view_login');
        }
    }

}