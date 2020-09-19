<?php

namespace Source\CRUD\Models;
use Source\Database\Connect;

class UserModel extends Model
{
    /**
     * @var array $safe no create or update
     */
    protected static $safe = ["id", "endereco_id", "telefone_id"];  
    
    
}