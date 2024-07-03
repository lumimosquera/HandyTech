<?php
class PrincipalModel extends Query{
 
    public function __construct()
    {
        parent::__construct();
    }
    public function getProducto($id_producto)
    { 
       $sql =" SELECT p. *, c.categoria FROM productos  p INNER JOIN categorias c ON p.id_categoria = c.id WHERE p.id = $id_producto";
       return $this->select($sql);
    }

     // Paginacion
    public function getProductos($desde, $porPagina)
    {
        $sql = "SELECT * FROM productos LIMIT $desde, $porPagina";
        return $this->selectAll($sql);
    }

    // Obtener total de productos
    public function getTotalProductos()
    {
        $sql = "SELECT COUNT(*) AS total FROM productos";
        return $this->select($sql);
    }

    // Productos relacionados con su categoria

    public function getProductoCat($id_categoria, $desde, $porPagina)
     {
        $sql =" SELECT * FROM productos  WHERE id_categoria = $id_categoria LIMIT $desde, $porPagina";
       return $this->selectAll($sql);
     }


      // Obtener total de productos relacionados con su categoria
     public function getTotalProductosCat($id_categoria)
    {
        $sql = "SELECT COUNT(*) AS total FROM productos  WHERE id_categoria = $id_categoria ";
        return $this->select($sql);
    }



}
 
?>