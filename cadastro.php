<!DOCTYPE html>
<html>
<head>
	<title>cadastro</title>
	<meta charset="utf-8"/>
	<style type="text/css">
		#divCenter{
			 	position: relative;
			 	top: 300px;
			 	margin: 0 auto;
                width: 200px;
                height: 300px;
                background: white;
                background-color: rgba(0,0,0,0.6);
                border-radius: 10px;
                border: 3px green solid;
		}
		.formulario{
			position: absolute;
			left: 30px;
		}
	</style>
</head>
<body>
	<div id="divCenter">
	<h1 align="center">cadastro</h1>

	<form method="POST" action="inserir.php" class="formulario">
    Código <input type="text" name="codigo" id="codigo" size="15" /><br><br>	
    Nome <input type="text" name="nome" id="nome" size="15"/><br><br>
    Curso <input type="text" name="curso" id="curso" size="15"/><br><br>
     
 
    <p><input type="submit" name="cadastrar-se" value="cadastrar-se"/>
	<button><a href="index.php">Voltar</a></button></p>

<?php
          include_once "conexao.php";
          if(isset($_POST['cadastrar-se'])){
              $codigo = $_POST['codigo'];
              $nome = $_POST['nome'];
              $curso = $_POST['curso'];
              mysqli_query($con,"INSERT INTO alunos (codigo, nome, curso)VALUES('$codigo', '$nome', '$curso')");
              mysqli_close($con);
          }
        ?>

</form>
</div>
</body>
</html>
