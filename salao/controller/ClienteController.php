<?php                            // Controlador Alunos
  require 'model/Clientes.php';

  class ClienteController {

		function listar(){
			$Clientes = new Clientes();       // instancia o método alunos
			$clientes = $Clientes->listar();  // busca todos os alunos
			require 'view/clientes.php';    // carrega a view alunos
		}

	}

 ?>