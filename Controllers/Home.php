<?php

    class Home extends Controllers
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function home ()
        {
            $data['page_id'] = 1;
            $data['tag_page'] = "Home";
            $data['page_title'] = "Página principal";
            $data['page_name'] = "home";
            $data['page_content'] = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere, tempora quae. Explicabo, cupiditate numquam. Possimus iusto quos, minima asperiores, illo quam corporis sequi perspiciatis ipsum, aperiam soluta voluptate sint minus.";
            $this->views->getView($this, "home", $data);
        }

        public function insertar()
        {
            $data = $this->model->setUser("Fernando", 25);
            $data = $this->model->setUser("Alex", 15);
            print_r($data);
        }
        public function verusuario($id)
        {
            $data = $this->model->getUser($id);
            print_r($data);
        }
        public function actualizar()
        {
            $data = $this->model->updateUser(1,"Roberto",20);
            print_r($data);
        }
        public function verusuarios()
        {
            $data = $this->model->getUsers();
            print_r($data);
        }
        public function eliminarUsuario($id)
        {
            $data = $this->model->delUser($id);
            print_r($data);
        }
    }
?>