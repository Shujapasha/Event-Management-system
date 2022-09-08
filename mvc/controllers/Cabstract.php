<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cabstract extends Admin_Controller {
    /*
    | -----------------------------------------------------
    | PRODUCT NAME: 	INILABS SCHOOL MANAGEMENT SYSTEM
    | -----------------------------------------------------
    | AUTHOR:			INILABS TEAM
    | -----------------------------------------------------
    | EMAIL:			info@inilabs.net
    | -----------------------------------------------------
    | COPYRIGHT:		RESERVED BY INILABS IT
    | -----------------------------------------------------
    | WEBSITE:			http://inilabs.net
    | -----------------------------------------------------
    */
    function __construct() {
        parent::__construct();
        $this->load->model("conference_m"); 
        $this->load->model("category_m");
        $this->load->model("cabstract_m");
        $language = $this->session->userdata('lang');
        $this->lang->load('cabstract', $language);
    }

    public function index() {
        $this->data["category"] = pluck($this->category_m->get_category(),
            "obj",
            "categoryID");
        $this->data['cabstracts'] = $this->cabstract_m->get_cabstract();
        $this->data["subview"] = "/cabstract/index";
        $this->load->view('_layout_main', $this->data);
    }

    protected function rules() {
        $rules = array(
            array(
                'field' => 'fullName',
                'label' => 'Name',
                'rules' => 'trim|required|xss_clean|max_length[128]'
            ),
            array(
                'field' => 'emailaddress',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email|xss_clean|max_length[128]'
            ),
            array(
                'field' => 'fullName',
                'label' => 'Name',
                'rules' => 'trim|required|xss_clean|max_length[128]'
            ),
            array(
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'trim|required|xss_clean|max_length[128]'
            ),
            array(
                'field' => 'categoryID',
                'label' => 'Category',
                'rules' => 'trim|required|xss_clean|max_length[128]'
            ),
            array(
                'field' => 'message',
                'label' => 'Abstract',
                'rules' => 'trim|required|xss_clean|max_length[128]'
            ),
            array(
                'field' => 'file',
                'label' => $this->lang->line("user_file"),
                'rules' => 'trim|xss_clean|max_length[200]|callback_unique_document_upload'
            )
        );
        return $rules;
    }

    public function submit(){
        $this->data['conference']   = $this->conference_m->get_single_conference(array('conferenceID' =>2));
        $this->data['categorys']    = $this->category_m->get_category();

        if($_POST) {
            $rules = $this->rules();
             
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == FALSE) {
                
            } else {
                  $file_name = $this->upload_data['file']['file_name'];
                $array = array(
                    "abstract_status"  => 0, 
                    "userID"           => $this->session->userdata('loginuserID'), 
                    "conferenceID"     => $this->data['conference']->conferenceID,  
                    "fullName"         => $this->input->post("fullName"), 
                    "emailaddress"     => $this->input->post("emailaddress"), 
                    "title"            => $this->input->post("title"), 
                    "categoryID"       => $this->input->post("categoryID"), 
                    "message"          => $this->input->post("message"), 
                    "pdf"              => $file_name, 
                );
                $this->cabstract_m->insert_cabstract($array);

               
                //$this->abstrachemail($array,$this->data['conference'],$this->session->userdata('email'));
                $returnArray1 = [ 'return' => true, 'message' => 'Success' ];
                echo json_encode($returnArray1);
            }
        }else{
            $this->data["subview"] = "/cabstract/submit";
        $this->load->view('_layout_frontend', $this->data);
        }

        
    }

    public function active() {
        if(permissionChecker('user_edit')) {
            $id = $this->input->post('id');
            $status = $this->input->post('status');
            if($id != '' && $status != '') {
                if((int)$id) {
                    $user = $this->cabstract_m->get_single_cabstract(array('abstractID' => $id));
                    if(customCompute($user)) {
                        if($status == 'chacked') {
                            $this->cabstract_m->update_cabstract(array('abstract_status' => 1), $id);
                            echo 'Success';
                        } elseif($status == 'unchacked') {
                            $this->cabstract_m->update_cabstract(array('abstract_status' => 0), $id);
                            echo 'Success';
                        } else {
                            echo "Error";
                        }
                    } else {
                        echo 'Error';
                    }
                } else {
                    echo "Error";
                }
            } else {
                echo "Error";
            }
        } else {
            echo "Error";
        }
    }

    public function add() {
        $this->data['headerassets'] = array(
            'css' => array(
                // 'assets/datepicker/datepicker.css',
                // 'assets/editor/jquery-te-1.4.0.css'
            ),
            'js' => array(
                // 'assets/editor/jquery-te-1.4.0.min.js',
                // 'assets/datepicker/datepicker.js'
            )
        );
        if($_POST) {
            $rules = $this->rules();
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == FALSE) {
                $this->data["subview"] = "/cabstract/add";
                $this->load->view('_layout_main', $this->data);
            } else {
                $array = array(
                    "title" => $this->input->post("title"),
                );
                $this->cabstract_m->insert_cabstract($array);
                $this->session->set_flashdata('success', $this->lang->line('menu_success'));
                redirect(base_url("cabstract/index"));
            }
        } else {
            $this->data["subview"] = "/cabstract/add";
            $this->load->view('_layout_main', $this->data);
        }
    }

    public function edit() {
        $this->data['headerassets'] = array(
            'css' => array(
                'assets/datepicker/datepicker.css',
                'assets/editor/jquery-te-1.4.0.css'
            ),
            'js' => array(
                'assets/editor/jquery-te-1.4.0.min.js',
                'assets/datepicker/datepicker.js'
            )
        );
        $id = htmlentities(escapeString($this->uri->segment(3)));
        if((int)$id) {
            $this->data['cabstract'] = $this->cabstract_m->get_single_cabstract(array('abstractID' => $id));
            if($this->data['cabstract']) {
                if($_POST) {
                    $rules = $this->rules();
                    $this->form_validation->set_rules($rules);
                    if ($this->form_validation->run() == FALSE) {
                        $this->data["subview"] = "/cabstract/edit";
                        $this->load->view('_layout_main', $this->data);
                    } else {
                        $array = array(
                            "title" => $this->input->post("title")
                        );

                        $this->cabstract_m->update_cabstract($array, $id);
                        $this->session->set_flashdata('success', $this->lang->line('menu_success'));
                        redirect(base_url("cabstract/index"));
                    }
                } else {
                    $this->data["subview"] = "/cabstract/edit";
                    $this->load->view('_layout_main', $this->data);
                }
            } else {
                $this->data["subview"] = "error";
                $this->load->view('_layout_main', $this->data);
            }
        } else {
            $this->data["subview"] = "error";
            $this->load->view('_layout_main', $this->data);
        }
    }

    public function view() {
        $id = htmlentities(escapeString($this->uri->segment(3)));
        if((int)$id) {
            $this->data['cabstract'] = $this->cabstract_m->get_single_cabstract(array('abstractID' => $id));
            if($this->data['cabstract']) {
                $this->data["subview"] = "/cabstract/view";
                $this->load->view('_layout_main', $this->data);
            } else {
                $this->data["subview"] = "error";
                $this->load->view('_layout_main', $this->data);
            }
        } else {
            $this->data["subview"] = "error";
            $this->load->view('_layout_main', $this->data);
        }
    }

    public function delete() {
        $id = htmlentities(escapeString($this->uri->segment(3)));
        if((int)$id) {
            $this->data['cabstract'] = $this->cabstract_m->get_single_cabstract(array('abstractID' => $id));
            if(count($this->data['cabstract'])) {
                $this->cabstract_m->delete_cabstract($id);
                $this->session->set_flashdata('success', $this->lang->line('menu_success'));
                redirect(base_url("cabstract/index"));
            } else {
                redirect(base_url("cabstract/index"));
            }
        } else {
            redirect(base_url("cabstract/index"));
        }
    }

    public function print_preview() {
        $id = htmlentities(escapeString($this->uri->segment(3)));
        if((int)$id) {
            $this->data['cabstract'] = $this->cabstract_m->get_single_cabstract(array('abstractID' => $id));
            if($this->data['cabstract']) {
                $this->data['panel_title'] = $this->lang->line('panel_title');
                $this->reportPDF($this->data, '/cabstract/print_preview');
            } else {
                $this->data["subview"] = "error";
                $this->load->view('_layout_main', $this->data);
            }
        } else {
            $this->data["subview"] = "error";
            $this->load->view('_layout_main', $this->data);
        }
    }
    public function send_mail() {
        $id = $this->input->post('id');
        if ((int)$id) {
            $this->data['cabstract'] = $this->cabstract_m->get_single_cabstract(array('abstractID' => $id));
            if($this->data['cabstract']) {
                $email = $this->input->post('to');
                $subject = $this->input->post('subject');
                $message = $this->input->post('message');

                $this->reportSendToMail($this->data['cabstract'], '/cabstract/print_preview', $email, $subject, $message);
            } else {
                $this->data["subview"] = "error";
                $this->load->view('_layout_main', $this->data);
            }
        } else {
            $this->data["subview"] = "error";
            $this->load->view('_layout_main', $this->data);
        }

    }

    public function unique_document_upload() {

        $new_file = '';
        if($_FILES["file"]['name'] !="") {
            $file_name = $_FILES["file"]['name'];

            $random = random19();
            $makeRandom = hash('sha512', $random.(strtotime(date('Y-m-d H:i:s'))). config_item("encryption_key"));
            $file_name_rename = $makeRandom;
            $explode = explode('.', $file_name);

            if(customCompute($explode) >= 2) {

                $new_file = $file_name_rename.'.'.end($explode);
                $config['upload_path'] = "./uploads/documents";
                $config['allowed_types'] = "pdf";
                $config['file_name'] = $new_file;
                $config['max_size'] = '5120';
                $config['max_width'] = '10000';
                $config['max_height'] = '10000';
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload("file")) {
                 
                    $this->form_validation->set_message("unique_document_upload", $this->upload->display_errors());
                    return FALSE;
                } else {
                    $this->upload_data['file'] =  $this->upload->data();
             
                    return TRUE;
                }
            } else {
                $this->form_validation->set_message("unique_document_upload", "Invalid file");
                return FALSE;
            }
        } else {
            $this->form_validation->set_message("unique_document_upload", "The file is required.");
            return FALSE;
        }
    }
}
