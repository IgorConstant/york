<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Politica_model extends CI_Model
{
    //Listar os Logos Cadastrados
    public function listarPolitica()
    {
        return $this->db->get('app_politica')->result();
    }


    public function criarPolitica($dados = NULL)
    {
        if (is_array($dados)) {
            $this->db->insert('app_politica', $dados);
        }
    }

    public function getPoliticaID($id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('app_politica')->row();
        }
    }

    public function atualizarPolitica($dados = NULL, $condicao = NULL)
    {
        if (is_array($dados) && is_array($condicao)) {
            $this->db->update('app_politica', $dados, $condicao);
        }
    }
}
