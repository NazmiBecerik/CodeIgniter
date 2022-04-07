<?php
class OdevController extends CI_Controller{
    
    public function __construct()
    {
        parent:: __construct();
        $this->load->model("OdevModel");
    }

    public function index(){
        return $this->load->view("OdevView");
    }

    public function getAll(){
        $items=$this->OdevModel->getAll();
        $viewData=array(
            "items"=>$items
        );
        $this -> load -> view("Liste",$viewData);
    }

    public function insert()
    {
       
        $userName = $this->input->post("userName");  
        $email = $this->input->post("email");
        $message = $this->input->post("message");

        $insert = $this->OdevModel->insert(array(
            "userName" => $userName,
            "email" => $email,
            "message" => $message
        ));
        
        if ($insert) {
            redirect(base_url("OdevController/getAll"));
        }
    }
}
?>