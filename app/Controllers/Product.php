<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function forex()
    {
        $data['page'] = 'forex';
        echo view('templates/header',$data);
        echo view('templates/navbar');
        echo view('product/forex');
        echo view('templates/footer');
    }

    public function commodities()
    {
        $data['page'] = 'commodities';
        echo view('templates/header',$data);
        echo view('templates/navbar');
        echo view('product/commodities');
        echo view('templates/footer');
    }
    public function indices()
    {
        $data['page'] = 'indices';
        echo view('templates/header',$data);
        echo view('templates/navbar');
        echo view('product/indices');
        echo view('templates/footer');
    }
    public function stocks()
    {
        $data['page'] = 'stocks';
        echo view('templates/header',$data);
        echo view('templates/navbar');
        echo view('product/stocks');
        echo view('templates/footer');
    }
    public function energies()
    {
        $data['page'] = 'energies';
        echo view('templates/header',$data);
        echo view('templates/navbar');
        echo view('product/energies');
        echo view('templates/footer');
    }
    public function crypto_currency()
    {
        $data['page'] = 'crypto_currency';
        echo view('templates/header',$data);
        echo view('templates/navbar');
        echo view('product/crypto_currency');
        echo view('templates/footer');
    }
}
