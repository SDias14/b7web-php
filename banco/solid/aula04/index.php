<?php

interface Aves{
    public function setLocation($lat, $long);
   
    public function render();

    //obrigatorio as classes que implementarem a interface Aves terem esses metodos
}

interface AvesQueVoam extends Aves{
    public function setAltitude($alt);
    //obrigatorio as classes que implementarem a interface AvesQueVoam terem esses metodos
}


class Papagaio implements AvesQueVoam{
    public function setLocation($lat, $long){
        echo "Localização do papagaio: $lat, $long";
    }

    public function setAltitude($alt){
        echo "Altitude do papagaio: $alt";
    }

    public function render(){
        echo "Renderizando o papagaio";
    }
}

class Pinguim implements Aves{
    public function setLocation($lat, $long){
        echo "Localização do pinguim: $lat, $long";
    }

    public function render(){
        echo "Renderizando o pinguim";
    }
}




/*

jeito que fere o principio da segregação de interfaces

class Papagaio implements Aves{
    public function setLocation($lat, $long){
        echo "Localização do papagaio: $lat, $long";
    }

    public function setAltitude($alt){
        echo "Altitude do papagaio: $alt";
    }

    public function render(){
        echo "Renderizando o papagaio";
    }
}

class Pinguim implements Aves{
    public function setLocation($lat, $long){
        echo "Localização do pinguim: $lat, $long";
    }

    public function setAltitude($alt){
        echo "Altitude do pinguim: $alt";
    }

    public function render(){
        echo "Renderizando o pinguim";
    }
}

*/


//explicando o principio da segregação de interfaces: a interface Aves possui 3 metodos. Mas nem todas as classes que implementam a interface Aves precisam de todos os metodos. Por exemplo, o pinguim nao precisa do metodo setAltitude(). Entao, eu crio uma interface Aves que possui apenas os metodos que sao necessarios para todas as classes que implementam a interface Aves. E crio uma interface AvesQueVoam que possui os metodos que sao necessarios para as classes que voam. E crio uma interface AvesQueNaoVoam que possui os metodos que sao necessarios para as classes que nao voam. E as classes que implementam a interface Aves, implementam as interfaces AvesQueVoam e AvesQueNaoVoam. Assim, eu consigo separar as classes que voam das classes que nao voam. E as classes que voam, eu consigo separar as classes que voam de maneira diferente das classes que nao voam. E assim, eu consigo aplicar o principio da segregação de interfaces. Em uma interface so deve existir metodos que sao necessarios para todas as classes que implementam a interface. E em interfaces diferentes, so devem existir metodos que sao necessarios para as classes que implementam a interface.




?>