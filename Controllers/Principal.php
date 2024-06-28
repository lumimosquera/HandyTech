<?php
class Principal extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {
       
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
      public function detail($id_producto)
      {
        $data['producto'] = $this->model->getProducto($id_producto);
          $data['title'] = $data['producto'] ['nombre'];
          $this->views->getView('Principal', "detail", $data);
      }
       //Vista Contacto
       public function contactos()
       {
           $data['title'] = 'Contactos';
           $this->views->getView('Principal', "contactos", $data);
       }
}