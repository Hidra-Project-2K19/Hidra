<?php
class loginController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $bases = array();
        $user = new Users();
        
        if(isset($_POST['usuario']) && !empty($_POST['usuario'])){
            $name = addslashes($_POST['usuario']);
            $pass = md5(addslashes($_POST['senha']));
            
            $verify = $user->loginVerify($name, $pass);

            if($verify == true){
                header("Location: ".BASE_URL);
            }else{
                header("Location: ".BASE_URL."login");
            }
        }


        $this->loadViewLC("login", $bases);
    }
}