<div class="container">
  <div class="row">
    <div class="col-md-8">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Usuario</th>
            <th scope="col">Edad</th>
            <th scope="col">Contraseña</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($mis_usuarios as $us) {
          ?>
            <tr>
              <th scope="row"><?php echo $us->id ?></th>
              <td><?php echo $us->nombre ?></td>
              <td><?php echo $us->usuario ?></td>
              <td><?php echo $us->edad ?></td>
              <td><?php echo $us->password ?></td>
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
          <div class="col-md-12">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-12">
            <label class="form-label">Usuario</label>
            <input type="text" class="form-control" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="col-md-12">
            <label class="form-label">Edad</label>
            <input type="text" class="form-control" required>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="col-md-12">
              <label class="form-label">Contraseña</label>
              <input type="text" class="form-control" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>