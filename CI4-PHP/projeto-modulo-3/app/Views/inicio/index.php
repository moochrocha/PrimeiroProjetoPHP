<?php 

  $session = session();

  $primeiro_nome = $session->get('primeiro_nome');

?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Bem-Vindo <?= $primeiro_nome?>!</h1>
          </div><!-- /.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div>/.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
              <span class="info-box-text">Clientes</span>
            <span class="info-box-number"><?= $total_de_clientes ?></span>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-12">
<div class="info-box">
<span class="info-box-icon bg-success"><i class="fas fa-users"></i></span>
<div class="info-box-content">
<span class="info-box-text">Funcionários</span>
<span class="info-box-number"><?= $total_de_funcionarios ?></span>
</div>

</div>

</div>

<div class="col-md-3 col-sm-6 col-12">
<div class="info-box">
<span class="info-box-icon bg-warning"><i class="fas fa-box-open"></i></span>
<div class="info-box-content">
<span class="info-box-text">Produtos</span>
<span class="info-box-number"><?= $total_de_produtos ?></span>
</div>

</div>

</div>
        </div>

        <div class="row">
          <div class="card">
<div class="card-header">
<h3 class="card-title">Gráfico de Pizza</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body">
<div class="chart">
<canvas id="chartjs-4" class="chartjs" widht="undefined" height="undefined"></canvas>
</div>
</div>

</div>
        </div>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    new Chart(document.getElementById("chartjs-4"), {
      "type": "doughnut",
      "data": {
        "labels": ["Clientes","Funcionários","Produtos"],
        "datasets": [{
          "label": "Total",
          "data": [<?= $total_de_clientes?>, <?= $total_de_funcionarios?>, <?= $total_de_produtos?>],
          "backgroundColor": ["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]
        }]
      }
    });
  </script>