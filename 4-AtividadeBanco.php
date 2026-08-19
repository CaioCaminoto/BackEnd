<?php
declare(strict_types=1);

//Aqui definimos qual o nivel do cliente 
$cliente = 'A';
//Aqui também definimos a divida do cliente, no caso A 
$divida = 1000.00;

//Criamos e definimos a variável $taxa e dos clientes com suas respectivas porcentagens
$taxa = match($cliente){
    "A" => 0.01,
    "B" => 0.02,
    "C" => 0.03,
    default => 0.05
};

//Imprimimos o tipo de cliente, o juros a divida para ficar mais estético e mais explicativo

    echo "Cliente: $cliente <br>";
    //Aqui fazemos o juros vezes 100 para dra a porcentagem em números inteiros
    echo "Taxa de Juros: ". ($taxa * 100) ."% <br>";
    echo " Divida: $divida <br>";
    echo "<br>";

//Aqui fazemos a simulação dos juros usando o laço de repetição for, usamos a estrutur for:  (Início; Condição; Incremento).
for ($mes=1; $mes<=12; $mes++){

    if ($mes === 6){
        //Aqui fazemos oque foi pedidio de deixa o mês 6 sem juros, utilizamos o continue para ignorar a variavél 6 do $mes 
        echo "Mês: 6 -tem isensão de juros, a dívida não aumentará!<br> <br>";
        continue;
    }

    //Descobrimos os juros por mês faznedo a taxa vezes a divida
    $jurosMes = $taxa * $divida; 

    //Aqui somamos a divida e o juros para descobrir o total
    $divida = $divida + $jurosMes;

    $jurosFormatado = number_format($jurosMes, 2, ',', '.');
    $dividaFormatada = number_format($divida, 2, ',', '.'); 

    //Como usamos o for que vai imprimir 12 vezes ele vai mostrar o valor atualizado 12x por mês mostrando até a excessão do mês 6
    echo 
    "Mês: $mes / Juros: $jurosFormatado reais / Divida: $dividaFormatada reais. <br>";
    echo "<br>";

};


