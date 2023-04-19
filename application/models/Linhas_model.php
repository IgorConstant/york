<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Linhas_model extends CI_Model
{

    //Listar os Segmentos
    public function listarLinhas()
    {
        return $this->db->get('app_linhas')->result();
    }

    public function criarLinha($dados = NULL)
    {
        if (is_array($dados)) {
            $this->db->insert('app_linhas', $dados);
        }
    }

    public function getlinhabyID($id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('app_linhas')->row();
        }
    }

    public function atualizarLinha($dados = NULL, $condicao = NULL)
    {
        if (is_array($dados) && is_array($condicao)) {
            $this->db->update('app_linhas', $dados, $condicao);
        }
    }

    public function deletarLinha($id = NULL)
    {
        if ($id) {
            $this->db->delete('app_linhas', ['id' => $id]);
        }
    }
}
