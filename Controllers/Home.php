<?php
class Home extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        $data['title'] = 'Inicio';
        $this->views->getView('home', "index", $data);
    }
    //Vista about
    public function about()
    {
        $data['title'] = 'Acerca de';
        $this->views->getView('Principal', "about", $data);
    }
     //Vista Tienda
     public function shop()
     {
         $data['title'] = 'Productos';
         $this->views->getView('Principal', "shop", $data);
     }
      //Vista detalle producto
      public function detail($is_producto)
      {
          $data['title'] = '---';
          $this->views->getView('Principal', "detail", $data);
      }
       //Vista Contacto
       public function contactos()
       {
           $data['title'] = 'Contactos';
           $this->views->getView('Principal', "contact", $data);
       }
}