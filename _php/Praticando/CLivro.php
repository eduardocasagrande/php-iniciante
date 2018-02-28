<?php
require_once ("ILivro.php");


class CLivro implements ILivro {

    private $titulo;
    private $autor;
    private $genero;

    public function __construct($titulo,$autor,$genero){
        $this->autor = $autor;
        $this->genero = $genero;
        $this->titulo = $titulo;
    }

    public function getAll(){
        return "Livro: ".$this->getTitulo()."\n"."Gênero: ".$this->getGenero()."\n"."Autor: ".$this->getAutor()."\n";
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
    }
}
