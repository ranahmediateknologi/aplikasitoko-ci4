<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Testing extends Controller
{
    public function index()
    {
        echo view('templates/header.php');
        echo view('toko/content.php');
        echo view('templates/footer.php');
    }

    public function view()
    {
    	echo "string";
    }
}