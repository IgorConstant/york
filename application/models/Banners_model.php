<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banners_model extends CI_Model
{
    //Listar os Banners
    public function listarBanners()
    {
        return $this->db->get('app_banners')->result();
    }


    //Adicionar Banner
    public function criarBanner($dados = NULL)
    {
        if (is_array($dados)) {
            $this->db->insert('app_banners', $dados);
        }
    }

    //Utilizar a ID do Banner para retornar um resultado
    public function getBannerID($id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('app_banners')->row();
        }
    }

    //Apagar Banners
    public function apagarBanner($id = NULL)
    {
        if ($id) {
            $this->db->delete('app_banners', ['id' => $id]);
        }
    }

    public function atualizarBanner($dados = NULL, $condicao = NULL)
    {
        if (is_array($dados) && is_array($condicao)) {
            $this->db->update('app_banners', $dados, $condicao);
        }
    }
}
