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
        $this->load->model("cabstract_m");
        $language = $this->session->userdata('lang');
        $this->lang->load('cabstract', $language);
    }

    public function index() {
        $this->data['cabstracts'] = $this->cabstract_m->get_cabstract();
        $this->data["subview"] = "/cabstract/index";
        $this->load->view('_layout_main', $this->data);
    }

    protected function rules() {
        $rules = array(
            array(
                'field' => 'title',
                'label' => $this->lang->line("cabstract_title"),
                'rules' => 'trim|required|xss_clean|max_length[128]'
            )
        );
        return $rules;
    }

    public function submit(){
        $this->data["subview"] = "/abstract/submit";
        $this->load->view('_layout_frontend', $this->data);
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
}
