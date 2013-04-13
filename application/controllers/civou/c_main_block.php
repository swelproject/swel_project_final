<?php

class c_main_block extends CI_Controller {

    function loadAddblock() {
        if ($this->session->userdata('admin_logged_in')) {
            $this->load->view('civou/view_addmainblock');
        } else {
            $this->load->view('civou/view_login');
        }
    }

    function allblock() {
        if ($this->session->userdata('admin_logged_in')) {
            $this->load->view('civou/view_allmainblock');
        } else {
            $this->load->view('civou/view_login');
        }
    }

    function delete() {
        if ($this->session->userdata('admin_logged_in')) {
            $this->load->model('sitead');
            if ($this->uri->segment(4) != '') {
                $id = $this->uri->segment(4);
                if ($this->sitead->delete($id, 'main_blocks')) {
//                    $this->load->view('civou/view_alluser');
                    redirect('civou/c_main_block/allblock/');
                } else {
                    
                }
            }
        } else {
            $this->load->view('civou/view_login');
        }
    }

    function loadaddbanerblock() {
        if ($this->session->userdata('admin_logged_in')) {
            $this->load->view('civou/view_addbanerblock');
        } else {
            $this->load->view('civou/view_login');
        }
    }

    function loadaddbanertxtblock() {
        if ($this->session->userdata('admin_logged_in')) {
            $this->load->view('civou/view_addbanertxtblock');
        } else {
            $this->load->view('civou/view_login');
        }
    }

    function loadstatisticsblock() {
        if ($this->session->userdata('admin_logged_in')) {
            $this->load->view('civou/view_statistic');
        } else {
            $this->load->view('civou/view_login');
        }
    }

    function loadaddtxtblock() {
        if ($this->session->userdata('admin_logged_in')) {
            $this->load->view('civou/view_addtxtblock');
        } else {
            $this->load->view('civou/view_login');
        }
    }

    function addbanertxtblock() {
        $this->load->model('sitead');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name ', 'required|trim|max_length[255]|xss_clean');
        $this->form_validation->set_rules('link', 'Link ', 'required|trim|max_length[255]|xss_clean');
        $this->form_validation->set_rules('content', 'Content ', 'required|trim|xss_clean');
        $this->form_validation->set_rules('order', 'Order ', 'required|trim|xss_clean');

        if ($this->form_validation->run() == false) {
            $message = array("mes" => " لا تترك النص فارغ");
            $this->load->view('civou/view_addbanerblock', $message);
        } else {
            $name = $this->input->post('name');
            $link = $this->input->post('link');
            $order = $this->input->post('order');

            //**********8
            $photo = $this->sitead->do_upload();
            //**********8

            $content = '
                <div id="serv_block_text" style="height: 150px; " >
                    <h3 style="margin-top:-10px;">' . $name . '</h3>
                    <div id="most">
                        <img src="<?php echo base_url(); ?>imagesService/thumb/' . $photo . '" height="50" width="60">
                        <h6 id="h6"><a href="' . $link . '">' . $link . '</a></h6>
                        <p id="p">' . $this->input->post('content') . '</p>
                    </div>
                </div>';
            $data = array(
                'name' => $name,
                'content' => $content,
                'order' => $order
            );
            if ($this->sitead->add($data, 'main_blocks')) {
                $message = array("mes" => "تم أضافة الخدمة");
//                $this->load->view('civou/view_addadv', $message);
                redirect("civou/c_main_block/allblock");
            } else {
                $message = array("mes" => "لقد حدثت مشكله فى الاضافه .");
                $this->load->view('civou/view_addbanerblock', $message);
            }
        }
    }

    function addbanerblock() {
        $this->load->model('sitead');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name ', 'required|trim|max_length[255]|xss_clean');
        $this->form_validation->set_rules('link', 'Link ', 'required|trim|max_length[255]|xss_clean');
        $this->form_validation->set_rules('order', 'Order ', 'required|trim|xss_clean');

        if ($this->form_validation->run() == false) {
            $message = array("mes" => " لا تترك النص فارغ");
            $this->load->view('civou/view_addbanerblock', $message);
        } else {
            $name = $this->input->post('name');
            $link = $this->input->post('link');
            $order = $this->input->post('order');


            //**********8
            $photo = $this->sitead->do_upload();
            //**********8

            $content = '
                <div id="serv_block_text" style="height: 150px; " >
                    <h3 style="margin-top:-10px;">' . $name . '</h3>
                    <div id="most">
                        <a href="' . $link . '"><img src="<?php echo base_url(); ?>imagesService/thumb/' . $photo . '"  width="250" height="100"/></a>
                    </div>
                </div>';
            $data = array(
                'name' => $name,
                'content' => $content,
                'order' => $order
            );
            if ($this->sitead->add($data, 'main_blocks')) {
                $message = array("mes" => "تم أضافة الخدمة");
//                $this->load->view('civou/view_addadv', $message);
                redirect("civou/c_main_block/allblock");
            } else {
                $message = array("mes" => "لقد حدثت مشكله فى الاضافه .");
                $this->load->view('civou/view_addbanerblock', $message);
            }
        }
    }

    function addtxtblock() {
        $this->load->model('sitead');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name ', 'required|trim|max_length[255]|xss_clean');
        $this->form_validation->set_rules('link', 'Link', 'required|trim|max_length[255]|xss_clean');
        $this->form_validation->set_rules('order', 'Order', 'required|trim|max_length[255]|xss_clean');
        $this->form_validation->set_rules('content', 'Content ', 'required|trim|xss_clean');

        if ($this->form_validation->run() == false) {
            $message = array("mes" => " لا تترك النص فارغ");
            $this->load->view('civou/view_addmainblock', $message);
        } else {
            $name = $this->input->post('name');
//            $link = $this->input->post('link');
            $order = $this->input->post('order');
//            $content = $this->input->post('content');
            //<a href="' . $this->input->post('link') . '">' 
            $content = '
                <div id="serv_block_text" >
                    <h3 style="margin-top:-10px;">' . $name . '</h3>
                    <div style="background-color:#5e8d03">
                        <p style="margin-top:10px; padding: 15px; color: #ffffff;">' . $this->input->post('content') . '</p>
                    </div>
                </div>';
            $data = array(
                'name' => $name,
                'content' => $content,
                'order' => $order
            );
            //**********8
            if ($this->sitead->add($data, 'main_blocks')) {
                $message = array("mes" => "تم أضافة الخدمة");
//                $this->load->view('civou/view_allblock', $message);
                redirect("civou/c_main_block/allblock"); //c_main_block/allblock
            } else {
                $message = array("mes" => "لقد حدثت مشكله فى الاضافه .");
                $this->load->view('civou/view_addmainblock', $message);
            }
        }
    }

    function edite() {
        $this->load->model('sitead');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('order', 'Order ', 'required|trim|max_length[255]|xss_clean');

        if ($this->form_validation->run() == false) {
            $message = array("mes" => " لا تترك النص فارغ");
            $this->load->view('civou/view_addmainblock', $message);
        } else {
            $order = $this->input->post('order');
            $id = $_POST['id'];
            $data = array(
                'order' => $order
            );
            if ($this->sitead->update($data, 'main_blocks', $id)) {
                redirect('civou/c_main_block/allblock');
            }
        }
    }

}