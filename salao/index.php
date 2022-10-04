<?php            //   Simples Aplicação MVC com PHP

    // Identifica os dados carregados pela URL
    if(isset($_GET['controller'])){
       $controller = $_GET['controller'].'Controller';
           } 
    else{
       $controller = 'ClienteController';
    }

   if(isset($_GET['metodo'])){
         
         $metodo = $_GET['metodo'];
  
    }       
    else{
         $metodo = 'listar';
    }
  
    // Carrega o controlador selecionado pela URL
    require_once 'controller/'.$controller.'.php';

    // instancia um novo objeto
    $site = new $controller();  // carrega o escopo atual
    $site->$metodo();

  ?>




