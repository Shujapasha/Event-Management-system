<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Conference extends Admin_Controller {
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
        $this->load->model("regtype_m");
        $this->load->model("category_m");
        $this->load->model("registrations_m");
        $language = $this->session->userdata('lang');
        $this->lang->load('conference', $language);
    }

    public function index() {

        $this->data["regtype"] = pluck($this->regtype_m->get_regtype(),
            "obj",
            "regtypeID");
        $this->data["category"] = pluck($this->category_m->get_category(),
            "obj",
            "categoryID");
         
        $this->data['conferences'] = $this->conference_m->get_conference();
        $this->data["subview"] = "/conference/index";
        $this->load->view('_layout_main', $this->data);
    }

    protected function rules() {
        $rules = array(
            array(
                'field' => 'conference',
                'label' => $this->lang->line("conference_title"),
                'rules' => 'trim|required|xss_clean|max_length[128]'
            ),
            array(
                'field' => 'conference_status',
                'label' => 'Status',
                'rules' => 'trim|required|xss_clean|max_length[128]'
            ),
            array(
                'field' => 'conference_date',
                'label' => 'Date',
                'rules' => 'trim|required|xss_clean|max_length[128]'
            )
        );
        return $rules;
    }

    protected function register_rules() {
        $rules = array(
            array(
                'field' => 'regtypeID',
                'label' => 'Registeration Type',
                'rules' => 'trim|required|xss_clean|max_length[128]'
            ),
            array(
                'field' => 'title_name',
                'label' => 'Title',
                'rules' => 'trim|required|xss_clean|max_length[128]'
            ),
            array(
                'field' => 'first_name',
                'label' => 'First Name',
                'rules' => 'trim|required|xss_clean|max_length[128]'
            ),
            array(
                'field' => 'last_name',
                'label' => 'Last Name',
                'rules' => 'trim|required|xss_clean|max_length[128]'
            ),
            array(
                'field' => 'email_address',
                'label' => 'Email',
                'rules' => 'trim|required|xss_clean|max_length[128]'
            ),
            array(
                'field' => 'phone_number',
                'label' => 'Phone',
                'rules' => 'trim|required|xss_clean|max_length[128]'
            ),
            array(
                'field' => 'nationality',
                'label' => 'Nationality',
                'rules' => 'trim|required|xss_clean|max_length[128]'
            ),
            array(
                'field' => 'categoryID',
                'label' => 'Category',
                'rules' => 'trim|required|xss_clean|max_length[128]'
            ),
            array(
                'field' => 'organization',
                'label' => 'Organization',
                'rules' => 'trim|required|xss_clean|max_length[128]'
            ) 
        );
        return $rules;
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

        $this->data['conference']   = $this->conference_m->get_single_conference(array('conferenceID' =>2));
        $this->data['categorys']    = $this->category_m->get_category();

        $this->data['regtypes']     = $this->regtype_m->get_regtype();
        if($_POST) {
            $rules = $this->register_rules();
             
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == FALSE) {
                $this->data["subview"] = "/conference/register";
                $this->load->view('_layout_main', $this->data);
            } else {
                $array = array(
                    "registrations_status"  => 0, 
                    "userID"                => $this->session->userdata('loginuserID'), 
                    "conferenceID"          => $this->data['conference']->conferenceID, 
                    "regtypeID"             => $this->input->post("regtypeID"), 
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
                $this->registrations_m->insert_registrations($array);
                $this->conferencecreatemail($array,$this->data['conference'],$this->session->userdata('email'));
                $this->session->set_flashdata('success', $this->lang->line('menu_success'));
                redirect(base_url("dashboard/user"));
            }
        } else {
            $this->data["subview"] = "/conference/register";
            $this->load->view('_layout_frontend', $this->data);
        }
    }

    

    public function add() {
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
        if($_POST) {
            $rules = $this->rules();
            unset($rules[1]);
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == FALSE) {
                $this->data["subview"] = "/conference/add";
                $this->load->view('_layout_main', $this->data);
            } else {
                $array = array(
                    "conference"            => $this->input->post("conference"), 
                    "conference_date"       => date('Y-m-d',strtotime($this->input->post("conference_date"))),
                );
                $this->conference_m->insert_conference($array);
                $this->session->set_flashdata('success', $this->lang->line('menu_success'));
                redirect(base_url("conference/index"));
            }
        } else {
            $this->data["subview"] = "/conference/add";
            $this->load->view('_layout_main', $this->data);
        }
    }public function edit() {
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
            $this->data['conference'] = $this->conference_m->get_single_conference(array('conferenceID' => $id));
            if($this->data['conference']) {
                if($_POST) {
                    $rules = $this->rules();
                    $this->form_validation->set_rules($rules);
                    if ($this->form_validation->run() == FALSE) {
                        $this->data["subview"] = "/conference/edit";
                        $this->load->view('_layout_main', $this->data);
                    } else {
                        $array = array(
                            
                        "conference"            => $this->input->post("conference"),
                        "conference_status"     => $this->input->post("conference_status"),
                        "conference_date"       => $this->input->post("conference_date"),
                        );

                        $this->conference_m->update_conference($array, $id);
                        $this->session->set_flashdata('success', $this->lang->line('menu_success'));
                        redirect(base_url("conference/index"));
                    }
                } else {
                    $this->data["subview"] = "/conference/edit";
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
            $this->data['conference'] = $this->conference_m->get_single_conference(array('conferenceID' => $id));
            if($this->data['conference']) {
                $this->data["subview"] = "/conference/view";
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
            $this->data['conference'] = $this->conference_m->get_single_conference(array('conferenceID' => $id));
            if(count($this->data['conference'])) {
                $this->conference_m->delete_conference($id);
                $this->session->set_flashdata('success', $this->lang->line('menu_success'));
                redirect(base_url("conference/index"));
            } else {
                redirect(base_url("conference/index"));
            }
        } else {
            redirect(base_url("conference/index"));
        }
    }

    public function print_preview() {
        $id = htmlentities(escapeString($this->uri->segment(3)));
        if((int)$id) {
            $this->data['conference'] = $this->conference_m->get_single_conference(array('conferenceID' => $id));
            if($this->data['conference']) {
                $this->data['panel_title'] = $this->lang->line('panel_title');
                $this->reportPDF($this->data, '/conference/print_preview');
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
            $this->data['conference'] = $this->conference_m->get_single_conference(array('conferenceID' => $id));
            if($this->data['conference']) {
                $email = $this->input->post('to');
                $subject = $this->input->post('subject');
                $message = $this->input->post('message');

                $this->reportSendToMail($this->data['conference'], '/conference/print_preview', $email, $subject, $message);
            } else {
                $this->data["subview"] = "error";
                $this->load->view('_layout_main', $this->data);
            }
        } else {
            $this->data["subview"] = "error";
            $this->load->view('_layout_main', $this->data);
        }

    }
}
