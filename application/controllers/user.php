<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    function index() {

        $this->profile();
    }

    ///////////////////
    function profile() {
        if ($this->session->userdata('logged_in')) {

            // print_r($this->session->userdata); 
            $id = $this->session->userdata('user_id');
            $this->load->model('site_model');
            if ($this->site_model->select_user($id)) {
                $user_data = $this->site_model->select_user($id);
                $data['username'] = $user_data['username'];
                $data['email'] = $user_data['email'];
                $data['city'] = $user_data['city'];
                $data['country'] = $user_data['country'];
                $data['pic'] = $user_data['pic'];
                $data['user_id'] = $user_data['id'];

                $id = $user_data['id'];
                if ($this->session->userdata('user_id') == $id) {
                    $data['owner'] = 'yes';
                } else {
                    $data['owner'] = 'no';
                }
            }



            $this->load->view('user_profile', $data);
        } else {
            redirect('site/index');
        }
    }

    //////////////////////////////////////// upload profile pic

    function upload_pic() {
        if ($this->session->userdata('logged_in')) {
            $this->load->model('user_model');
            if ($this->input->post('post_upload2')) {
                $id = $this->session->userdata('user_id');
                $upload = $this->user_model->do_upload($id);
                $data['error'] = "svsdf";
                redirect('user/profile', $data);
            }
        } else {
            redirect('site/index');
        }
    }

