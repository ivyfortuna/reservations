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
        $this->load->model('Destination_model');
        $this->load->model('User_model');
    } 

    /*
     * Listing of orders
     */
    function index($ajax=0)
    {

        $data['orders'] = $this->Order_model->get_all_orders();

        if($ajax==0 ){
            $info{'destination'}=$this->Destination_model->get_all_destinations();
            $data['_view'] = 'order/index';
            $data['users'] = $this->User_model->get_all_users();
            $data['add_modal']=$this->load->view('order/add_modal',$info,true);
            $this->load->view('layouts/main',$data);

        }else{

            echo   $this->load->view('order/index',$data,true);
        }
    }

    /*
     * Adding a new order
     */
    function add()
    {
        $login=null;
        // print_r($_POST);die;
        if(!isset($_SESSION['user'])){
            redirect('/');
        }
        if(isset($_POST) && count($_POST) > 0)
        {
            $params = array(
                'date' => $this->input->post('date'),
                'reason' => $this->input->post('reason'),
                'id_destination' =>$this->input->post('id_destination'),
                'id_user' => $_SESSION['user']['id'],
            );

            $order_id = $this->Order_model->add_order($params);

            //email
            echo 'ok' ;die;
        }
        else
        {
            echo 'nok';die;
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
