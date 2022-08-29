<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrations_m extends MY_Model {

    protected $_table_name = 'registrations';
    protected $_primary_key = 'registrationsID';
    protected $_primary_filter = 'intval';
    protected $_order_by = "registrationsID DESC";

    function __construct() {
        parent::__construct();
    }

    function get_registrations($array=NULL, $signal=FALSE) {
        $query = parent::get($array, $signal);
        return $query;
    }

    function get_single_registrations($array) {
        $query = parent::get_single($array);
        return $query;
    }

    function get_order_by_registrations($array=NULL) {
        $query = parent::get_order_by($array);
        return $query;
    }

    function insert_registrations($array) {
        $id = parent::insert($array);
        return $id;
    }

    function update_registrations($data, $id = NULL) {
        parent::update($data, $id);
        return $id;
    }

    public function delete_registrations($id){
        parent::delete($id);
    }
    

    public function insert_batch_registrations($array) {
        $id = parent::insert_batch($array);
        return $id;
    }

    public function update_registrations_by_array($data, $array = NULL) {
        $this->db->set($data);
        $this->db->where($array);
        $this->db->update($this->_table_name);
    }
}
