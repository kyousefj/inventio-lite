<div class="row">
  <div class="col-md-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h1>Nueva Categoria</h1>
      </div>
      <div class="panel-body">
        <form class="form-horizontal" method="post" id="addcategory" action="index.php?view=addcategory" role="form">
          <div class="form-group">
            <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
            <div class="col-md-6">
              <input type="text" name="name" required class="form-control" id="name" placeholder="Nombre">
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
              <button type="submit" class="btn btn-primary">Agregar Categoria</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>