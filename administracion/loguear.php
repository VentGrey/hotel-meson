<?php
  //incluimos la base de datos//
  include_once('Db.php');
  //instanciamos las variables a evaluar//
  $username="";
  $password="";
  //recibimos por las variables por POST//

 if (isset($_POST['username'])){
    $username = $_POST['username'];
  }else{
    header('Location: login.php?mensaje=ErrorU');
  }

if (isset($_POST['password'])){
    $password=$_POST['password'];
  }else{
    header('Location: login.php?mensaje=ErrorP');
  }
//iniciamos la conexion a la base de datos usando PDO//
  $db=Db::getConnect();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Agregamos atributo ERROR//
  //contamos cuantos registros hay en la consulta//

  //guardamos la consulta en una varaible, aqui contaremos los registros en coincidencias//
  $sql ='SELECT count(*) FROM users WHERE username = :username AND password = :password';
  $Buscar=$db->prepare($sql); //Preparamos la consulta//
  $Buscar->bindValue('username', $username); //Blindamos la variable :username//
  $Buscar->bindValue('password', $password); //Blindamos la variable :password//
  $Buscar->execute();//Ejecutamos la consulta//
  //Guardamos el conteo en una variable//
  $contar_registros = $Buscar->fetchColumn();
    if($contar_registros == 1){
      //hacemos otra consulta para obtener las variables de sesion//
      $sql2 ='SELECT * FROM users WHERE username = :username AND password = :password';
      $Buscar2=$db->prepare($sql2); //Preparamos la consulta//
      $Buscar2->bindValue('username', $username); //Blindamos la variable :username//
      $Buscar2->bindValue('password', $password); //Blindamos la variable :password//
      $Buscar2->execute();//Ejecutamos la consulta//
      $arr = $Buscar2->fetch(PDO::FETCH_ASSOC);
      //creamos los datos que se insertaran en las varaibles de sesion//
      $id = $arr['id'];
      $username = $arr['username'];
      //asignamos un id a la sesion//
      session_id($id.$username);
      //Creamos la sesion
      session_start();
      $_SESSION['id_usr'] = $id;
      $_SESSION['username'] = $username;

      if($id =="1"){
        header('Location: index-admin.php');
      }else if($id=="2"){
        header('Location: index-recepcion.php');
      }else{
        header('Location: login.php?mensaje=Error2');
      }
      //nos vamos al panel de Bienvenida//
  }else{
    //Regresamos al login con un error 2
    header('Location: login.php?mensaje=Error2');
    echo "N registros: ".$contar_registros;
  }




?>
