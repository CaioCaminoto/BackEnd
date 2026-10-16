<?php
declare(strict_types=1);

use DomainException; //impor da biblioteca do PHP de erros chamado DomainException

//Classe base para erros das regras de negócio
class ContaException extends DomainException {
    //declaração do construtor usando property promotion
    #[Override]
    public function __construct(string $message = "")
    {
        parent::__construct($message);
    }
}