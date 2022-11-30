<?php namespace App\Models;

use CodeIgniter\Model;

class MasterLanguageModel extends Model
{
    protected $table      = "master_language";
    protected $primaryKey = "id";

    protected $returnType     = array();
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'code_language',
        'name_language',
        'img',
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

    const STATUS_ACTIVE = 10;
    const STATUS_NON_ACTIVE = 0;

    public function getAll($where = false)
    {
        if ($where)
        {
            return $this->where($where)->get()->getResult();
        }
        
        return $this->get()->getResult();
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