<?php
class Produtos{

    /*atibutos*/
public $id;
public $nome;
public $preco;
public $quantidade;
public $categoria_livro;
public $descricao;

    /*metodos*/
public function listar(){
        $query = "SELECT id, nome, quantidade, categoria, descricao, preco FROM tb_produtos";
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=biblioteca","root","");
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
}

public function listar1Produto($id){
    $conexao = new PDO("mysql:host=127.0.0.1;dbname=biblioteca","root","");

    $query = "SELECT id, nome, quantidade, categoria, descricao, preco FROM tb_produtos WHERE id = " . $id;

    $resultado = $conexao->query($query);
    $lista = $resultado->fetchAll();

    foreach($lista as $linha){
        return $linha;
    }
}

public function inserir($nome, $preco, $quantidade, $categoria_livro, $descricao){
    $conexao = new PDO("mysql:host=127.0.0.1;dbname=biblioteca","root","");

    $query="INSERT INTO tb_produtos(nome, quantidade, categoria, descricao, preco) VALUES('".$nome."', '".$quantidade."', '".$categoria_livro."', '".$descricao."', '".$preco."')";

    $conexao->exec($query);
}

public function alterar($id, $nome, $preco, $quantidade, $categoria_livro, $descricao){
    $conexao = new PDO("mysql:host=127.0.0.1;dbname=biblioteca","root","");

    $query = "UPDATE tb_produtos SET nome = '".$nome."' , preco = '".$preco."' , quantidade = '".$quantidade."' , categoria = '".$categoria_livro."' , descricao = '".$descricao."' WHERE id = " .$id;
    
    $conexao->exec($query);

}

public function excluir($id){
    $conexao = new PDO("mysql:host=127.0.0.1;dbname=biblioteca","root","");

    $query = "DELETE FROM tb_produtos WHERE id = " .$id;

    $conexao->exec($query);

}

}