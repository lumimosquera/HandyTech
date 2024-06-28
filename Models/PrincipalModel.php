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

}
 
?>