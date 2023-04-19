<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();

class Linhas_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        /*if (!$this->session->userdata('logado') == TRUE) {

            $this->session->set_flashdata('erro_login', '<div class="alert alert-danger" role="alert">Você precisa realizar o login!</div>');
            redirect('login');
        }*/


        $this->load->model('linhas_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['titulo_site'] = 'Gerenciador de Conteúdo';
        $data['titulo_pagina'] = 'Linha de Produtos';

        $data['app_linhas'] = $this->linhas_model->listarLinhas();

        $this->load->view('dashboard/header', $data);
        $this->load->view('dashboard/linhas/list');
        $this->load->view('dashboard/footer');
    }


    public function addlinhas()
    {

        $this->form_validation->set_rules('nomeLinhas', 'Nome Linha', 'trim|required');
        $this->form_validation->set_rules('descLinha', 'Descrição Linha', 'trim|required');
        $this->form_validation->set_rules('tagsLinha', 'Tags Linha', 'trim|required');


        if ($this->form_validation->run() == TRUE) {

            $config['upload_path'] = './upload/docs';
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size'] = '100048';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('arqLinhas')) {

                $this->session->set_flashdata('msg', '<div class="alert alert-danger">Erro! Preencha as informações corretas.</div>');
                redirect('linhas_admin/addlinhas');
            } else {

                $inputAddLinhas['nome_linha'] = $this->input->post('nomeLinhas');
                $inputAddLinhas['desc_linha'] = $this->input->post('descLinha');
                $inputAddLinhas['tags'] = $this->input->post('tagsLinha');
                $inputAddLinhas['arquivo_download'] = $this->upload->data('file_name');


                $this->linhas_model->criarLinha($inputAddLinhas);
                $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Linha incluída com sucesso!</div>');
                redirect('linhas_admin', 'refresh');
            }
        } else {

            //Titulo
            $data['titulo_site'] = 'Gerenciador de Conteúdo';
            $data['titulo_pagina'] = 'Adicionar Linhas';

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/linhas/add');
            $this->load->view('dashboard/footer');
        }
    }


    public function editarlinha($id = NULL)
    {
        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Selecione uma linha para editar</div>');
            redirect('linhas_admin', 'refresh');
        }

        $query = $this->linhas_model->getlinhabyID($id);

        $this->form_validation->set_rules('nomeLinhas', 'Nome Linha', 'trim|required');
        $this->form_validation->set_rules('descLinha', 'Descrição Linha', 'trim|required');
        $this->form_validation->set_rules('tagsLinha', 'Tags Linha', 'trim|required');


        if ($this->form_validation->run() == TRUE) {

            $tituloArq = NULL;

            //Upload Imagem
            $config['upload_path'] = './upload/docs';
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size'] = '100048';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('arqLinhas')) {
                $tituloArq = $this->upload->data('file_name');
            }

            $inputEditLinhas['nome_linha'] = $this->input->post('nomeLinhas');
            $inputEditLinhas['desc_linha'] = $this->input->post('descLinha');
            $inputEditLinhas['tags'] = $this->input->post('tagsLinha');

            if ($tituloArq) {
                $inputEditSegmento['arquivo_download'] = $tituloArq;
            }

            $this->linhas_model->atualizarLinha($inputEditLinhas, ['id' => $this->input->post('idLinha')]);
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Linha atualizada com sucesso!</div>');
            redirect('linhas_admin', 'refresh');


        } else {

            $data['titulo_pagina'] = 'Editar Segmento';
            $data['query'] = $query;

            //Load dos arquivos de layout
            $this->load->view('dashboard/header', $data);
            $this->load->view('dashboard/linhas/edit');
            $this->load->view('dashboard/footer');
        }
    }

    public function deletarlinha($id = NULL)
    {

        if (!$id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Selecione uma linha para deletar</div>');
            redirect('linhas_admin', 'refresh');
        }

        $query = $this->linhas_model->getlinhabyID($id);

        if (!$query) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">Erro! Linha não encontrada</div>');
            redirect('linhas_admin', 'refresh');
        }

        $this->linhas_model->deletarLinha($id);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">Linha deletada com sucesso!</div>');
        redirect('linhas_admin', 'refresh');
    }
}
