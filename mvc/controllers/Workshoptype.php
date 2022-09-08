<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workshoptype extends Admin_Controller {
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
        $this->load->model("workshoptype_m");
        $language = $this->session->userdata('lang');
        $this->lang->load('workshoptype', $language);
    }

    public function index() {
        $this->data['workshoptypes'] = $this->workshoptype_m->get_workshoptype();
        $this->data["subview"] = "/workshoptype/index";
        $this->load->view('_layout_main', $this->data);
    }

    protected function rules() {
         $rules = array(
            array(
                'field' => 'workshoptype',
                'label' => $this->lang->line("workshoptype_title"),
                'rules' => 'trim|required|xss_clean|max_length[128]'
            ),
            array(
                'field' => 'amount_type',
                'label' => 'Amount Type',
                'rules' => 'trim|required|xss_clean|max_length[128]'
            ),
            array(
                'field' => 'amount',
                'label' => 'Amount',
                'rules' => 'trim|numeric|required|xss_clean|max_length[128]'
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
                $this->data["subview"] = "/workshoptype/add";
                $this->load->view('_layout_main', $this->data);
            } else {
                 $array = array(
                            "workshoptype"       => $this->input->post("workshoptype"),
                            "amount_type"    => $this->input->post("amount_type"),
                            "amount"    => $this->input->post("amount")
                        );
                $this->workshoptype_m->insert_workshoptype($array);
                $this->session->set_flashdata('success', $this->lang->line('menu_success'));
                redirect(base_url("workshoptype/index"));
            }
        } else {
            $this->data["subview"] = "/workshoptype/add";
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
            $this->data['workshoptype'] = $this->workshoptype_m->get_single_workshoptype(array('workshoptypeID' => $id));
            if($this->data['workshoptype']) {
                if($_POST) {
                    $rules = $this->rules();
                    $this->form_validation->set_rules($rules);
                    if ($this->form_validation->run() == FALSE) {
                        $this->data["subview"] = "/workshoptype/edit";
                        $this->load->view('_layout_main', $this->data);
                    } else {
                        $array = array(
                            "title" => $this->input->post("title")
                        );

                        $this->workshoptype_m->update_workshoptype($array, $id);
                        $this->session->set_flashdata('success', $this->lang->line('menu_success'));
                        redirect(base_url("workshoptype/index"));
                    }
                } else {
                    $this->data["subview"] = "/workshoptype/edit";
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
            $this->data['workshoptype'] = $this->workshoptype_m->get_single_workshoptype(array('workshoptypeID' => $id));
            if($this->data['workshoptype']) {
                $this->data["subview"] = "/workshoptype/view";
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
            $this->data['workshoptype'] = $this->workshoptype_m->get_single_workshoptype(array('workshoptypeID' => $id));
            if(count($this->data['workshoptype'])) {
                $this->workshoptype_m->delete_workshoptype($id);
                $this->session->set_flashdata('success', $this->lang->line('menu_success'));
                redirect(base_url("workshoptype/index"));
            } else {
                redirect(base_url("workshoptype/index"));
            }
        } else {
            redirect(base_url("workshoptype/index"));
        }
    }

    public function print_preview() {
        $id = htmlentities(escapeString($this->uri->segment(3)));
        if((int)$id) {
            $this->data['workshoptype'] = $this->workshoptype_m->get_single_workshoptype(array('workshoptypeID' => $id));
            if($this->data['workshoptype']) {
                $this->data['panel_title'] = $this->lang->line('panel_title');
                $this->reportPDF($this->data, '/workshoptype/print_preview');
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
            $this->data['workshoptype'] = $this->workshoptype_m->get_single_workshoptype(array('workshoptypeID' => $id));
            if($this->data['workshoptype']) {
                $email = $this->input->post('to');
                $subject = $this->input->post('subject');
                $message = $this->input->post('message');

                $this->reportSendToMail($this->data['workshoptype'], '/workshoptype/print_preview', $email, $subject, $message);
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
