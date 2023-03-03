<?php
use Vtiful\Kernel\Format;

interface Remuneravel{
    public function calcularSalario();
}


class ContratoClt implements Remuneravel{

   

  
    public float $salarioBruto;

    public function __construct(public float $valorHora,public int $horasTrabalhadas, public int $dias)
    {
       
    }
    public function calcularSalario(){
        $this->salarioBruto = $this->valorHora * $this->horasTrabalhadas * $this->dias;
        
        return $this->salarioBruto;
    }

}

class Estagio implements Remuneravel{

    public float $bolsaAuxilio;

 

    public function __construct(public float $valorHora,public int $horasTrabalhadas, public int $dias)
    {
       
    }


    public function calcularSalario(){
        $this->bolsaAuxilio = $this->valorHora * $this->horasTrabalhadas * $this->dias;
        
        return $this->bolsaAuxilio;
    }

}


class folhaPagamento{

    public function calcular(Remuneravel $funcionario){
        $funcionario->calcularSalario(); // deste jeito, conseguimos aplicar o conceito de aberto e fechado, pois se eu precisar adicionar uma nova classe, eu nao preciso alterar o codigo da folha de pagamento, apenas implementar a interface e o metodo calcularSalario() na nova classe.
    }

    
    
    
    
    /*public function calcular($funcionario){
        if($funcionario instanceof ContratoClt){
            $funcionario->calcularSalario();
        }else if($funcionario instanceof Estagio){
            $funcionario->bolsaAuxilio();
        } // se eu precisa verificar uma outra classe eu ja quebraria o principio do aberto e fechado. 

    }
    */
}

$funcionario1 = new ContratoClt(30.44, 8, 22); //instancia de clt
$funcionario2 = new Estagio(20.44,6,22); //instancia de estagio
$folha = new folhaPagamento(); //instancia de folha de pagamento
$folha->calcular($funcionario1); //calcula salario
 $folha->calcular($funcionario2); //calcula bolsa auxilio
 

 echo "O salario do funcionario 1 é: " . number_format($funcionario1->salarioBruto, 2, ',', '.') . " e o da bolsa do funcionario 2 é : " .number_format($funcionario2->bolsaAuxilio, 2, ',', '.');






?>