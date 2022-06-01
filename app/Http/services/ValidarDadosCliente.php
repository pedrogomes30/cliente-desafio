<?php

use Illuminate\Http\Request;

class ValidarDadosCliente 
{
    public function index(Request $request)
    {
        self::ValidacaoPorRequest($request);
        self::ValidacaoCpf($request);
    }
    public function ValidacaoPorRequest()
    {

    }
    public function ValidacaoCpf()
    {

    }


}