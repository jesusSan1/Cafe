<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">Administrador</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Noticias</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="usuarios.php">Usuarios</a>
        </li>
      </ul>
    </div>
    <?php echo"<a href='Cerrar.php'><input type='submit' value='Cerrar sesion' class='btn btn-danger'> </a>"; ?>
  </div>
</nav>