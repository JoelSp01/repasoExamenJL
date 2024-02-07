<?php
namespace App\Models;

use CodeIgniter\Model;

class modeloExamen extends Model
{
    //constructor para conectar a la base de datos
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    //funcion listar datos
    public function listarDatos()
    {
        $datos = $this->db->query("SELECT prod.PROD_ID,prov.PROV_NOMBRE,cat.CAT_NOMBRE, prod.PROD_NOMBRE FROM tbl_productos as prod INNER JOIN tbl_proveedor as prov on prod.PROV_ID = prov.PROV_ID inner JOIN tbl_categorias as cat on prod.CAT_ID = cat.CAT_ID");
        return $datos->getResultArray();
    }

    //funcion eliminar producto
    public function eliminarProducto($id)
    {
        $this->db->query("DELETE FROM tbl_productos WHERE PROD_ID = $id");
    }

    //funcion actualizar datos
    public function actualizarDatos($id, $nombre)
    {
        $this->db->query("UPDATE tbl_productos SET PROV_ID = '$nombre' WHERE PROD_ID = $id");
    }

    //funcion insertar datos
    public function insertarDatos($data)
    {
        $this->db->table('tbl_productos')->insert($data);
    }
}