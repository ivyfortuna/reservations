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
    function index()
    {
        $ajax=0;
        if(!isset( $_SESSION['user_table'])){
        $_SESSION['user_table']=0;}

        $config['base_url'] = base_url().'order/';
        $config['per_page'] = 10;
        $config['full_tag_open'] = "<ul id='pagination' class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";


        if($_SESSION['user']==null ){
            redirect('/');
        }



        if(isset($_POST)&& count($_POST) > 0  || isset($_SESSION['user_table']) ) {
            if((isset($_POST)&& count($_POST) > 0 )){
                $_SESSION['user_table']=$_POST['id_user'];}
                $data['orders'] = $this->Order_model->get_all_orders_user_sort($config['per_page'],$this->uri->segment(2), $_SESSION['user_table']);
                $config['total_rows'] = $this->Order_model->count_all_orders_user($_SESSION['user_table']);

            if($_SESSION['user_table']==0){
                $data['orders'] = $this->Order_model->get_all_orders_sort($config['per_page'],$this->uri->segment(2));
                $config['total_rows'] = $this->Order_model->count_all_orders();
            }

        }



        $this->pagination->initialize($config);





        if($ajax==0 ){

            $info{'destination'}=$this->Destination_model->get_all_destinations();
            $data['_view'] = 'order/index';
            $data{'destination'}=$this->Destination_model->get_all_destinations();
            $data['users'] = $this->User_model->get_all_users();
            $data['add_modal']=$this->load->view('order/add_modal',$info,true);
            $this->load->view('layouts/main',$data);

        }else{
            echo   $this->load->view('order',$data,true);
        }
    }

    /*
     * Adding a new order
     */
    function add()
    {
        //Email variables
        $this->email->from('pablo.villargarcia@iskra.eu', 'Your Name');
        $this->email->to('pablo.villargarcia@iskra.eu');
        //$this->email->cc('another@another-example.com');
        //$this->email->bcc('them@their-example.com');
        //Email content
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');


        if(!isset($_SESSION['user'])){
            redirect('/');
        }
        if(isset($_POST) && count($_POST) > 0)
        {
            $params = array(
                'date' => $this->input->post('date'),
                'time' => $this->input->post('time'),
                'reason' => $this->input->post('reason'),
                'id_destination' =>$this->input->post('id_destination'),
                'id_pickup_destination' =>$this->input->post('id_pickup_destination'),
                'id_user' => $_SESSION['user']['id'],
            );


            $order_id = $this->Order_model->add_order($params);

            //Sending Email Only Works on server

           // $this->email->send();


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

        if($_SESSION['user']==null ){
            redirect('/');
        }
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
                redirect('order');
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
        if($_SESSION['user']==null ){
            redirect('/');
        }
        $order = $this->Order_model->get_order($id);

        // check if the order exists before trying to delete it
        if(isset($order['id']))
        {
            $this->Order_model->delete_order($id);
            redirect('order');
        }
        else
            show_error('The order you are trying to delete does not exist.');
    }
    
}
