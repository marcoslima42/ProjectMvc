<?php   // Model Cliente

	class Clientes{

		function listar(){
				return [['id'=>1, 'nome'=>'José'], ['id'=>2, 'nome'=>'Maria']];
				//require 'conexao.php';

		}

		function buscar(){
				echo "Buscando estudante. ";
		}

		function salvar(){
				echo "Salvando dados do estudante. ";
		}

		function atualizar(){
				echo "Atualizando dados do estudante. ";
		}


		function deletar(){
				echo "Deletando dados do estudante. ";

		}

    }

?>