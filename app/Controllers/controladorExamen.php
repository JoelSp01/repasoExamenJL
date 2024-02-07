<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\modeloExamen;
class controladorExamen extends BaseController
{
    public function index()
    {
        $db = new modeloExamen(); //conexion con bdd
        $datos = $db->listarDatos(); //
        $data = [
            "datos" => $datos
        ]; 

        return view('index', $data);
    }

    public function eliminarProducto($id)
    {
        $db = new modeloExamen();
        $db->eliminarProducto($id);
        return redirect()->to(base_url()); 
    }

    public function actualizarDatos()
    {
        $id = $_POST['editId'];
        $nombre = $_POST['editNombre'];
        $db = new modeloExamen();
        $db->actualizarDatos($id, $nombre);
        return redirect()->to(base_url());
    }

    public function insertarDatos(){
        $data = [
            "PROD_NOMBRE" => $_POST['insertNombre'],
            "PROD_CODIGO" => $_POST['insertCodigo'],
            "CAT_ID" => $_POST['insertCategoria'],
            "PROV_ID" => $_POST['insertProveedor'],
            "PROD_ESTADO" => $_POST['insertEstado']
        ];

        $db = new modeloExamen();
        $db->insertarDatos($data);

        return redirect()->to(base_url());
    }

}