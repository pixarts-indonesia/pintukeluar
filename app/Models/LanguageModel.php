<?php namespace App\Models;

use CodeIgniter\Model;

class LanguageModel extends Model
{
    protected $table      = "language";
    protected $primaryKey = "id";

    protected $returnType     = array();
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'code_language',
        'index',
        'text',
        'status',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $useTimestamps = false;
    protected $createdField  = "created_at";
    protected $updatedField  = "updated_a";
    protected $deletedField  = "deleted_at";

    protected $validationRules = [];

    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getAll($where = false)
    {
        if ($where)
        {
            $model = $this->where($where)->get()->getResult();
            return (object)(array_column(json_decode(json_encode($model), true), 'text', 'index'));
        } else {
            $model = $this->get()->getResult();
            return (object)(array_column(json_decode(json_encode($model), true), 'text', 'index'));
        }
    }

    public function getOne($where = false)
    {
        if ($where)
        {
            return (object)$this->where($where)->get()->getRowArray();
        }

        return (object)$this->get()->getRowArray();
    }
}