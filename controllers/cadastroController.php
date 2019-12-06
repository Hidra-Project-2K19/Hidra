<?php
class cadastroController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $bases = array();
        $user = new Users();
        
        if(isset($_POST['usuario']) && !empty($_POST['usuario'])){
            $name = addslashes($_POST['usuario']);
            $email = addslashes($_POST["email"]);
            $nn = addslashes($_POST["nn"]);
            $pass = md5(addslashes($_POST['senha']));
            
            $verify = $user->cadastroVerify($email, $name);

            if($verify == true){
                header("Location: ".BASE_URL);

                $verify = $user->cadastrar($name, $email, $nn, $pass);
                if($verify == true){
                    $user->cadastrar1N($email, $name);

                    header("Location: ".BASE_URL);
                }else{
                    header("Location: ".BASE_URL."cadastro");
                }
            }else{
                header("Location: ".BASE_URL."cadastro");
            }
        }


        $this->loadViewLC("cadastro", $bases);
    }
}