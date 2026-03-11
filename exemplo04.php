<?php  

class Funcionario{
    public $nome;
    public $salario;
    public $previdencia;
    public $descontos;

    
    function __construct($nome, $salario, $previdencia){
        $this->nome = $nome;
        $this->salario = $salario;
        $this->previdencia = $previdencia;
        $this->descontos = $this->calcularDescontos();
    }  

    function calcularDescontos()
    {
         return number_format($this->salario*0.275 + $this->previdencia, 2, ',', '.');
    }
}


$joao = new Funcionario('João Flho', 1000, 100);
$maria = new Funcionario('Maria Rute', 1000, 100);
$jose = new Funcionario('José Salgado', 1000, 100);

echo "O Valor de descontos de $joao->nome é de $joao->descontos. <br>";
echo "O Valor de descontos de $maria->nome é de $maria->descontos. <br>";
echo "O Valor de descontos de $jose->nome é de $jose->descontos. <br>";
?>