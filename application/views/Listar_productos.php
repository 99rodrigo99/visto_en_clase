<div class="container">
  <div class="row">
    <div class="col-md-8">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($mis_productos as $pro) {
          ?>
            <tr>
              <th scope="row"><?php echo $pro->id_producto ?></th>
              <td><?php echo $pro->nombre_producto ?></td>
              <td><?php echo $pro->precio ?></td>
            </tr>

          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
    <div class="col-md-4">
      <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-12">
          <label class="form-label">Nombre</label>
          <input type="text" class="form-control" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-12">
          <label class="form-label">Precio</label>
          <input type="text" class="form-control" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="col-12">
          <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>