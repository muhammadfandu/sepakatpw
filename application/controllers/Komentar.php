<?php

Class Komentar extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Model_komentar');
        // $this->load->helper('database');
    }

    function add(){
        $data = array(
            'id_user'   => $_SESSION['id_user'],
            'id_post'   => $this->input->post('id_post'),
            'komentar'  => $this->input->post('komentar'),
            'time'      => date('Y-m-d H:i:s')
        );

        // print_r($data);
        // die;
        $this->Model_komentar->insert($data);

        if($_SESSION['tipe_user'] == 'Manufaktur'){
            redirect(base_url('feed/detail_perusahaan/'.$this->input->post('id_post')));
        }else{
            redirect(base_url('feed/detail_bahan_baku/'.$this->input->post('id_post')));            
        }

    }
}

?>
