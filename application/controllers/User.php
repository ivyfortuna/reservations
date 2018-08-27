<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
include 'Base.php';
class User extends Base{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    } 

    /*
     * Listing of users
     */
    function index($ajax=0)
    {
        $data['users'] = $this->User_model->get_all_users();

         if($ajax==0 ){

             $data['_view'] = 'user/index';
             $data['add_modal']=$this->load->view('user/add_modal',array(),true);
             $this->load->view('layouts/main',$data);

        }else{

            echo   $this->load->view('user/index',$data,true);
        }
    }
    /*
     * Adding a new user
     */
/*    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'role' => $this->input->post('role'),
				'password' =>password_hash($this->input->post('password'),PASSWORD_BCRYPT),
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
            );
            
            $user_id = $this->User_model->add_user($params);
            redirect('user/index');
        }
        else
        {            
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main',$data);
        }
    }  
*/
    function add()
    {
        $login=null;
       // print_r($_POST);die;
        if(!isset($_SESSION['user'])){
            redirect('/');
        }
        if(isset($_POST) && count($_POST) > 0)
        // check if the user already exists
        { $login=$this->User_model->get_user_login( $this->input->post('email'));
            if($login!=null){
                echo 'This user already exists';die;
            }
            $params = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' =>password_hash($this->input->post('password'),PASSWORD_BCRYPT),
                'role' => $this->input->post('role'),
            );

            $user_id = $this->User_model->add_user($params);
            echo 'ok';die;
        }
        else
        {
            echo 'nok';die;
        }
    }

    /*
     * Editing a user
     */
    function edit($id)
    {   
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($id);
        
        if(isset($data['user']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'role' => $this->input->post('role'),
					'password' => $this->input->post('password'),
					'name' => $this->input->post('name'),
					'email' => $this->input->post('email'),
                );

                $this->User_model->update_user($id,$params);            
                redirect('user/index');
            }
            else
            {
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    } 

    /*
     * Deleting user
     */
    function remove($id)
    {
        $user = $this->User_model->get_user($id);

        // check if the user exists before trying to delete it
        if(isset($user['id']))
        {
            $this->User_model->delete_user($id);
            redirect('user/index');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }

    function logout(){

        $_SESSION['user']=null;
        redirect('/');
    }
    
}
