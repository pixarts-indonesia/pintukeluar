<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use App\Models\MasterLanguageModel;
use App\Models\LanguageModel;

class Contact extends Controller
{
    protected $request;
    protected $session;
    protected $models = array();
    protected $lang;
    protected $result;

    function __construct()
    {
        helper(['url', 'form']);
        $this->request = Services::request();
        $this->session = Services::session();
        if (!$this->session->start()) {
            $this->session->start();
        }
        $this->lang = $this->session->get('lang') ?? 'id';
        $this->models['master_language'] = new MasterLanguageModel;
        $this->models['language'] = new LanguageModel;
        $this->models = (object)$this->models;
        $this->result['uri'] = $this->request->uri->getSegment(1);
    }

    public function index()
    {
        $this->result['master_language'] = $this->models->master_language->getAll([
            'status' => MasterLanguageModel::STATUS_ACTIVE
        ]);
        $this->result['lang'] = $this->models->language->getAll([
            'code_language' => $this->lang
        ]);
        return view('App\Views\Contact\contactView', $this->result);
    }
}
