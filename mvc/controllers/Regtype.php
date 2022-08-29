<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Regtype extends Admin_Controller {
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
        $this->load->model("regtype_m");
        $language = $this->session->userdata('lang');
        $this->lang->load('regtype', $language);
    }

    public function index() {
        $this->data['regtypes'] = $this->regtype_m->get_regtype();
        $this->data["subview"] = "/regtype/index";
        $this->load->view('_layout_main', $this->data);
    }

    protected function rules() {
        $rules = array(
            array(
                'field' => 'regtype',
                'label' => $this->lang->line("regtype_title"),
                'rules' => 'trim|required|xss_clean|max_length[128]'
            ),
            array(
                'field' => 'amount_usd',
                'label' => 'Amount in USD',
                'rules' => 'trim|numeric|required|xss_clean|max_length[128]'
            ),
            array(
                'field' => 'amount_pkr',
                'label' => 'Amount in PKR',
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
                $this->data["subview"] = "/regtype/add";
                $this->load->view('_layout_main', $this->data);
            } else {
                $array = array(
                            "regtype"       => $this->input->post("regtype"),
                            "amount_pkr"    => $this->input->post("amount_pkr"),
                            "amount_usd"    => $this->input->post("amount_usd")
                );
                $this->regtype_m->insert_regtype($array);
                $this->session->set_flashdata('success', $this->lang->line('menu_success'));
                redirect(base_url("regtype/index"));
            }
        } else {
            $this->data["subview"] = "/regtype/add";
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
            $this->data['regtype'] = $this->regtype_m->get_single_regtype(array('regtypeID' => $id));
            if($this->data['regtype']) {
                if($_POST) {
                    $rules = $this->rules();
                    $this->form_validation->set_rules($rules);
                    if ($this->form_validation->run() == FALSE) {
                        $this->data["subview"] = "/regtype/edit";
                        $this->load->view('_layout_main', $this->data);
                    } else {
                        $array = array(
                            "regtype"       => $this->input->post("regtype"),
                            "amount_pkr"    => $this->input->post("amount_pkr"),
                            "amount_usd"    => $this->input->post("amount_usd")
                        );

                        $this->regtype_m->update_regtype($array, $id);
                        $this->session->set_flashdata('success', $this->lang->line('menu_success'));
                        redirect(base_url("regtype/index"));
                    }
                } else {
                    $this->data["subview"] = "/regtype/edit";
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
            $this->data['regtype'] = $this->regtype_m->get_single_regtype(array('regtypeID' => $id));
            if($this->data['regtype']) {
                $this->data["subview"] = "/regtype/view";
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
            $this->data['regtype'] = $this->regtype_m->get_single_regtype(array('regtypeID' => $id));
            if(count($this->data['regtype'])) {
                $this->regtype_m->delete_regtype($id);
                $this->session->set_flashdata('success', $this->lang->line('menu_success'));
                redirect(base_url("regtype/index"));
            } else {
                redirect(base_url("regtype/index"));
            }
        } else {
            redirect(base_url("regtype/index"));
        }
    }

    public function print_preview() {
        $id = htmlentities(escapeString($this->uri->segment(3)));
        if((int)$id) {
            $this->data['regtype'] = $this->regtype_m->get_single_regtype(array('regtypeID' => $id));
            if($this->data['regtype']) {
                $this->data['panel_title'] = $this->lang->line('panel_title');
                $this->reportPDF($this->data, '/regtype/print_preview');
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
            $this->data['regtype'] = $this->regtype_m->get_single_regtype(array('regtypeID' => $id));
            if($this->data['regtype']) {
                $email = $this->input->post('to');
                $subject = $this->input->post('subject');
                $message = $this->input->post('message');

                $this->reportSendToMail($this->data['regtype'], '/regtype/print_preview', $email, $subject, $message);
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
