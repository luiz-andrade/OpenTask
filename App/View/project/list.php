<div class="card border-info">
  <div class="card-header">
    Projeto
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-6">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=BASE?>">Home</a></li>
          <li class="breadcrumb-item active">Projeto</li>
        </ol>
      </div>
      <div class="col-md-6">
        <a href="<?=BASE?>project/create" class="btn btn-primary">Novo</a>
      </div>
    </div>

    <hr>

    <div class="row">
      <div class="col">
        <div class="overflow-auto">
          <table class="table table-hover table-spriped">
            <thead>
              <tr>
                <th>Título</th>
                <th>Criado</th>
                <th>Deadline</th>
                <th>Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($listProject as $project){
                if($project->status == 1){
                  $status = "Ativo";
                  $class = "table-success";
                }elseif($project->status == 2){
                  $status = "Cancelado";
                  $class = "table-danger";
                }else{
                  $status = "Finalizado";
                  $class = "table-info";
                }

                ?>
                <tr class="<?=$class?>">
                  <td><?=$project->title;?></td>
                  <td><?=convertDate($project->created);?></td>
                  <td><?=$project->deadline != null ? convertDate($project->deadline) : "---";?></td>
                  <td><?=$status?></td>
                  <td>
                    <a href="<?=BASE?>project/show/<?=$project->id;?>" class="btn btn-primary">Visualizar</a>
                    <?php
                    if($project->status == 1){
                      ?>
                      <a href="<?=BASE?>project/edit/<?=$project->id;?>" class="btn btn-warning">Editar</a>
                      <?php
                    }
                    ?>
                  </td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</div>
