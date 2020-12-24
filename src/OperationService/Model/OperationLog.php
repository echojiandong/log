<?php
namespace Model\OperationService;


use Illuminate\Contracts\Database\ModelIdentifier;
class OperationLog extends  ModelIdentifier
{
    protected $table = 'operation_log';
}