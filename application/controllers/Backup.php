<?php
defined('BASEPATH') or exit('No direct script access allowed');
ob_start();
class Backup extends CI_Controller
{


    public function gerarsql()
    {
        $this->load->dbutil();
        $prefs = array(
            'format' => 'zip',
            'filename' => 'backup_' . date('d-m-Y') . '.sql'
        );


        $backup = $this->dbutil->backup($prefs);

        $this->load->helper('file');
        write_file('backup/york.zip', $backup);

        $this->load->helper('download');
        force_download('york.zip', $backup);
    }
}
