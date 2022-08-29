<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Abstract_m extends MY_Model {

    protected $_table_name = 'abstract';
    protected $_primary_key = 'abstractID';
    protected $_primary_filter = 'intval';
    protected $_order_by = "abstractID asc";

    function __construct() {
        parent::__construct();
    }

    function get_abstract($array=NULL, $signal=FALSE) {
        $query = parent::get($array, $signal);
        return $query;
    }

    function get_single_abstract($array) {
        $query = parent::get_single($array);
        return $query;
    }

    function get_order_by_abstract($array=NULL) {
        $query = parent::get_order_by($array);
        return $query;
    }

    function insert_abstract($array) {
        $id = parent::insert($array);
        return $id;
    }

    function update_abstract($data, $id = NULL) {
        parent::update($data, $id);
        return $id;
    }

    public function delete_abstract($id){
        parent::delete($id);
    }
    

    public function insert_batch_abstract($array) {
        $id = parent::insert_batch($array);
        return $id;
    }

    public function update_abstract_by_array($data, $array = NULL) {
        $this->db->set($data);
        $this->db->where($array);
        $this->db->update($this->_table_name);
    }
}
