<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();

class Segmentos_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        /*if (!$this->session->userdata('logado') == TRUE) {

            $this->session->set_flashdata('erro_login', '<div class="alert alert-danger" role="alert">Você precisa realizar o login!</div>');
            redirect('login');
        }*/


        $this->load->model('segmentos_model');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['titulo_site'] = 'Gerenciador de Conteúdo';
        $data['titulo_pagina'] = 'Segmentos';

        $data['app_segmentos'] = $this->segmentos_model->listarSegmentos();

        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/segmentacoes/list');
        $this->load->view('dashboard/footer');
    }


    public function addsegmentos()
    {

        $this->form_validation->set_rules('nomeSegmentacao', 'Nome Segmentação', 'trim|required');
        $this->form_validation->set_rules('yoastDesc', 'Yoast Descrição', 'trim|required');
        $this->form_validation->set_rules('yoastKeywords', 'Yoast Keywords', 'trim|required');
        $this->form_validation->set_rules('descSegmentacao', 'Descrição Segmentação', 'trim|required');


        if ($this->form_validation->run() == TRUE) {

            $config['upload_path'] = './upload/galeria';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = '3048';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);


            if (!$this->upload->do_upload('imgSegmentacao')) {

                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Erro! Preencha as informações corretas.</div>');
                redirect('segmentos_admin/addsegmentos');
            
            } else {

                $inputAddSegmento['nome_segmentacao'] = $this->input->post('nomeSegmentacao');
                $inputAddSegmento['yoast_description'] = $this->input->post('yoastDesc');
                $inputAddSegmento['yoast_keywords'] = $this->input->post('yoastKeywords');
                $inputAddSegmento['desc_segmentacao'] = $this->input->post('descSegmentacao');
                $inputAddSegmento['foto_destaque'] = $this->upload->data('file_name');


                $this->segmentos_model->criarSegmento($inputAddSegmento);
                $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Segmento incluído com sucesso!</div>');
                redirect('segmentos_admin', 'refresh');
            }
        
        } else {


            //Titulo
            $data['titulo_site'] = 'Gerenciador de Conteúdo';
            $data['titulo_pagina'] = 'Adicionar Segmento';

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/segmentacoes/add');
            $this->load->view('dashboard/footer');
        }
    }
}
