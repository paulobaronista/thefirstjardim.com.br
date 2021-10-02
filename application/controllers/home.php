<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'The First Jardim';
        $data['description'] = 'Uma tendência. Um ícone. O seu lugar';
        $data['keywords'] = 'breve lancamento jardim, apartamento santo andre, apartamento bairro jardim, bcanton, luxo santo andre';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');

    }
    public function politicadeprivacidade() {
        $data['title'] = 'The First Jardim';
        $data['description'] = 'Uma tendência. Um ícone. O seu lugar';
        $data['keywords'] = 'breve lancamento jardim, apartamento santo andre, apartamento bairro jardim, bcanton, luxo santo andre';
        $menu['politicadeprivacidade'] = 'active';
        $conteudo['pagina_view'] = 'politicadeprivacidade_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

}

/* Location: ./application/controllers/home.php */
