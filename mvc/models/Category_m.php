<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_m extends MY_Model {

    protected $_table_name = 'category';
    protected $_primary_key = 'categoryID';
    protected $_primary_filter = 'intval';
    protected $_order_by = "category asc";

    function __construct() {
        parent::__construct();
    }

    function get_category($array=NULL, $signal=FALSE) {
        $query = parent::get($array, $signal);
        return $query;
    }

    function get_single_category($array) {
        $query = parent::get_single($array);
        return $query;
    }

    function get_order_by_category($array=NULL) {
        $query = parent::get_order_by($array);
        return $query;
    }

    function insert_category($array) {
        $id = parent::insert($array);
        return $id;
    }

    function update_category($data, $id = NULL) {
        parent::update($data, $id);
        return $id;
    }

    public function delete_category($id){
        parent::delete($id);
    }
    

    public function insert_batch_category($array) {
        $id = parent::insert_batch($array);
        return $id;
    }

    public function update_category_by_array($data, $array = NULL) {
        $this->db->set($data);
        $this->db->where($array);
        $this->db->update($this->_table_name);
    }
}
