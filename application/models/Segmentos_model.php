<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Segmentos_model extends CI_Model
{

    //Listar os Segmentos
    public function listarSegmentos()
    {
        return $this->db->get('app_segmentacoes')->result();
    }


    //Adicionar Banner
    public function criarSegmento($dados = NULL)
    {
        if (is_array($dados)) {
            $this->db->insert('app_segmentacoes', $dados);
        }
    }

    public function getsegmentobyID($id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('app_segmentacoes')->row();
        }
    }

    public function atualizarSegmento($dados = NULL, $condicao = NULL)
    {
        if (is_array($dados) && is_array($condicao)) {
            $this->db->update('app_segmentacoes', $dados, $condicao);
        }
    }

    public function deletarSegmento($id = NULL)
    {
        if ($id) {
            $this->db->delete('app_segmentacoes', ['id' => $id]);
        }
    }
}
