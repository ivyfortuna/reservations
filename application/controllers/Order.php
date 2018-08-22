<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 include 'Base.php';
class Order extends Base{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Order_model');
    } 

    /*
     * Listing of orders
     */
    function index()
    {
        $data['orders'] = $this->Order_model->get_all_orders();
        
        $data['_view'] = 'order/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new order
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'date' => $this->input->post('date'),
				'reason' => $this->input->post('reason'),
				'id_destination' => $this->input->post('id_destination'),
				'id_user' => $this->input->post('id_user'),
            );
            
            $order_id = $this->Order_model->add_order($params);
            redirect('order/index');
        }
        else
        {            
            $data['_view'] = 'order/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a order
     */
    function edit($id)
    {   
        // check if the order exists before trying to edit it
        $data['order'] = $this->Order_model->get_order($id);
        
        if(isset($data['order']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'date' => $this->input->post('date'),
					'reason' => $this->input->post('reason'),
					'id_destination' => $this->input->post('id_destination'),
					'id_user' => $this->input->post('id_user'),
                );

                $this->Order_model->update_order($id,$params);            
                redirect('order/index');
            }
            else
            {
                $data['_view'] = 'order/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The order you are trying to edit does not exist.');
    } 

    /*
     * Deleting order
     */
    function remove($id)
    {
        $order = $this->Order_model->get_order($id);

        // check if the order exists before trying to delete it
        if(isset($order['id']))
        {
            $this->Order_model->delete_order($id);
            redirect('order/index');
        }
        else
            show_error('The order you are trying to delete does not exist.');
    }
    
}
