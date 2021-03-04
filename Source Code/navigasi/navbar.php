<style type="text/css">
  .navbar{
position: fixed;
z-index: 999;
width: 100%;
top: 94px;
}
.class{
position: fixed;
z-index: 999;
width: 100%;
top: 0px; 
font-weight: bold;
font-size: 25px;
background-color: white;
list-style-type: none;
}
<?php
  include_once('select_user.php');

?>
</style>
<br>
<fieldset class="class">
<center>
     <li style="color: orange;">
       <a href="index.php"><img src="Images/logo1.jpeg" style="width: 60px;"></a><br>Lelang Padi dan Beras
     </li>
</center>
</fieldset>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark " style="background-color: orange;">
  <div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        
          
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="pelelangan.php">Lelang<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view_kritik.php">Saran dan Masukan</a>
          </li>

          <div class="nav-item" style="display: flex;padding-top: 11px;padding-left: 800px;font-size: bold;">
              <?php
                if (!isset($_SESSION['is_logged_in'])) {
              ?>
                  <li class="nav-item">
                    <li><a href="masuk.php" class="nav-link active"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
                  </li>

                  <li class="nav-item">
                    <li style="margin-top: -3px;"><a href="daftar.php" class="nav-link active"><span class="glyphicon glyphicon-user nav-link"></span>Register</a></li>
                  </li>   
                      <?php
                        }else
                        {
                      ?>
                  <li class="nav-item active">
                    <?php if($role == 2):?>
                    <a class="nav-link" href="profil.php">
                     <span class="glyphicon glyphicon-user nav-link" style="margin-top: -4px;"></span>
                      <?php
                        if (isset($_SESSION['is_logged_in'])) {
                          echo $_SESSION['logged_username'];
                        }
                      ?>
                    </a>
                  </li>
                  <?php ;
                  else :?>
                  <li class="nav-item active" style="color: white;margin-top: 5px;margin-right: 8px;">
                    <span class="glyphicon glyphicon-user nav-link" style="margin-top: -4px;"></span>
                      <?php
                        if (isset($_SESSION['is_logged_in'])) {
                          echo $_SESSION['logged_username']." ";
                        }
                      
                  ?>
                  <?php endif ;?>
                </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="keluar.php">  Keluar <span class="glyphicon glyphicon-log-out nav-link" style="margin-top: -4px;"></span></a>
                  </li>
                <?php } ?>
          </div>  
          

      </ul>
    </div>
  </div>
</nav>  
