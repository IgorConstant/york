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
}
