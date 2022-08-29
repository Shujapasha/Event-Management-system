<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Conference_m extends MY_Model {

    protected $_table_name = 'conference';
    protected $_primary_key = 'conferenceID';
    protected $_primary_filter = 'intval';
    protected $_order_by = "conferenceID asc";

    function __construct() {
        parent::__construct();
    }

    function get_conference($array=NULL, $signal=FALSE) {
        $query = parent::get($array, $signal);
        return $query;
    }

    function get_single_conference($array) {
        $query = parent::get_single($array);
        return $query;
    }

    function get_order_by_conference($array=NULL) {
        $query = parent::get_order_by($array);
        return $query;
    }

    function insert_conference($array) {
        $id = parent::insert($array);
        return $id;
    }

    function update_conference($data, $id = NULL) {
        parent::update($data, $id);
        return $id;
    }

    public function delete_conference($id){
        parent::delete($id);
    }
    

    public function insert_batch_conference($array) {
        $id = parent::insert_batch($array);
        return $id;
    }

    public function update_conference_by_array($data, $array = NULL) {
        $this->db->set($data);
        $this->db->where($array);
        $this->db->update($this->_table_name);
    }
}
