<?php namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model

{
    protected $table            = 'cliente';
    protected $primaryKey       = 'id';

    protected $returnType       = 'array';
    protected $allowedFields    = ['nombre', 'apellido', 'telefono', 'correo'] ;

    protected $useTimestamps    = true;
    protected $createdFile      = 'created_at';
    protected $updatedFile      = 'updated_at';

    protected $validationRules  = 
    [
        'nombre'         => 'required|alpha_space|min_length[3]|max_length[75]',
        'apellido'       => 'required|alpha_space|min_length[3]|max_length[75]',
        'telefono'       => 'required|alpha_space|min_length[10]|max_length[10]',
        'correo'         => 'permit_empty|valid_email|max_length[85]',
    ];

    protected $validationMessages= 
    [
        'correo'        => 
                [
                    'valid_email'   => "Estimado usuario, debe usar un email válido"
                ]
    ];

    protected $skipValidation = false;
}