<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Usuario extends Entity
{

    protected $dates   = [
        'criado_em',
        'atualizadp_em',
        'deletado_em',
    ];

}
