<?php
class Carro {
    // 🚩 RISCO: Atributo público permite valores ilegais
    public $modelo;
    public $velocidade;

    private function __construct($modelo, $velocidade) {
        $this->modelo = $modelo;
        $this->velocidade = $velocidade;
    }
    //Getter
    public function getVelocidade() 
    { 
        return $this->velocidade; 
    }

    // Setter
    protected function setVelocidade($novaVelocidade)
   {
    
        if { ($novaVelocidade >= 0 && $novaVelocidade < 200){
              $this->velocidade = $novaVelocidade;
        }else{
            echo "ERRO: velocimetro ultrapassou o limite de velocidade<br>";
        }
         
        }
    }
}

// --- TESTE DO VEÍCULO ---
$meuCarro = new Carro("Senai-Mobile", 0);

// O desastre: alteração direta sem validação
$meuCarro->setVelocidade = (200); // Velocidade de foguete?

echo "Modelo: " . $meuCarro->modelo . "<br>";
echo "Velocidade atual: " . $meuCarro->velocidade . " km/h";
?>