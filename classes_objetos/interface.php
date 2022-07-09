<div class="titulo">Interface</div>

<?php

interface Animal {
    function respirar();
}

interface Mamifero {
    function mamar();
}

interface Clorofilados {
    function fazerFotosintese();
}

// Interface apenas DEFINE FUNÇÕES
interface Canino extends Animal, Mamifero {
    // interface apenas define os métodos a serem utilizados
    function latir(): string;
}

// class Cachorro implements Animal, Canino {
class Cachorro implements Canino {
    function respirar() {
        return "Irei usar oxigênio!";
    }

    function latir(): string {
        return 'au au';
    }

    function mamar() {
        return "quero leite!!!";
    }
}

$animal = new Cachorro();

echo $animal->respirar(), '<br>';
echo $animal->latir(), '<br>';
echo $animal->mamar(), '<br>';

echo '<br>';
var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Canino);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Animal);
var_dump($animal instanceof Clorofilados);
echo '<br>';