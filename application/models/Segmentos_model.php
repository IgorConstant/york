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
}
