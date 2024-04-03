<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ver Funcionário</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="/funcionarios" class="btn btn-success"style="margin-right: 15px"><i class="fas fa-arrow-alt-circle-left"></i> Voltar</a>
              <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
              <li class="breadcrumb-item"><a href="/clientes">Funcionários</a></li>
              <li class="breadcrumb-item active">Ver</li>
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
             <div class="card">
<div class="card-header">
<h3 class="card-title">Dados Pessoais</h3>
</div>


  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <div class="form-group">
          <label for="">Nome</label>
          <input type="text" class="form-control" value="<?= $funcionario['nome']?>" disabled>
        </div>
      </div>
      <div class="col-lg-3">
          <div class="form-group">
              <label for="">Data de Nascimento</label>
              <input type="date" class="form-control" value="<?= $funcionario['data_de_nascimento']?>" disabled>
          </div>
      </div>
        <div class="col-lg-3">
          <div class="form-group">
              <label for="">RG</label>
              <input type="text" class="form-control" value="<?= $funcionario['rg']?>" disabled>
          </div>
       </div>
        <div class="col-lg-3">
          <div class="form-group">
              <label for="">CPF</label>
              <input type="text" class="form-control" value="<?= $funcionario['cpf']?>" disabled>
          </div>
       </div>
      <div class="col-lg-3">
            <div class="form-group">
              <label for="">Telefone</label>
              <input type="text" class="form-control" value="<?= $funcionario['telefone']?>" disabled>
          </div>
      </div>
      <div class="col-lg-6">
            <div class="form-group">
              <label for="">Endereço</label>
              <input type="text" class="form-control" value="<?= $funcionario['endereco']?>" disabled>
          </div>
      </div>
      <div class="col-lg-3">
            <div class="form-group">
              <label for="">Data de contratação</label>
              <input type="date" class="form-control" value="<?= $funcionario['data_de_contratacao']?>" disabled>
          </div>
      </div>
            <div class="col-lg-3">
            <div class="form-group">
              <label for="">Cargo</label>
              <input type="text" class="form-control" value="<?= $funcionario['cargo']?>" disabled>
          </div>
      </div>
      <div class="col-lg-3">
            <div class="form-group">
              <label for="">Salário</label>
              <input type="text" class="form-control" value="<?= $funcionario['salario']?>" disabled>
          </div>
      </div>
            <div class="col-lg-3">
            <div class="form-group">
              <label for="">Dia de pagamento</label>
              <input type="text" class="form-control" value="<?= $funcionario['dia_de_pagamento']?>" disabled>
          </div>
      </div>

  </div>
</div>
</div>
         </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->