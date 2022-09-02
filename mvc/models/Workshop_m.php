<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workshop_m extends MY_Model {

    protected $_table_name = 'workshop';
    protected $_primary_key = 'workshopID';
    protected $_primary_filter = 'intval';
    protected $_order_by = "workshopID asc";

    function __construct() {
        parent::__construct();
    }

    function get_workshop($array=NULL, $signal=FALSE) {
        $query = parent::get($array, $signal);
        return $query;
    }

    function get_single_workshop($array) {
        $query = parent::get_single($array);
        return $query;
    }

    function get_order_by_workshop($array=NULL) {
        $query = parent::get_order_by($array);
        return $query;
    }

    function insert_workshop($array) {
        $id = parent::insert($array);
        return $id;
    }

    function update_workshop($data, $id = NULL) {
        parent::update($data, $id);
        return $id;
    }

    public function delete_workshop($id){
        parent::delete($id);
    }
    

    public function insert_batch_workshop($array) {
        $id = parent::insert_batch($array);
        return $id;
    }

    public function update_workshop_by_array($data, $array = NULL) {
        $this->db->set($data);
        $this->db->where($array);
        $this->db->update($this->_table_name);
    }
}
