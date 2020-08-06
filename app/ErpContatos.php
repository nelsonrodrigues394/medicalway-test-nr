<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ErpContatos extends Model
{
    const CREATED_AT = 'data';
    const UPDATED_AT = 'ultima_atualizacao';

    protected $table="tbl_erp_contatos";

    protected $primaryKey = 'id';

    protected $attributes = [
        'nome', 'estado', 'cidade', 'email', 'status', 'invalid'
    ];
    
}
