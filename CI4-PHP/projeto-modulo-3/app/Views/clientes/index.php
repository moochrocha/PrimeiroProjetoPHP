<div class="modal fade" id="modal-confirmacao-delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="/clientes/excluir" method="post">
        <div class="modal-header">
          <h4 class="modal-title">'Confirme a sua ação</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>deseja realmente excluir esse cliente?</p>
          <input type="hidden" id="id_cliente" name="id_cliente" value="">
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Sim</button>
        </div>
      </form>
    </div>

  </div>

</div>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

        <?php 
          $session = session();
          $alert = $session->get('alert');
        ?>

        <?php if(isset($alert)): ?>

          <?php if($alert == 'success_create'): ?>
          <div class="row">
            <div class="col-lg-12">
             <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Cliente cadastrado com sucesso!
              </div>
          </div>
        </div>
        
        <?php elseif($alert == 'success_delete'): ?>
        <div class="row">
          <div class="col-lg-12">
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Cliente excluido com sucesso!
            </div>
          </div>
        </div>
            <?php endif;?>

        <?php endif; ?>

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Clientes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Clientes</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
<div class="card">
<div class="card-header">
  <a href="/clientes/novo" class="btn btn-info"><i class="fas fa-user-plus"></i> Novo Cliente</a>
</div>
<div class="card-body">
<table id="example1" class="table table-bordered">
<thead>
    <tr>
        <th style="width: 10px">Cód.:</th>
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Limite de Crédito</th>
        <th>Ações</th>
    </tr>
</thead>
    <tbody>
            
          <?php if(!empty($clientes)): ?>
            <?php foreach($clientes as $cliente): ?>
              <tr>
                  <td><?= $cliente['id_cliente']?></td>
                  <td><?= $cliente['nome']?></td>
                  <td><?= $cliente['data_de_nascimento']?></td>
                  <td><?= $cliente['telefone']?></td>
                  <td><?= $cliente['endereco']?></td>
                  <td><?= $cliente['limite_de_credito']?></td>
                  <td>
                    <a href="/clientes/ver/<?= $cliente['id_cliente']?>" class= "btn btn-primary"> <i class="fas fa-search"></i> </a>
                    <a href="/clientes/editar/<?= $cliente['id_cliente']?>" class="btn btn-warning"> <i class="fas fa-edit"></i> </a>
                    <button type="button" class="btn btn-danger" onclick="document.getElementById('id_cliente').value = '<?= $cliente['id_cliente']?>'" data-toggle="modal" data-target="#modal-confirmacao-delete"> <i class="fas fa-trash-alt"></i> </button>
                  </td>
              </tr>
            <?php endforeach;?>
            <?php else: ?>
              <td colspan="7">Nenhum cliente cadastrado!</td>
          <?php endif; ?>

    </tbody>
</table>
</div>
</div>
</div>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->