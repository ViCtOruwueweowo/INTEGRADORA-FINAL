<?php
namespace MyApp\Query;
use PDO;
use PDOException;
use MyApp\Data\Database;

class Loginscrip
{
    public function verificaLoginscrip($telefono,$fecha)
    {
        try
        {
            $pase = 0;
            $cc = new Database("tbc","root","admin");
            $objetoPDO = $cc->getPDO();
         
            $query ="SELECT * FROM usuario WHERE CORREO='$user'";
            $consulta = $objetoPDO->query($query);
          
            while($renglon=$consulta->fetch(PDO::FETCH_ASSOC))
            {
                if(password_verify($password,$renglon['CONTRASEÑA']))
                {
                    $pase=1;
                }
                $tip=$renglon['NIVEL_USUARIO'];
            }
            if($pase>0 && $tip==3)
            {
               
                session_start();
                $_SESSION["CORREO"]=$user;
                echo "<div class='alert alert-success'>";
                echo "<h2 align='center'>Bienvenido ".$_SESSION["CORREO"]."</h2>";
                echo "</div>";
                header("refresh:3 ../views/administrador/index_admin.php");   
            }
            else
            if($pase>0 && $tip==2)
            {
               
                session_start();
                $_SESSION["CORREO"]=$user;
                echo "<div class='alert alert-success'>";
                echo "<h2 align='center'>Bienvenido ".$_SESSION["CORREO"]."</h2>";
                echo "</div>";
                header("refresh:3 ../views/empleado/index_emp.php");   
            }
            else
             if($pase>0 && $tip==1)
                {
               
                session_start();
                $_SESSION["CORREO"]=$user;
                echo "<div class='alert alert-success'>";
                echo "<h2 align='center'>Bienvenido ".$_SESSION["CORREO"]."</h2>";
                echo "</div>";
                header("refresh:3 ../views/cliente/index_cliente.php");   
                 }
            else
            {
                echo "<div class='alert alert-danger'>";
                echo "<h2 align='center'>Usuario o password incorrecto...</h2>";
                echo "</div>";

                header("refresh:3 ../views/loginapp.php");  
            }
            $cc->desconectarDB();
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
    public function cerrarSesion()
    {
        session_start();
        session_destroy();
        header("Location: ../index.php");
    }
}