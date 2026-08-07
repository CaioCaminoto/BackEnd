<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo de Variáveis</title>
</head>
<body>
    <h1>Estudo de Variáveis</h1>
    <hr>
    <?php 
    // para criar variáveis em php bata usar o sinal de $
    // variáveis em php são NÃO tipadas, NÃO precisa declarar o tipo (Texto, numeros, booleanas)
    // ao atribuir valor para a variável a tipagem é automática
    $nome = "João"; // criação da variavel nome com o valor textual "João"
    $idade = 25; // criação da variável idade com o valor numérico 25
    $ativo = true; // criação da variável ativo com o valor booleano true
    $salario = 1520.68; // variavel numérica - decimal
    $status =  null; // variavel null 
    //$endereço = //Variável Undefined, não é possivel declarar uma variavel sem atribuir um valor a ela, não existe Undefined em PHP.

    // Dicas para Criação de Variáveis: ./
    // Não incie o nome de uma variavel com numeros
    // Não utilize espaços em branco
    // Não utilize caracteres especiais, somente o underline
    // Crie variáveis com nomes que ajudarão a identificar melhor a mesma
    // Evite utilizar letras maiúsculas.

    echo "Nome: $nome <br>";
    echo "Idade: $idade <br>";
    echo "Ativo: $ativo <br>";
    echo "Salário $salario <br>";
    echo "Status $status <br>";

    echo "<br><h3> Constantes </h3><br>";
    //Constantes são representadas pela palavra "const" ou "define" seguidas do nome da constante 
    //Exemplos de constantes:
    
    const PI = 3,14; //Constante do tipo number (float)
    const EMPRESA = "Google"; //Constante do tipo string
    define("SITE", "www.google.com"); //Declaração de Constante do tipo string usando "define"

    //Uma boa prática é utilizar letras maiscúlas para nomear constantes e minusculas as variáveis 

    //Exibir as constantes na tela:
    echo "Valor de PI: " . PI . "<br>";
    echo "Nome da Empresa: " . EMPRESA . "<br>";
    echo "Site: " . SITE ."<br>";

    // tentar alterar o valor de uma constante, isso irá gerar um erro de código, pois constantes não podem ser alteradas:
    // PI = 3.14159; // isso é um erro

    // redeclarar uma constante também irá gerar um erro:
    // const SITE = "www.google.com.br"; //Isso é um Erro


    //Tentar 
    

    ?>

    
</body>
</html>