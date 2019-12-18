<?php
class Usuario{

    /*atibutos*/
    public $id;
    public $email;
    public $senha;

        /*metodos*/
    public function listar(){
            $query = "SELECT id, usuario, senha FROM TB_usuarios";
            $conexao = new PDO("mysql:host=127.0.0.1;dbname=biblioteca","root","");
            $resultado = $conexao->query($query);
            $lista = $resultado->fetchAll();
            return $lista;
    }

    public function listar1Usuario($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=biblioteca","root","");

        $query = "SELECT id, usuario, senha FROM tb_usuarios WHERE id = " . $id;

        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();

        foreach($lista as $linha){
            return $linha;
        }

    }

    public function inserir($email, $senha){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=biblioteca","root","");

        $query="INSERT INTO TB_usuarios(usuario, senha) VALUES('".$email."', '".$senha."')";

        $conexao->exec($query);
    }

    public function alterar($id, $email){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=biblioteca","root","");

        $query = "UPDATE tb_usuarios SET usuario = '".$email."' WHERE id = " .$id;
        
        $conexao->exec($query);

    }

    public function excluir($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=biblioteca","root","");

        $query = "DELETE FROM TB_usuarios WHERE id = ".$id;

        $conexao->exec($query);
    }


    public function validarLogin($email, $senha){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=biblioteca","root","");

        $query = "SELECT * FROM TB_usuarios WHERE usuario = '".$email."' AND senha = '".$senha."'";

        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();

        foreach($lista as $um){
            return $um;
        }
    }
}