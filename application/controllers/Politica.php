<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();

class Politica extends CI_Controller
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
        $this->load->model('politica_model');

        //Load Form_validation
        $this->load->library('form_validation');
    }

    //Função Inicial do Controller
    public function index()
    {
        $this->editarpolitica();
    }

    public function editarpolitica($id = 1)
    {


        $query = $this->politica_model->getPoliticaID($id);
        $this->form_validation->set_rules('tituloPolitica', 'Título Conteúdo', 'trim|required');
        $this->form_validation->set_rules('conteudoPolitica', 'Texto Conteúdo', 'trim|required');

        if ($this->form_validation->run() == TRUE) {


            $inputEditarPolitica['conteudo_politica'] = $this->input->post('conteudoPolitica');
            $inputEditarPolitica['titulo_politica'] = $this->input->post('tituloPolitica');

            $this->politica_model->atualizarPolitica($inputEditarPolitica, ['id' => $this->input->post('idPolitica')]);
            redirect('politica', 'refresh');
        } else {
            $data['titulo_pagina'] = 'Politica de Privacidade';
            $data['query'] = $query;

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/politica/view');
            $this->load->view('dashboard/footer');
        }
    }
}
