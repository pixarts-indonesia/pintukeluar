<?php namespace App\Models;

use CodeIgniter\Model;

class AboutModel extends Model
{
    protected $table      = "about";
    protected $primaryKey = "id";

    protected $returnType     = array();
    protected $useSoftDeletes = true;

    protected $allowedFields = [
        'code_language',
        'index',
        'title',
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
        $query = $this->select('*');
        if ($where) {
            $query->where($where);
        }
        return $query->get()->getResult();
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