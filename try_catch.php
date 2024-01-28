<?php


/**
O tratamento de erros refere-se aos procedimentos de resposta e
recuperação de condições de erro presentes em um aplicativo de software.
Em outras palavras, é o processo composto de antecipação, detecção e resolução
de erros de aplicação, de programação ou de comunicação.
Tratar exceções pré-definidas
Uso de 'try' e 'catch'
Criar exceções específicas
Aprender sobre error handlers
Fazer o processo de Debug
 */

try {

    // verificar existência do número.
    if(!isset($_GET['numero'])) {
        throw new \Exception("O numero não foi definido", 1);
    }

    // verifica o tipo.
    if(!is_numeric($_GET['numero'])) {
        throw new \Exception("Não e numero", 2);
    }

    echo 'Sucesso';

} catch (\Exception $e) {
    echo "<pre>";
    print_r($e->getMessage());
    echo "-";
    print_r($e->getCode());
    echo "</pre>"; exit;
}