<?php

require __DIR__ . '/vendor/autoload.php';

use App\Exceptions\RequestException;
use App\Exceptions\NumberException;


/**
 * O tratamento de erros refere-se aos procedimentos de resposta e
 * recuperação de condições de erro presentes em um aplicativo de software.
 * Em outras palavras, é o processo composto de antecipação, detecção e resolução
 * de erros de aplicação, de programação ou de comunicação.
 * Tratar exceções pré-definidas
 * Uso de 'try' e 'catch'
 * Criar exceções específicas
 * Aprender sobre error handlers
 * Fazer o processo de Debug
 *
 * @throws Exception
 */

function validarValor($numero)
{
    if ($numero > 10) {
        throw new \Exception("O numero deve ser menor do que 10", 3);
    }
}

try {

    // verificar existência do número.
    if (!isset($_GET['numero'])) {
        throw new \Exception("O numero não foi definido", 1);
    }

    // verifica o tipo.
    if (!is_numeric($_GET['numero'])) {
        throw new \Exception("Não e numero", 2);
    }

    // verifica o valor enviado do numero.
    validarValor($_GET['numero']);

    echo 'Sucesso';

} catch (\Exception $e) {
    echo "<pre>NumberException ";
    print_r($e->getMessage());
    echo "-";
    print_r($e->getCode());
    echo "</pre>";
}