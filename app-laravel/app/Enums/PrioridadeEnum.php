<?php 

namespace App\Enums;

enum PrioridadeEnum:string {
    case URGENTE = 'urgente';
    case ALTA = 'alta';
    case MEDIO = 'medio';
    case NORMAL = 'normal';

}

?>