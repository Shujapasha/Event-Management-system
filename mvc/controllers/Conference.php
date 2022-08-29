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
        $language = $this->session->userdata('lang');
        $this->lang->load('conference', $language);
    }

    public function index() {
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
