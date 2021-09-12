<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
        <div class="card card-body">
            <form action="save_task.php" method="POST">
                <div id="wrap">
                    <div class="row align-items-start mb-4 mt-4">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nome do Produto"
                                aria-label="Sizing example input" name="nome" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Quantidade"
                                aria-label="Sizing example input" name="quantidade" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Categoria"
                                aria-label="Sizing example input" name="categoria" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="row align-items-start mb-4 mt-4">
                        <div class="col">
                            <input type="date" class="form-control" name="dt_vencimento" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="corredor" placeholder="Corredor"
                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="preco" placeholder="Preço"
                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                </div>
                <div class="row align-items-start mb-4 mt-4" id="botoes">
                    <div class="col">
                        <input type="submit" name="save_task" class="btn btn-success btn-block" value="Cadastrar">
                    </div>
                    <div class="col">
                        <input type="reset" class="btn btn-info" value="Limpar Campos" style="width: 100%;">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Categoria</th>
            <th>Dt. Vencimento</th>
            <th>Corredor</th>
            <th>Preço</th>
            <th>Criado Dia</th>
            <th>#</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM estoque";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['nome']; ?></td>
            <td><?php echo $row['quantidade']; ?></td>
            <td><?php echo $row['categoria']; ?></td>
            <td><?php echo $row['dt_vencimento']; ?></td>
            <td><?php echo $row['corredor']; ?></td>
            <td><?php echo $row['preco']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
