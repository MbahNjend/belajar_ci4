<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Barang_model;

class Barang extends Controller
{
    public function index()
    {
        $model = new Barang_model;
        $data['title']     = 'Data Barang';
        $data['getBarang'] = $model->getBarang();
        echo view('header_view', $data);
        echo view('barang_view', $data);
        echo view('footer_view', $data);
    }
}