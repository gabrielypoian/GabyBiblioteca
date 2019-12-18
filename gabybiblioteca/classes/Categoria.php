<?php
class Categoria{

        /*atibutos*/
    public $id;
    public $nome_categoria;

        /*metodos*/
    public function listar(){
            $query = "SELECT id, descricao FROM tb_categorias";
            $conexao = new PDO("mysql:host=127.0.0.1;dbname=biblioteca","root","");
            $resultado = $conexao->query($query);
            $lista = $resultado->fetchAll();
            return $lista;
    }

    public function listar1Categoria($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=biblioteca","root","");
        $query = "SELECT id, descricao FROM tb_categorias WHERE id = " . $id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();

        foreach($lista as $linha){
            return $linha;
        }

    }

    public function inserir($nome_categoria){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=biblioteca","root","");

        $query="INSERT INTO tb_categorias(descricao) VALUES('".$nome_categoria."')";

        $conexao->exec($query);
    }

    public function alterar($id, $nome_categoria){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=biblioteca","root","");

        $query = "UPDATE tb_categorias SET descricao = '".$nome_categoria."' WHERE id = " .$id;

        $conexao->exec($query);

    }

    public function excluir($id){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=biblioteca","root","");

        $query = "DELETE FROM tb_categorias WHERE id = " .$id;
        
        $conexao->exec($query);

    }
    
}