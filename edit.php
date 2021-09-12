<?php
include("db.php");
$nome = '';
$quantidade= '';
$categoria= '';
$dt_vencimento= '';
$corredor= '';
$preco= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM estoque WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nome = $row['nome'];
    $quantidade = $row['quantidade'];
    $categoria = $row['categoria'];
    $dt_vencimento = $row['dt_vencimento'];
    $corredor = $row['corredor'];
    $preco = $row['preco'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nome= $_POST['nome'];
  $quantidade = $_POST['quantidade'];
  $categoria = $_POST['categoria'];
  $dt_vencimento = $_POST['dt_vencimento'];
  $corredor = $_POST['corredor'];
  $preco = $_POST['preco'];

  $query = "UPDATE estoque set nome = '$nome', quantidade = '$quantidade', categoria = '$categoria', dt_vencimento = '$dt_vencimento', corredor = '$corredor', preco = '$preco' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input name="nome" type="text" class="form-control" value="<?php echo $nome; ?>" placeholder="Atualizar">
                    </div>
                    <div class="form-group">
                        <textarea name="quantidade" class="form-control" cols="30" rows="10"><?php echo $quantidade;?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="categoria" class="form-control" cols="30" rows="10"><?php echo $categoria;?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="dt_vencimento" class="form-control" cols="30" rows="10"><?php echo $dt_vencimento;?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="corredor" class="form-control" cols="30" rows="10"><?php echo $corredor;?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea name="preco" class="form-control" cols="30" rows="10"><?php echo $preco;?></textarea>
                    </div>
                    <button class="btn-success" name="update">
                        Atualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>
