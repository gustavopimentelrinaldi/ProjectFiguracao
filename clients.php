<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cinema | Produções</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <link rel="stylesheet" type="text/css" href="style.css">

<?php
include('includes/header.php');


include('includes/connection.php');

$query = "SELECT * FROM clients";
$result = mysqli_query( $conn, $query );


mysqli_close($conn);
?>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box radius">
            <div class="box-header">
              <h3 class="box-title container"> &nbsp;&nbsp;&nbsp;&nbsp;Cadastros Cinema</h3>
            </div>
            
            <div class="box-body">
            	
			<table class="table table-bordered">
			    
			    
			    <?php
			    
			    if( mysqli_num_rows($result) > 0 ) {
			        
			       
			        
			        while( $row = mysqli_fetch_assoc($result) ) {
			            
			            echo "<tr class='paciente'><th>" . "Nome" . "</th><th>" . "Nome artístico" . "</th><th>" . "CPF" . "</th><th>" . "RG" . "</th><th>" . "Órgão" . "</th><th>" . "Data" . "</th><th>" . "Sexo" . "</th><th>" . "Cidade" . "</th><th>" . "Bairro" . "</th></tr>" . "<tr class='paciente'><td class='info-nome'>" . $row['name'] . "</td><td class='info-nome'>" . $row['name2'] . "</td><td>" . $row['cpf'] . "</td><td>" . $row['rg'] . "</td><td>" . $row['orgao'] . "</td><td>" . $row['data'] . "</td><td>" . $row['sexo'] . "</td><td>" . $row['cidade'] . "</td><td>" . $row['bairro'] . "</td></tr>" . "<tr class='paciente'><th>" . "UF" . "</th><th>" . "CEP" . "</th><th>" . "Endereço" . "</th><th>" . "E-mail" . "</th><th>" . "Email2" . "</th><th>" . "Telefone" . "</th><th>" . "Telefone2" . "</th></tr>" . "<tr class='paciente'><td>" . $row['uf'] . "</td><td>" . $row['cep'] . "</td><td>" . $row['endereco'] . "</td><td>" . $row['email'] . "</td><td>" . $row['email2'] . "</td><td>" . $row['tel1'] . "</td><td>" . $row['tel2'] . "</td><td style='border:none;'><a href='edit.php?id='" . $row['id'] . '"type=button" class="btn btn-primary btn-md"><span>' . "Editar" . "</span></a></td></tr>" . "<td style='border:none;'><div><a><span>" . "&nbsp;" . "</span></a></div></td>";

			            
			        }
			    } else {
			        echo "<div class='alert alert-warning container'>Nenhum cadastro para mostrar!</div>";
			    }

			    ?>



			  
				
			    <tr>
			        <td colspan="9"><div class="text-center"><a href="index.php" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-plus"></span> Adicionar cadastro!</a></div></td>
			    </tr>
			</table>

			</div>
		</div>
	</div>
</div>
</section>

<script src="filtrar.js">
	</script>
<?php
include('includes/footer.php');
?>


