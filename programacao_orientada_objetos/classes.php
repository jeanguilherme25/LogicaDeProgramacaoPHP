<?php
// Poo: progaação orientada a objetos.
// DAO: Data Access objeto (objeteto da Acesso de Dados)

// tipos de functions:
// public: Função aberta para ser consumida por todas as camadas da aplicação.
// pode ser realizado herança!

// private: função restrita na própia classe da qual,ela pertence.
//não pode ser realizado herança!

//public static: Função congelada de código aberto, para ser consumida por todas as camadas de aplicação
// pode ser realizado herança!

//private static: Função congelada de código restrito na própia classe da qual,ela pertence.
// não pode ser realizado herança

// toda classe de forma obrigatoria,deve ter a primeira letra do nome do arquivo em Maiusculo (case Sentive)!
// o nome da class no codigo, deve ser exatamente o mesmo nome do Arquivo de Clasee (boas praticas).

class classDAO{
    public function somarExemplo($valor1, $valor2){
        if($valor1 ==''|| $valor2 == ''){
            return 0;
        } else {
            $resultado = $valor1 + $valor2;
            return $resultado;
        }
    }

   
public function CalcularCombustivel ($combustivel, $qtd){
    if($combustivel == 1) {
        return $this -> Etanol($qtd);
    } else if ($combustivel == 2){
        return $this -> Gasolina($qtd);
    } else if ($combustivel == 3){
        return $this -> Diesel($qtd);
    }
}
}
}
private function Etanol ($qtd){

        $etanol = $qtd * 3.09;

        return $etanol;
    }


    private function Gasolina ($qtd) {

        $gasolina = $qtd * 4.10;
        return $gasolina;
    }
    
    private function Diesel ($qtd){
    $diesel = $qtd*4.65;

    return $diesel;
    }
    public function Conversor ($tipotemp, $qtdTemp){
        if ($tipoTemp ==1){
            $resultado = $this -> Celcius($qtdTemp);
        }
        else if($tipoTemp){
            $resultado = $this -> fahrenheit($qtdTemp);
        }
        return $msg;
    }
}

private function Celsius ($qtsTemp){
    $celsius= round ((($qtdTemp -32)*5/9),2);
    return $celcius;
    }
}
        private function Farenheit{
            $fahrenheit = round((($qtdTrmp-32)*5/9),2);
            return fahrenheit;
        }
    }

public function CalcularSalario($meses,$salario,$lucro,$perda){
            if($meses == '' ||$salario =='' || $lucro =='' || $perda == ''){
                return 0;
            } else{
                $ganhos = $meses * $salario;
                $totalucro = ($ganhos*$lucro)/ 100;
                $totalperda = ($ganhos * $perda) / 100;

                $resultado = ($ganhos + $totalucro) - $totalperda;
                return number_format($resultado,2,',',',');
            }
            }
}

