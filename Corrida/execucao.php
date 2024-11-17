<?php
 require_once("modelo/Bugatti.php");
 require_once("modelo/Camaro.php");
 require_once("modelo/Ferrari.php");
 require_once("modelo/Piloto.php");

 $camaro = new Camaro;
 $ferrari = new Ferrari;
 $bugatti = new Bugatti;
 $carros = array ();
 array_push($carros,$camaro);
 array_push($carros,$ferrari);
 array_push($carros,$bugatti);
 $piloto = new Piloto;
 $piloto->setNome(readline("Olá novo piloto, Informe seu nome: "));
 $piloto->setIdade(readline("Informe sua Idade: "));
 echo "\nVocê é um novo piloto com habilidade 1\n";
 $piloto->setHabilidade(1);
 echo "\n1-Camaro\naceleracao: ";
 imprimirNivel($camaro->getAceleracao());
 echo "\nfreio: ";
 imprimirNivel($camaro->getFreio());
 echo "\nvelocidade: ";
 imprimirNivel($camaro->getVelocidade());
 echo "\n2-Ferrari\naceleracao: ";
 imprimirNivel($ferrari->getAceleracao());
 echo "\nfreio: ";
 imprimirNivel($ferrari->getFreio());
 echo "\nvelocidade: ";
 imprimirNivel($ferrari->getVelocidade());
 echo "\n3-Bugatti\naceleracao: ";
 imprimirNivel($bugatti->getAceleracao());
 echo "\nfreio: ";
 imprimirNivel($bugatti->getFreio());
 echo "\nvelocidade: ";
 imprimirNivel($bugatti->getVelocidade());
 echo "\n";
 
 
 
 $escolherCarro=readline("Informe o numero do carro que deseja escolher: ");
switch($escolherCarro) {
    case 1:
       $piloto->setCarro($camaro);
       echo "Boa escolha";
        break;

    case 2:
        $piloto->setCarro($ferrari);
        echo "Boa escolha";
        break;

    case 3:
        $piloto->setCarro($bugatti);
        echo "Boa escolha";
        break;
    
    
}
$opcao = 1;
$pontosNivel = 0;

do {
echo "\nMenu\n";
echo"1-Correr\n";
echo"2-Melhorar Carro";
echo"0-Sair";
switch ($variable) {
    case 1:
        $disntancia = 0;
        $disntanciar = 0;
        $rival = $carros[array_rand($carros)];
        echo "\nSeu rival é um ". $rival->getNome();
        if($piloto->getCarro() instanceof Camaro ){
            echo "\nSua aceleracao é de ". $piloto->getCarro()->superAcelerar();
            $disntancia = $piloto->getCarro()->superAcelerar();
        }
        if($piloto->getCarro() instanceof Bugatti && $piloto->getCarro() instanceof Ferrari){
            echo "\nSua aceleracao é de ". $piloto->getCarro()->getAceleracao();  
            $disntancia = $piloto->getCarro()->getAceleracao();
        }   

        echo "\n Aceleracão do rival: " .$rival->getAceleracao();

        break;

    case 2:
        echo "Melhorar Carro \nPontos de melhora: ". $pontosNivel."\n";
        echo"1-Aceleração\n";
        imprimirNivel($piloto->getCarro()->getAceleracao());
        echo"2-Velocidade\n";
        imprimirNivel($piloto->getCarro()->getVelocidade());
        echo"3-Freio\n";
        imprimirNivel($piloto->getCarro()->getFreio());
        if($pontosNivel == 0){
            echo "\nVoce não tem pontos o suficiente pra melhorar seu carro";
        }
        if($pontosNivel > 0){
            $escolha = readline("\nOque deseja melhorar?: ");     
            switch ($escolha){
                case 1:
                    $piloto->getCarro()->setAceleracao($piloto->getCarro()->getAceleracao() + $pontosNivel);
                    echo "\nCarro melhorado com sucesso";
                    break;
                
                case 2:
                    $piloto->getCarro()->setVelocidade($piloto->getCarro()->getVelocidade() + $pontosNivel);
                    echo "\nCarro melhorado com sucesso";
                    break;

                case 3:
                    $piloto->getCarro()->setFreio($piloto->getCarro()->getFreio() + $pontosNivel);
                    echo "\nCarro melhorado com sucesso";
                    break; 
            }
            
            
        }
        break;

    case 0:
        exit;
        break;
                
    

}
   












} while ($opcao != 0);

function imprimirNivel($habilidade){
    
   
    for ($i=0; $i <$habilidade ; $i++) { 
       echo "■";
    }
    for (;$i < 10 ; $i++) { 
        echo"□";
    }
    echo $habilidade."/10";
}