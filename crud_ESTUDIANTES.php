<?php
     
     if( !empty($_POST) ){
   
     //print_r( $_POST );
       // echo "<hr/>";
       $txt_id_estudiantes = utf8_decode($_POST["txt_id_estudiantes"]);
       $txt_carnet = utf8_decode($_POST["txt_carnet"]);
        $txt_nombres = utf8_decode($_POST["txt_nombres"]);
        $txt_apellidos = utf8_decode($_POST["txt_apellidos"]);
        $txt_direccion = utf8_decode($_POST["txt_direccion"]);
        $txt_telefono = utf8_decode($_POST["txt_telefono"]);
        $txt_genero = utf8_decode($_POST["txt_genero"]);
        $txt_email = utf8_decode($_POST["txt_email"]);
        $txt_fecha_nacimiento = utf8_decode($_POST["txt_fecha_nacimiento"]);

        $txt_fn = utf8_decode($_POST["txt_fn"]);
      include("datos_conexion.php");
        $db_conexion = mysqli_connect($db_host,$db_usr,$db_pass,$db_nombre);
        $sql ="";
        if(isset($_POST['btn_agregar'])  ){
          $sql = "INSERT INTO escuela.estudiantes(id_estudiantes,carnet,nombres,apellidos,direccion,telefono,genero,email,fecha_nacimiento) VALUES ('".$txt_id_estudiantes ."','". $txt_nombres ."','". $txt_apellidos ."','". $txt_direccion ."','". $txt_telefono ."','". $txt_fn ."',". $txt_carnet .");";
        }
        if( isset($_POST['btn_modificar'])  ){
          $sql = "update escuela.estudiantes set codigo='". $txt_id_estudiantes ."',carnet='". $txt_carnet ."',nombres='". $txt_nombres ."',apellidos='". $txt_apellidos ."',direccion='". $txt_direccion ."',telefono='". $txt_telefono ."',genero='". $txt_genero ."',emaik=". $drop_email ." where fecha_nacimiento  = ". $txt_fn.";";
        }
        if( isset($_POST['btn_eliminar'])  ){
          $sql = "delete from escuela.estudiantes  where id_estudiantes = ". $txt_id_estudiantes.";";
        }
         
          if ($db_conexion->query($sql)===true){
            $db_conexion->close();
           
            header('Location: /empresa_2021');
            //header('Location: index.php');
           
          }else{
            $db_conexion->close();
          
          }

      }
     
    
      
      ?>