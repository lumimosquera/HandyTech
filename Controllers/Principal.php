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
        $id_categoria = $data['producto'] ['id_categoria'];
        $data['relacionados'] = $this->model->getAleatorios($id_categoria, $data['producto'] ['id']);
        $data['title'] = $data['producto'] ['nombre'];
        $this->views->getView('Principal', "detail", $data);
      }
       //Vista Contacto
       public function contactos()
       {
           $data['title'] = 'Contactos';
           $this->views->getView('Principal', "contactos", $data);
       }

       //Vista Categorias
      public function categorias($datos)
      {
        $id_categoria = 1;
        $page = 1;
        $array = explode(",", $datos);
        if (isset($array[0])) {
            if (!empty($array[0])) {
                $id_categoria = $array[0];
            }
        }
        if (isset($array[1])) {
            if (!empty($array[1])) {
                $page = $array[1];
            }
        }

          $pagina = (empty($page)) ? 1 : $page ;
          $porPagina = 16;
          $desde = ($pagina - 1) * $porPagina;

          $data['pagina'] = $pagina;
          $total = $this->model->getTotalProductosCat($id_categoria);
          $data['total'] = ceil($total['total'] / $porPagina);
          
          $data['productos'] = $this->model->getProductoCat($id_categoria, $desde, $porPagina);
          $data['title'] = 'categorias';
          $data['id_categoria'] = $id_categoria;
          $this->views->getView('Principal', "categorias", $data);
      }

          //Vista Lista Deseo
          public function deseo()
          {
              $data['title'] = 'Tu lista de deseo';
              $this->views->getView('Principal', "deseo", $data);
          }
}