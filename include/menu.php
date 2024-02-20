        <!--MENU NAV--> 
        
        <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
      <div class="container-fluid">
          <a class="navbar-brand" href="rachasawei.php"><img class="d-block w-100" src="img/Logo.png" width="80" height="80"alt="Logo"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
          
          <a class="nav-link active" aria-current="page" href="<?php echo $base_url; ?>/product-list.php"><font size = "4.5">HOME</font></a>
        </li>
        

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   
  <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link" href="about us.php"><font size = "4.5">ABOUT US</font></a>
        </li>
        <li class="nav-item">
        </ul>
      </div>
      </div>
</div>



<ul class="nav justify-content-end">
        <li class="container-fluid">
          <!--6.if already logged in, change menu items -->
        <?php if (isset($_SESSION['user_id'])) { ?>
              <a class="navbar-brand">
              <font size = "4.5">WELCOME " <?php echo $_SESSION['user_name']; ?> "</font>

              <a class="navbar-brand" href="register\logout.php"> 
              <font size = "4.5">SIGN OUT</font>
              <a class="navbar-brand" href="<?php echo $base_url; ?>/cart.php">
              <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg><font size = "4.5">  CART(<?php echo count($_SESSION['cart'] ?? []); ?>)</font></a>

              <?php	}else { ?>
            <ul class="nav justify-content-end">
              <li class="container-fluid">
              <a class="navbar-brand" href="register\login.php">
              <font size = "4.5">  LOGIN </font>
                  <a class="navbar-brand" href="register\register.php">
              <font size = "4.5">  SIGN UP </font>
						<!--<li><a href="admin_login.php">Admin</a></li>-->
				<a class="navbar-brand" href="<?php echo $base_url; ?>/cart.php">
              <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg><font size = "4.5">  CART (<?php echo count($_SESSION['cart'] ?? []); ?>)
</font></a>

<?php } ?>
        
        </li>
        </ul>
    </nav>