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
        $this->load->model('Destination_model');
        $this->load->model('User_model');
    }

    /*
     * Listing of destinations
     */
    function index()
    {
        if ($_SESSION['user'] == null) {
            redirect('/');
        }
        $month=date('Y-m');
        $data['reports'] = $this->Report_model->get_month_orders($month);
        $data['reportsCount'] = $this->Report_model->count_month_orders($month);
        if(isset($_POST)&& count($_POST) > 0) {
            $month = $_POST['month'];
            $_SESSION['month']=$_POST['month'];
            $data['reports'] = $this->Report_model->get_month_orders($month);
            $data['reportsCount'] = $this->Report_model->count_month_orders($month);
        }

            $info{'destination'}=$this->Destination_model->get_all_destinations();
            $data{'destination'}=$this->Destination_model->get_all_destinations();
            $data['users'] = $this->User_model->get_all_users();
            $data['_view'] = 'report/index';
            $this->load->view('layouts/main', $data);

    }

    function pdf()
    {
        if (!isset($_SESSION['month'])) {
            redirect('report');
        } else {
            $data['reports'] = $this->Report_model->get_month_orders($_SESSION['month']);
            $data{'destination'} = $this->Destination_model->get_all_destinations();
            $data['users'] = $this->User_model->get_all_users();


            /*  $html = $this->load->view('report/pdf',$data, true); //load the pdf.php by passing our data and get all data in $html varriable.
              $pdfFilePath ="webpreparations-".time().".pdf";
              //actually, you can pass mPDF parameter on this load() function
              $pdf = $this->m_pdf->load();
              //generate the PDF!
              $stylesheet = '<style>'.file_get_contents('assets/themes/home/css/bootstrap.css').'</style>';
              // apply external css
              $pdf->WriteHTML($stylesheet,1);
              $pdf->WriteHTML($html,0);
              $pdf->Output($pdfFilePath, "D");
              exit;*/

            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle('Report');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');

            $pdf->AddPage();
            $html = $this->load->view('report/pdf', $data, true);
            $pdf->writeHTML($html, true, false, true, false, '');
            ob_clean();
            $pdf->Output('Reports.pdf', 'I');

        }
    }



}