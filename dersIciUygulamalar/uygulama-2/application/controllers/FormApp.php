<?php
class FormApp extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
         $this->load->model("form_app");
    }
    public function Index(){
     $this->load-> view("FormApp"); 
    }

    public function getAll(){
        $items = $this->form_app->getAll();
        //print_r($items);
        $viewData = array(
            "items" => $items
        );
        $this->load->view("listele", $viewData);
    }

    public function insert()
    {
       
        $name = $this->input->post("name");  

        $email = $this->input->post("email");
        $service = $this->input->post("service");
        $budget = $this->input->post("budget");
        $message = $this->input->post("message");

        $insert = $this->form_app->insert(array(
            "name" => $name,
            "email" => $email,
            "service" => $service,
            "budget" => $budget,
            "message" => $message,
             "createdAt"  => date("Y-m-d H:i:s")
        ));
        
        if ($insert) {
            redirect(base_url("formApp/getAll"));
        }
    }
}
