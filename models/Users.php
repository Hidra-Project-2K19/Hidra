<?php
class Users extends model {

    public function loginVerify($name, $pass){
        $sql = "SELECT * FROM usuarios WHERE usuario = :name and senha = :pass";
		$sql = $this->db->prepare($sql);
        $sql->bindValue(":name", $name);
        $sql->bindValue(":pass", $pass);
		$sql->execute();
        $a = true;

		if($sql->rowCount() > 0) {
			$dados = $sql->fetch();

            $_SESSION['id_user'] = $dados["id"];
			return $a;
		} else {
			return !$a;
		}
    }

    public function cadastroVerify($email, $name){
        $sql = "SELECT * FROM usuarios WHERE usuario = :name and email = :email";
		$sql = $this->db->prepare($sql);
        $sql->bindValue(":name", $name);
        $sql->bindValue(":email", $email);
		$sql->execute();
        $a = true;

		if($sql->rowCount() == 0) {
			return $a;
		} else {
			return !$a;
		}
	}
	
	public function cadastrar($name, $email, $nn, $pass){
		$sql = "INSERT INTO usuarios SET usuario = :name, email = :email, nome = :nn, senha = :pass";
		$sql = $this->db->prepare($sql);
        $sql->bindValue(":name", $name);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":nn", $nn);
		$sql->bindValue(":pass", $pass);
		$a = true;

		if($sql->execute()){
			return $a;
		}else{
			return !$a;
		}
	}

	public function cadastrar1N($email, $name){
		$sql = "SELECT * FROM usuarios WHERE email = :email";
		$sql = $this->db->prepare($sql);
        $sql->bindValue(":email", $email);
		$sql->execute();

		if($sql->rowCount() > 0){
			$dados = $sql->fetch();
			$id = $dados['id'];

			$sql = "INSERT INTO users_info SET id_user = :id, email = :email, nome = :name";
			$sql = $this->db->prepare($sql);
        	$sql->bindValue(":name", $name);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":id", $id);
			// $sql->bindValue(":ende", $id);
			// $sql->bindValue(":city", $id);
			// $sql->bindValue(":state", $id);
			// $sql->bindValue(":cep", $id);
			// $sql->bindValue(":card_name", $id);
			// $sql->bindValue(":card_number", $id);
			// $sql->bindValue(":exp_month", $id);
			// $sql->bindValue(":exp_year", $id);
			// $sql->bindValue(":secu_code", $id);
			$sql->execute();

			return $sql;
		}
	}
    
}
?>