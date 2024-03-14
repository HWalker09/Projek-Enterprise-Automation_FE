<?php

namespace App\Controllers;

class Webview extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "index"
        ];
        return view('index', $data);
    }
    public function data_pesanan()
    {
        $data = [
            "title" => "data_pesanan"
        ];
        return view('data_pemesan', $data);
    }
    public function pengecoran_logam()
    {
        $data = [
            "title" => "pengecoran_logam"
        ];
        return view('pengecoran_logam', $data);
    }
    public function pengujian_material()
    {
        $data = [
            "title" => "pengujian_material"
        ];
        return view('pengujian_material', $data);
    }
    public function form_peleburan()
    {
        $data = [
            "title" => "form_peleburan"
        ];
        return view('form_peleburan', $data);
    }
    public function form_qc()
    {
        $data = [
            "title" => "form_qc"
        ];
        return view('form_qc', $data);
    }
    public function order_logistik()
    {
        $data = [
            "title" => "order_logistik"
        ];
        return view('order_logistik', $data);
    }
    public function project_selesai()
    {
        $data = [
            "title" => "project_selesai"
        ];
        return view('project_selesai', $data);
    }
    public function data_benda()
    {
        $data = [
            "title" => "data_benda"
        ];
        return view('data_benda', $data);
    }
    public function data_bahan()
    {
        $data = [
            "title" => "data_bahan"
        ];
        return view('data_bahan', $data);
    }
}
