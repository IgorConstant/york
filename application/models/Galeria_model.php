<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeria_model extends CI_Model
{

    // Função para editar as galerias.
    public function getGallerybyProject($id = NULL)
    {
        if ($id) {
            $this->db->where('id', $id);
            $this->db->limit(1);
            return $this->db->get('app_galeria')->row();
        }
    }


    // Lista todas as imagens dentro da query que está no controller Site.
    function listarImagensProjeto($id = NULL)
    {
        $this->db->where('id_app_projects', $id);
        return $this->db->get('app_galeria')->result();
    }


    // Insert de imagens múltiplas, no controller Galeria
    public function multipleImages($image = array())
    {
        return $this->db->insert_batch('app_galeria', $image);
    }


    public function listarGalerias()
    {
        return $this->db->get('app_galeria')->result();
        $this->db->limit(1);
    }


    public function deletarGaleria($id = NULL)
    {
        if ($id) {
            $this->db->delete('app_galeria', ['id' => $id]);
        }
    }
}
