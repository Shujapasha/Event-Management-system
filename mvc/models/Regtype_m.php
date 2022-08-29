<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Regtype_m extends MY_Model {

    protected $_table_name = 'regtype';
    protected $_primary_key = 'regtypeID';
    protected $_primary_filter = 'intval';
    protected $_order_by = "regtype asc";

    function __construct() {
        parent::__construct();
    }

    function get_regtype($array=NULL, $signal=FALSE) {
        $query = parent::get($array, $signal);
        return $query;
    }

    function get_single_regtype($array) {
        $query = parent::get_single($array);
        return $query;
    }

    function get_order_by_regtype($array=NULL) {
        $query = parent::get_order_by($array);
        return $query;
    }

    function insert_regtype($array) {
        $id = parent::insert($array);
        return $id;
    }

    function update_regtype($data, $id = NULL) {
        parent::update($data, $id);
        return $id;
    }

    public function delete_regtype($id){
        parent::delete($id);
    }
    

    public function insert_batch_regtype($array) {
        $id = parent::insert_batch($array);
        return $id;
    }

    public function update_regtype_by_array($data, $array = NULL) {
        $this->db->set($data);
        $this->db->where($array);
        $this->db->update($this->_table_name);
    }
}