/////////////////////////////////////////////////////		
    ///////////////////
    function edit_profile() {
        if ($this->session->userdata('logged_in')) {

            // print_r($this->session->userdata); 
            $id = $this->session->userdata('user_id');
            $this->load->model('site_model');
            if ($this->site_model->select_user($id)) {
                $user_data = $this->site_model->select_user($id);
                $data['id'] = $user_data['id'];
                $data['username'] = $user_data['username'];
                $data['email'] = $user_data['email'];
                $data['city'] = $user_data['city'];
                $data['address'] = $user_data['address'];
                $data['phone'] = $user_data['phone'];
                $data['country'] = $user_data['country'];
                $data['zip_code'] = $user_data['zip_code'];
                $data['pic'] = $user_data['pic'];
                $id = $user_data['id'];
            }

            if ($this->session->userdata('user_id') == $id) {
                $data['owner'] = 'yes';
            } else {
                $data['owner'] = 'no';
            }

            $this->load->view('user_edit', $data);
        } else {
            redirect('site/index');
        }
    }

    /////////////////////////////////////////////////////////////
    public function edit_user_validation() {
        if ($this->session->userdata('logged_in')) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|valid_email|max_length[100]|
											 ');
            $this->form_validation->set_rules('country', 'Country', 'required|trim|xss_clean');
            $this->form_validation->set_rules('city', 'city', 'required|max_length[30]|trim|xss_clean');
            $this->form_validation->set_rules('zip_code', 'Zip code', 'required|max_length[30]|trim|xss_clean|numeric');


            $this->form_validation->set_rules('address', 'Address', 'required|max_length[100]|trim|xss_clean');
            $this->form_validation->set_rules('phone', 'Phone', 'required|max_length[20]|trim|xss_clean|numeric');






            $this->form_validation->set_message('valid_email', "البريد الالكتروني الذي تم ادخاله غير صحيح ");




            if ($this->form_validation->run()) {


                // print_r($this->session->userdata); 
                $id = $this->session->userdata('user_id');
                $this->load->model('user_model');
                if ($this->user_model->update_user($id)) {
                    $data['updated'] = 'تم تعديل بياناتك بنجاح';


                    $id = $this->session->userdata('user_id');
                    $this->load->model('site_model');
                    if ($this->site_model->select_user($id)) {
                        $user_data = $this->site_model->select_user($id);
                        $data['id'] = $user_data['id'];
                        $data['username'] = $user_data['username'];
                        $data['email'] = $user_data['email'];
                        $data['city'] = $user_data['city'];
                        $data['address'] = $user_data['address'];
                        $data['phone'] = $user_data['phone'];
                        $data['country'] = $user_data['country'];
                        $data['zip_code'] = $user_data['zip_code'];
                        $data['pic'] = $user_data['pic'];
                    }
                    $this->load->view('user_edit', $data);
                }
            } else {

                $id = $this->session->userdata('user_id');
                $this->load->model('site_model');
                if ($this->site_model->select_user($id)) {
                    $user_data = $this->site_model->select_user($id);
                    $data['id'] = $user_data['id'];
                    $data['username'] = $user_data['username'];
                    $data['email'] = $user_data['email'];
                    $data['city'] = $user_data['city'];
                    $data['address'] = $user_data['address'];
                    $data['phone'] = $user_data['phone'];
                    $data['country'] = $user_data['country'];
                    $data['zip_code'] = $user_data['zip_code'];
                    $data['pic'] = $user_data['pic'];
                }

                $data['not_updated'] = 'عفوا لا يمكن تعديل بيناتك حاليا حاول مره اخري من فضلك';
                $this->load->view('user_edit', $data);
            }
        } else {
            redirect('site/index');
        }
    }

    ///////////////////////////////////////////////////////////////////  message level1
    function user_messages() {
        $this->load->view('user_messages');
    }

    //////////////////////////////////////////////////////////////////////// message level2
    function user_chat() {
        $this->load->view('user_chat');
    }

    ////////////////////////////////////////////////////////////////////////  add topic 
    function validation_add_topic() {
        if ($this->session->userdata('logged_in')) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('topic_name', 'username', 'required|max_length[125]|trim|xss_clean');
			$this->form_validation->set_rules('tags', 'tags', 'required|max_length[200]|trim|xss_clean');
            $this->form_validation->set_rules('topic', 'topic', 'required|trim|xss_clean|');
            $this->form_validation->set_rules('search_category', 'topic', 'required|trim|xss_clean|');
            $this->form_validation->set_rules('sub_category', 'sub_category', 'required|trim|xss_clean|');
            $this->form_validation->set_message('required', "جميع البيانات مطلوبه");
            $this->form_validation->set_message('max_length', "العنوان لا يجب ان يزيد عن 125 حرف");
        
            if ($this->form_validation->run()) {
                $id = $this->session->userdata('user_id');
                $this->load->model('user_model');
                if ($this->user_model->add_topic($id)) {
					
                    $data['topic_added'] = 'تم اضافه الموضوع بنجاح الي المدونه';

                    $this->load->model('site_model');
                    if ($this->site_model->select_user($id)) {
                        $user_data = $this->site_model->select_user($id);
                        $data['username'] = $user_data['username'];
                        $data['email'] = $user_data['email'];
                        $data['city'] = $user_data['city'];
                        $data['country'] = $user_data['country'];
                        $data['pic'] = $user_data['pic'];


                        $id = $user_data['id'];
                        if ($this->session->userdata('user_id') == $id) {
                            $data['owner'] = 'yes';
                        } else {
                            $data['owner'] = 'no';
                        }
                    }


                    $this->load->view('user_profile', $data);
                }
            } else {
                $id = $this->session->userdata('user_id');
                $this->load->model('site_model');
                if ($this->site_model->select_user($id)) {
                    $user_data = $this->site_model->select_user($id);
                    $data['username'] = $user_data['username'];
                    $data['email'] = $user_data['email'];
                    $data['city'] = $user_data['city'];
                    $data['country'] = $user_data['country'];
                    $data['pic'] = $user_data['pic'];


                    $id = $user_data['id'];
                    if ($this->session->userdata('user_id') == $id) {
                        $data['owner'] = 'yes';
                    } else {
                        $data['owner'] = 'no';
                    }
                }



                $this->load->view('user_profile', $data);
            }
        } else {
            redirect('site/index');
        }
    }

    ////////////////////////////////////////////////////// profile visitor
    function visit_profile() {
        if ($this->session->userdata('logged_in')) {
            if ($this->uri->segment(3) != '') {
                $user_id = $this->uri->segment(3);
                $this->load->model('user_model');
                if ($this->user_model->can_visit_user($user_id)) {


                    $this->load->model('site_model');
                    if ($this->site_model->select_user($user_id)) {
                        $user_data = $this->site_model->select_user($user_id);
                        $data['recev_id'] = $user_data['id'];
                        $data['username'] = $user_data['username'];
                        $data['email'] = $user_data['email'];
                        $data['city'] = $user_data['city'];
                        $data['country'] = $user_data['country'];
                        $data['pic'] = $user_data['pic'];
                        $data['user_id'] = $user_data['id'];


                        $id = $user_data['id'];
                        if ($this->session->userdata('user_id') == $id) {
                            $data['owner'] = 'yes';
                        } else {
                            $data['owner'] = 'no';
                        }
                    }



                    $this->load->view('user_profile', $data);
                } else {
                    redirect('site/error');
                }
            } else {
                redirect('site/error');
            }
        } else {
            redirect('site/index');
        }
    }

    ////////////////////////////////////////////////////// recived messages
    function show_messages() {
        if ($this->session->userdata('logged_in')) {
            $user_id = $this->session->userdata('user_id');
            $this->load->model('user_model');
            if ($this->user_model->select_messages_level1($user_id)) {
                $user_messages = $this->user_model->select_messages_level1($user_id);
                if ($user_messages->num_rows() > 0) {
                    $data['user_messages'] = $user_messages->result();
                } else {
                    $data['error'] = "لا يوجد رسائل في صندوقك الرسائل الخاص بك حاليا  ";
                }
                $this->load->view('message_level1', $data);
            } else {
                $data['messages'] = 'لا يمكن استرجاع الرسائل الخاصه بك حاليا من فضلك حاول مره اخره';
                $this->load->view('message_level1', $data);
            }
        } else {
            redirect('site/index');
        }
    }

    ////////////////////////////////////////////////////// level2 messages	
    function messages() {
        if ($this->session->userdata('logged_in')) {
            if ($this->uri->segment(3) != '') {
                $user_id = $this->uri->segment(3);
                $this->load->model('user_model');
                if ($this->user_model->can_visit_user($user_id)) {
                    $data['sender_id'] = $this->session->userdata('user_id');
                    $data['receiv_id'] = $this->uri->segment(3);
                    $this->load->view('message_level2', $data);
                } else {
                    redirect('site/error');
                }
            } else {
                redirect('site/error');
            }
        } else {
            redirect('site/index');
        }
    }

    /////////////////////////////////////////////////////// add chat_messages
    function ajax_add_chat() {
        if ($this->session->userdata('logged_in')) {
            $sender_id = $this->session->userdata('user_id');
            $receiver_id = $this->input->post('receiv_id');
            $chat_message_content = $this->input->post("chat_message_content", true);

            $this->load->model('user_model');
            if ($this->user_model->add_chat_message($sender_id, $receiver_id, $chat_message_content)) {
                $result = "saved";
                return $result;
            } else {
                //no chat return
            }
        } else {

            redirect('site/index');
        }
    }

    ///////////////////////////////////////////////////////// get messages by ajax
