<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workshoptype_m extends MY_Model {

    protected $_table_name = 'workshoptype';
    protected $_primary_key = 'workshoptypeID';
    protected $_primary_filter = 'intval';
    protected $_order_by = "workshoptypeID asc";

    function __construct() {
        parent::__construct();
    }

    function get_workshoptype($array=NULL, $signal=FALSE) {
        $query = parent::get($array, $signal);
        return $query;
    }

    function get_single_workshoptype($array) {
        $query = parent::get_single($array);
        return $query;
    }

    function get_order_by_workshoptype($array=NULL) {
        $query = parent::get_order_by($array);
        return $query;
    }

    function insert_workshoptype($array) {
        $id = parent::insert($array);
        return $id;
    }

    function update_workshoptype($data, $id = NULL) {
        parent::update($data, $id);
        return $id;
    }

    public function delete_workshoptype($id){
        parent::delete($id);
    }
    

    public function insert_batch_workshoptype($array) {
        $id = parent::insert_batch($array);
        return $id;
    }

    public function update_workshoptype_by_array($data, $array = NULL) {
        $this->db->set($data);
        $this->db->where($array);
        $this->db->update($this->_table_name);
    }
}
