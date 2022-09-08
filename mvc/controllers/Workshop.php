<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workshop extends Admin_Controller {
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
        $this->load->model("workshop_m");
        $this->load->model("category_m");
        $this->load->model("workshoptype_m");
        $language = $this->session->userdata('lang');
        $this->lang->load('workshop', $language);
    }

    public function index() {
        $this->data['workshops'] = $this->workshop_m->get_workshop();
        $this->data["subview"] = "/workshop/index";
        $this->load->view('_layout_main', $this->data);
    }
    public function register() {

        $this->data['headerassets'] = array(
            'css' => array(
                 'assets/datepicker/datepicker.css',
                // 'assets/editor/jquery-te-1.4.0.css'
            ),
            'js' => array(
                // 'assets/editor/jquery-te-1.4.0.min.js',
                 'assets/datepicker/datepicker.js'
            )
        );

        //$this->data['conference']   = $this->conference_m->get_single_conference(array('conferenceID' =>2));
        $this->data['categorys']    = $this->category_m->get_category();

        $this->data['workshoptype']     = $this->workshoptype_m->get_workshoptype();
        $returnArray = ' ';
        if($_POST) {
                // var_dump($_POST); exit();
                $array = array(
                    "registrations_status"  => 0, 
                    "userID"                => $this->session->userdata('loginuserID'), 
                    "workshoptypeID"             => $this->input->post("workshoptypeID"), 
                    "amount_type"           => $this->input->post("amount_type"), 
                    "amount"                => $this->input->post("amount"), 
                    "abstract_title"        => $this->input->post("abstract_title"), 
                    "title_name"            => $this->input->post("title_name"), 
                    "first_name"            => $this->input->post("first_name"), 
                    "last_name"             => $this->input->post("last_name"), 
                    "email_address"         => $this->input->post("email_address"), 
                    "phone_number"          => $this->input->post("phone_number"), 
                    "nationality"           => $this->input->post("nationality"), 
                    "categoryID"            => $this->input->post("categoryID"), 
                    "organization"          => $this->input->post("organization"), 
                    "mailing_address"       => $this->input->post("mailing_address"), 
                    "message"               => $this->input->post("message"),   
                    "created"               => date('Y-m-d H:i:s'),
                );
                $this->workshop_m->insert_workshop($array);
                $lastId = $this->db->insert_id();
                // $this->conferencecreatemail($array,$this->data['conference'],$this->session->userdata('email'));
                $returnArray = [ 'return' => true, 'message' => 'Success', 'paymentid' => $lastId, ];
                echo json_encode($returnArray);
                // $this->session->set_flashdata('success', $this->lang->line('menu_success'));
                // redirect(base_url("conference/payment/$lastId"));
            
        } else {
            $this->data["subview"] = "/workshop/register";
        $this->load->view('_layout_frontend', $this->data);
        }
    }
    public function payment() {
        $id = htmlentities(escapeString($this->uri->segment(3)));
         $this->data['workshops'] = $this->workshop_m->get_single_workshop(array('workshopID ' => $id));
        if($_POST) {
                 
                $this->unique_document_upload();
                $file_name = $this->upload_data['file']['file_name'];
                $array =   array('receipt' => $file_name ); 
                
                $tt =    $this->workshop_m->update_workshop($array, $id);
                
                $returnArray = [ 'return' => true, 'message' => 'Success' ];
                echo json_encode($returnArray);
                // $this->session->set_flashdata('success', $this->lang->line('menu_success'));
                // redirect(base_url("dashboard/user"));
            
        }
        else{
        $this->data["subview"] = "/workshop/payment";
        $this->load->view('_layout_frontend', $this->data); 
        }
        
    }
    protected function rules() {
        $rules = array(
            array(
                'field' => 'title',
                'label' => $this->lang->line("workshop_title"),
                'rules' => 'trim|required|xss_clean|max_length[128]'
            )
        );
        return $rules;
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
                $this->data["subview"] = "/workshop/add";
                $this->load->view('_layout_main', $this->data);
            } else {
                $array = array(
                    "title" => $this->input->post("title"),
                );
                $this->workshop_m->insert_workshop($array);
                $this->session->set_flashdata('success', $this->lang->line('menu_success'));
                redirect(base_url("workshop/index"));
            }
        } else {
            $this->data["subview"] = "/workshop/add";
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
            $this->data['workshop'] = $this->workshop_m->get_single_workshop(array('workshopID' => $id));
            if($this->data['workshop']) {
                if($_POST) {
                    $rules = $this->rules();
                    $this->form_validation->set_rules($rules);
                    if ($this->form_validation->run() == FALSE) {
                        $this->data["subview"] = "/workshop/edit";
                        $this->load->view('_layout_main', $this->data);
                    } else {
                        $array = array(
                            "title" => $this->input->post("title")
                        );

                        $this->workshop_m->update_workshop($array, $id);
                        $this->session->set_flashdata('success', $this->lang->line('menu_success'));
                        redirect(base_url("workshop/index"));
                    }
                } else {
                    $this->data["subview"] = "/workshop/edit";
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
            $this->data['workshop'] = $this->workshop_m->get_single_workshop(array('workshopID' => $id));
            if($this->data['workshop']) {
                $this->data["subview"] = "/workshop/view";
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
            $this->data['workshop'] = $this->workshop_m->get_single_workshop(array('workshopID' => $id));
            if(count($this->data['workshop'])) {
                $this->workshop_m->delete_workshop($id);
                $this->session->set_flashdata('success', $this->lang->line('menu_success'));
                redirect(base_url("workshop/index"));
            } else {
                redirect(base_url("workshop/index"));
            }
        } else {
            redirect(base_url("workshop/index"));
        }
    }

    public function print_preview() {
        $id = htmlentities(escapeString($this->uri->segment(3)));
        if((int)$id) {
            $this->data['workshop'] = $this->workshop_m->get_single_workshop(array('workshopID' => $id));
            if($this->data['workshop']) {
                $this->data['panel_title'] = $this->lang->line('panel_title');
                $this->reportPDF($this->data, '/workshop/print_preview');
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
            $this->data['workshop'] = $this->workshop_m->get_single_workshop(array('workshopID' => $id));
            if($this->data['workshop']) {
                $email = $this->input->post('to');
                $subject = $this->input->post('subject');
                $message = $this->input->post('message');

                $this->reportSendToMail($this->data['workshop'], '/workshop/print_preview', $email, $subject, $message);
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
                $config['allowed_types'] = "gif|jpg|png|jpeg|pdf|doc|xml|docx|GIF|JPG|PNG|JPEG|PDF|DOC|XML|DOCX|xls|xlsx|txt|ppt|csv";
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
