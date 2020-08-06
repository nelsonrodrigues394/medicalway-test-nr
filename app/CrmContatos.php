<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrmContatos extends Model
{
    const CREATED_AT = 'data';
    const UPDATED_AT = 'ultima_atualizacao';

    protected $table="tbl_crm_contatos";

    protected $primaryKey = 'id';

    protected $attributes = [
        'nome', 'estado', 'cidade', 'email', 'status', 'invalid'
    ];
}