//////////////////////////////////////////////////////// get messages by ajax

    function ajax_get_chat_messages() {
        $sender_id = $this->session->userdata('user_id');
        $receiv_id = $this->input->post('receiv_id');
        echo $this->_get_chat_messages($sender_id, $receiv_id);
    }

    function _get_chat_messages($sender_id, $receiv_id) {

        $this->load->model('user_model');
        $chat_messages = $this->user_model->get_chat_messages($sender_id, $receiv_id);



        if ($chat_messages->num_rows() > 0) {
//we have some messages

            $chat_message_html = '<ul>';
            foreach ($chat_messages->result() as $chat_message) {
//$li_class=($this->session->userdata('agent_id') == $chat_message->agent_id)? 'class="by_current_user "' : '';
                if ($this->session->userdata('user_id') == $chat_message->sender_id) {
                    $chat_message_html.='


<div class="blog-one left" >

<a href="' . base_url() . 'user/visit_profile/' . $chat_message->id . '">

<img id="mail_icon" src="' . base_url() . 'images/profile/thumb_profile/' . $chat_message->sender_photo . '" width="50" height="45" /> </a>

<p id="sender" style="padding:0 5px 0 5px;color:#3C6">

<a style="color:#fff" id="user" href="' . base_url() . 'user/visit_profile/' . $chat_message->id . '">' . $chat_message->sender_name . '</a></p>

<div id="clear"></div>

<p id="sender" style="margin:-30px 60px 0 0;width:600px;color:#eeeeee">

' . $chat_message->message . '
</p>

</div><!--/blog-one-->

';
                } else {

                    $chat_message_html.='


<div class="blog-one left" >

<a href="' . base_url() . 'user/visit_profile/' . $chat_message->id . '">

<img id="mail_icon" src="' . base_url() . 'images/profile/thumb_profile/' . $chat_message->recevier_photo . '" width="50" height="45" /> </a>

<p id="sender" style="padding:0 5px 0 5px;color:#3C6">

<a style="color:#fff" id="user" href="' . base_url() . 'user/visit_profile/' . $chat_message->id . '">' . $chat_message->recevier_name . '</a></p>

<div id="clear"></div>

<p id="sender" style="margin:-30px 60px 0 0;width:600px;color:#eeeeee">

' . $chat_message->message . '
</p>

</div><!--/blog-one-->

';
                }
            }


            $chat_message_html.='</ul>';


            $result = array('status' => 'ok', 'content' => $chat_message_html);
            return json_encode($result);
            exit();
        } else {
//no chat return
            $result = array('status' => 'no', 'content' => 'No posts have been published');
            return json_encode($result);
            exit();
        }
    }

///////////////////////////////////////////
    ///////////////////////////////////////////////////////  user_tree
    function user_tree() {
        if ($this->session->userdata('logged_in')) {
            if ($this->uri->segment(3) != '') {
                $user_id = $this->uri->segment(3);
                $this->load->model('user_model');
                if ($this->user_model->can_visit_user($user_id)) {


                    $this->load->model('site_model');
                    if ($this->site_model->select_user($user_id)) {
                        $user_data = $this->site_model->select_user($user_id);
                        $data['recev_id'] = $user_data['id'];
                        $data['username'] = $user_data['username'];
                        $data['email'] = $user_data['email'];
                        $data['city'] = $user_data['city'];
                        $data['country'] = $user_data['country'];
                        $data['pic'] = $user_data['pic'];
                        $data['user_id'] = $user_data['id'];


                        $id = $user_data['id'];
                        if ($this->session->userdata('user_id') == $id) {
                            $data['owner'] = 'yes';
                        } else {
                            $data['owner'] = 'no';
                        }
                    }



                    $this->load->view('user_tree', $data);
                } else {
                    redirect('site/error');
                }
            } else {
                redirect('site/error');
            }
        } else {
            redirect('site/index');
        }
    }

}

?>