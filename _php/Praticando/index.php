<?php
    require_once ("CLivro.php");

    $livro1 = new CLivro("As Crônicas de Gelo e Fogo","George R.R Martin","Ficção");

    echo $livro1->getAll();
