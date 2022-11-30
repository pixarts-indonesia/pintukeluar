<?php namespace App\Controllers;
use CodeIgniter\Controller;

class SelectLanguage extends Controller
{
    public function index()
    {
        $lang = $this->request->uri->getSegment(2);
        $session = session();
        $session->remove('lang');
        $session->set('lang', $lang);
        return redirect()->to($_SERVER['HTTP_REFERER']);
    }
}