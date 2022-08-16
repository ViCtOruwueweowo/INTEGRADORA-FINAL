<?php
namespace MyApp\Query;
use PDO;
use PDOException;
use MyApp\Data\Database;

class Ejecuta
{
    public function ejecutar($qry)
    {
        try
        {
            $cc = new Database("tbc","root","admin");
            $objetoPDO= $cc->getPDO();
            $resultado = $objetoPDO->query($qry);
            
            $cc->desconectarDB();
            
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}