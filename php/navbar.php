
<nav class="navbar navbar-default" role="navigation">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display 
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
  <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
 <a class="navbar-brand" href="./"><b>INICIO</b></a>    -->
  </div>



  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <?php if(!isset($_SESSION["user_id"])):?>


<li><a href="./index.html">LOGIN</a></li>

<!-- <li><a href="./registro.php">REGISTRO</a></li>    -->

    <?php else:?>

<li>
  <a href="./index.html">SALIR</a>
</li>



    <?php endif;?>
    </ul>

  </div><!-- /.navbar-collapse -->
</div>
</nav>