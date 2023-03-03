<?php
class A{
    public function getNome(){

        return "Meu nome é A";
}

}

class B extends A{
    public function getNome(){
        return "Meu nome é B";
    }
}

function imprimeNome(A $obj){
    return $obj->getNome();
}

$obj1 = new A();
$obj2 = new B();
echo imprimeNome($obj1);
echo imprimeNome($obj2);

//explicando este principio : a classe a possui a função getnome com um tipo de retorno . A classe b possui a função com outro tipo de retorno. mas a classe b é filha da classe a. por isso ela consegue implementar todas asfuncionalidades da classe mae. Quando crio uma funcao fora da clase e falo que essa função vai receber como parametro um objeto da classe a, eu posso passar como parametro tanto um objeto da classe a quanto um objeto da classe b, pois a classe b é filha da classe a. Isso é o principio da substituição de liskov. Agora , se viola o principio caso o getnome na classe b retonasse um tipo diferente. ele tem que retornar o mesmo tipo de retorno da classe a.





?>