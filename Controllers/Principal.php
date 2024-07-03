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
     public function shop($page)
     {
         $pagina = (empty($page)) ? 1 : $page ;
         $porPagina = 8;
         $desde = ($pagina - 1) * $porPagina;
         $data['title'] = 'Productos';
         $data['productos'] = $this->model->getProductos($desde, $porPagina);
         $data['pagina'] = $pagina;
         $total = $this->model->getTotalProductos();
         $data['total'] = ceil($total['total'] / $porPagina);
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