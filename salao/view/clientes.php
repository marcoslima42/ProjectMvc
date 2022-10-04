<!doctype html>
<html>
 	<head>
     	<meta charset="utf-8">
     	<title>MVC PHP</title>
 	</head>

 	<body>
     	<!-- VIEW CLIENTES.PHP -->
     	<h1>Lista de Clientes</h1>
     	<table>
         	<thead>
             	<tr>
                 	<th>ID</th>
                 	<th>Nome</th>
                 	<th>Editar</th>
   	                <th>Deletar</th>
             	</tr>
         	</thead>

         	<tbody>
             	<?php foreach ($clientes as $cliente){ ?>
                 	<tr>
                     	<td><?= $cliente['id']; ?></td>
 	                    <td><?= $cliente['nome']; ?></td>
                     	<td>
                         	<a href="?metodo=deletar&id=<?= $cliente['id']; ?>">
                             	Deletar
                         	</a>
     	                </td>
                     	<td>
                         	<a href="?metodo=editar&id=<?= $cliente['id']; ?>">
                             	Editar
                         	</a>
                     	</td>
    	             </tr>
             	<?php } /*fim do foreach*/ ?>
         	</tbody>
     	</table>
 	</body>
  </html>