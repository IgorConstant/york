<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Newsletter_admin extends CI_Controller
{

    //Construtor
    public function __construct()
    {

        parent::__construct();

        //Load do Model
        $this->load->model('newsletter_model');

        //Load Form_validation
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->listaremails();
    }

    public function listaremails()
    {
        //Titulo
        $data['titulo_site'] = 'Gerenciador de Conteúdo';
        $data['titulo_pagina'] = 'Cadastro Newsletter';
        $data['emailsNewsletter'] = $this->newsletter_model->listarEmails();

        //Load dos arquivos de layout
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/newsletter/list');
        $this->load->view('dashboard/footer');
    }


    public function cadastraremail()
    {
        
        
    }


    public function exportarplanilha()
    {

        //Farfetch'Data
        $gerarPlanilhaNews = $this->newsletter_model->gerarPlanilhaNewslleterv1();

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="exportacao-newsletter.xlsx"');
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'E-mail Cadastrado');

        $sn = 2;

        foreach ($gerarPlanilhaNews as $planNews) {
            $sheet->setCellValue('A' . $sn, $planNews->id);
            $sheet->setCellValue('B' . $sn, $planNews->email_cadastro);
            $sn++;
        }


        $writer = new Xlsx($spreadsheet);
        $writer->save("./backup/exportacao-newsletter.xlsx");
    }
}
