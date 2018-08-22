<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Destination_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get destination by id
     */
    function get_destination($id)
    {
        return $this->db->get_where('destinations',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all destinations
     */
    function get_all_destinations()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('destinations')->result_array();
    }
        
    /*
     * function to add new destination
     */
    function add_destination($params)
    {
        $this->db->insert('destinations',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update destination
     */
    function update_destination($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('destinations',$params);
    }
    
    /*
     * function to delete destination
     */
    function delete_destination($id)
    {
        return $this->db->delete('destinations',array('id'=>$id));
    }
}
