<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->


  <!-- Collect the nav links, forms, and other content for toggling -->
  <div>
    <ul class="nav navbar-nav">
      <?php if(!isset($_SESSION["idPersona"])):?>
      <li><a href="./registro.php">REGISTRO</a></li>
      <li><a href="../login.html">LOGIN</a></li>
    <?php else:?>
      <li><a href="cerrarSesion.php">SALIR</a></li>
    <?php endif;?>
    </ul>

  </div><!-- /.navbar-collapse -->
</nav>