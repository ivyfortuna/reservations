<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */
include 'Base.php';
class Report extends Base
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Report_model');
        $this->load->model('Order_model');
        $this->load->model('Destination_model');
        $this->load->model('User_model');
    }

    /*
     * Listing of destinations
     */
    function index($ajax = 0)
    {
        if ($_SESSION['user'] == null) {
            redirect('/');
        }
        $month=date('Y-m');
        $data['reports'] = $this->Report_model->get_month_orders($month);

        if(isset($_POST)&& count($_POST) > 0) {
            $month = $_POST['month'];

            $data['reports'] = $this->Report_model->get_month_orders($month);

        }

        if ($ajax == 0) {

            $info{'destination'}=$this->Destination_model->get_all_destinations();
            $data{'destination'}=$this->Destination_model->get_all_destinations();
            $data['users'] = $this->User_model->get_all_users();
            $data['_view'] = 'report/index';
            $this->load->view('layouts/main', $data);

        } else {

            echo $this->load->view('report/index', $data, true);
        }
    }

    /*
     * Adding a new destination
     */
    function pdf()
    {
        $month=0;
        if((isset($_POST)&& count($_POST) > 0 )) {
            $month = $_POST['month'];
            $data['reports'] = $this->Report_model->get_month_orders($month);
            $this->pdf->load_view('report/index, $data');
            $this->pdf->render();
            $this->pdf->stream("reports.pdf");
        }
        else{
            redirect('report');
        }

    }
}