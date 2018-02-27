<?php

class Pessoa{
    public function olaMundo($nome){
        return "HELLO {$nome}";
    }

    public function dobroDe($numero){
        $dobro = $numero * 2;
        return "O dobro de {$numero} is = {$dobro}";
    }
}

$p = new Pessoa;

echo $p->olaMundo("WORLD \n");

$p2 = new Pessoa;
echo $p2->dobroDe(5);
