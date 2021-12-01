<?php

class TipoModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getTipos()
    {
        $reg = $this->_db->query("SELECT id, nombre FROM servicio_tipos ORDER BY nombre");

        return $reg->fetchall();
    }

    public function getTipoId($id)
    {
        $reg = $this->_db->prepare("SELECT id, nombre FROM servicio_tipos WHERE id = ?");
        $reg->bindParam(1, $id);
        $reg->execute();

        return $reg->fetch();
    }

    public function getTipoNombre($nombre)
    {
        $reg = $this->_db->prepare("SELECT id FROM servicio_tipos WHERE nombre = ?");
        $reg->bindParam(1, $nombre);
        $reg->execute();

        return $reg->fetch();
    }

    public function addTipo($nombre)
    {
        $reg = $this->_db->prepare("INSERT INTO servicio_tipos(nombre) VALUES(?)");
        $reg->bindParam(1, $nombre);
        $reg->execute();

        $row = $reg->rowCount();

        return $row;
    }

    public function editTipo($id, $nombre)
    {
        $reg = $this->_db->prepare("UPDATE servicio_tipos SET nombre = ? WHERE id = ?");
        $reg->bindParam(1, $nombre);
        $reg->bindParam(2, $id);
        $reg->execute();

        $row = $reg->rowCount();

        return $row;
    }

    public function deleteTipo($id)
    {
        $reg = $this->_db->prepare("DELETE FROM servicio_tipos WHERE id = ?");
        $reg->bindParam(1, $id);
        $reg->execute();

        $row = $reg->rowCount();

        return $row;
    }
}
