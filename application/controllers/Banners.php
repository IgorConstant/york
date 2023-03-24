<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();

class Banners extends CI_Controller
{

    //Construtor
    public function __construct()
    {

        parent::__construct();

        /*if (!$this->session->userdata('logado') == TRUE) {

            $this->session->set_flashdata('erro_login', '<div class="alert alert-danger" role="alert">Você precisa realizar o login!</div>');
            redirect('login');
        }*/

        //Load do Model
        $this->load->model('banners_model');

        //Load Form_validation
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->listarbanners();
    }


    // Listagem dos Banners
    public function listarbanners()
    {

        //Titulo
        $data['titulo_site'] = 'Gerenciador';
        $data['titulo_pagina'] = 'Banners Home';
        $data['app_banners'] = $this->banners_model->listarBanners();


        //Load dos arquivos de layout
        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/banners/list');
        $this->load->view('dashboard/footer');
    }


    // Adicionar Banner
    public function addbanners()
    {

        $this->form_validation->set_rules('tituloBanner', 'Titulo Banner', 'trim|required');
        $this->form_validation->set_rules('linkBanner', 'Link Banner', 'trim|required');


        if ($this->form_validation->run() == TRUE) {

            $config['upload_path'] = './upload/banners';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = '3048';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('bannerHome')) {

                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Erro! Insira o Banner em um formato correto.</div>');
                redirect('banners/addbanners');
            } else {

                $inputAdicionarBanner['titulo_banner'] = $this->input->post('tituloBanner');
                $inputAdicionarBanner['link_banner'] = $this->input->post('linkBanner');
                $inputAdicionarBanner['imagem'] = $this->upload->data('file_name');


                $this->banners_model->criarBanner($inputAdicionarBanner);
                $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Banner Adicionado com Sucesso!</div>');
                redirect('banners', 'refresh');
            }
        } else {

            //Titulo
            $data['titulo_site'] = 'Módulo Home';
            $data['titulo_pagina'] = 'Adicionar Banner';

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/banners/add');
            $this->load->view('dashboard/footer');
        }
    }


    // Deletar Banner

    public function deletarbanners($id = NULL)
    {

        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Você deve selecionar um Banner</div>');
            redirect('banners', 'refresh');
        }

        $query = $this->banners_model->getBannerID($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Banner não encontrado</div>');
        }

        $this->banners_model->apagarBanner($query->id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Banner Apagado com Sucesso!</div>');
        redirect('banners', 'refresh');
    }
}
