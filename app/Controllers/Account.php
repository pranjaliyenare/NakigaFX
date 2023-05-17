<?php

namespace App\Controllers;

class Account extends BaseController
{
    public function comp_acc()
    {
        $data['page'] = 'comp_acc';
        echo view('templates/header',$data);
        echo view('templates/navbar');
        echo view('account/comp_acc');
        echo view('templates/footer');
    }

    public function fund_withd()
    {
        $data['page'] = 'fund_withd';
        echo view('templates/header',$data);
        echo view('templates/navbar');
        echo view('account/fund_withd');
        echo view('templates/footer');
    }

}
