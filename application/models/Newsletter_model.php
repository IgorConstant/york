<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Newsletter_model extends CI_Model
{
    //Listar os Banners
    public function listarEmails()
    {
        return $this->db->get('app_newsletter')->result();
    }

    public function gerarPlanilhaNewslleterv1()
    {
        $this->db->select('*');
        $this->db->from('app_newsletter');
        $query = $this->db->get();
        return $query->result();
    }
}
