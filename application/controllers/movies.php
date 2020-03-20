<?php

class Main extends MY_Controller{

    public function __constract(){
        parent::__constract();
        $this->load->model('Films_model');
    }

    public function index(){
        if(!$this->dx_auth->is_admin()){
            show_404();
        }
        $this->data['title'] = "Все фильмы/сериалы";
        $this->data['movies'] = $this->Films_model->getMovies();
        $this->data['serials'] = $this->Films_model->getSerials();

        $this->load->view('templates/header',$this->data);
        $this->load->view('movies/index',$this->data);
        $this->load->view('templates/footer');
    }


    public function view($slug= NULL){
        $movie_slug= $this->Films_model->getFilms($slug,false,false);

        if(empty($movie_slug)){
            show_404();
        }
        $this->load->model('Comments_model');
        $this->data['comments'] = $this->Commetns_model->getComments($movie_slug['id'],100);

        $this->data['id'] = $movie_slug['id'];
        $this->data['slug'] = $movie_slug['slug'];
        $this->data['title'] = $movie_slug['title'];
        $this->data['player_code'] = $movie_slug['player_code'];
        $this->data['year'] = $movie_slug['year'];
        $this->data['rating'] = $movie_slug['rating'];
        $this->data['descriptions_movie'] = $movie_slug['descriptions_movie'];
        $this->data['director'] = $movie_slug['director'];
        $this->data['category'] = $movie_slug['category_id'];

        $this->load->view('templates/header',$this->data);
        $this->load->view('templates/view',$this->data);
        $this->load->view('templates/footer');



        
    }
}