<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <title>Sistem Perpustakaan | Universitas Serang Raya</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

  <!-- Header
  ============================================= -->
  <header id="header" class="full-header dark">

      <div id="header-wrap">

          <div class="container clearfix">

              <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

              <!-- Logo
              ============================================= -->
              <div id="logo">
                  <a href="index.php" class="standard-logo" data-dark-logo="images/logo.png"><img src="images/logo.png" alt="Canvas Logo"></a>
                  <a href="index.php" class="retina-logo" data-dark-logo="images/logo.png"><img src="images/logo.png" alt="Canvas Logo"></a>
              </div><!-- #logo end -->

              <!-- Primary Navigation
              ============================================= -->
              <nav id="primary-menu" class="style-2">

                  <ul>
                      <li><a href="#"><div>Buku adalah jendela dunia</div></a></li>
  				        </ul>

              </nav><!-- #primary-menu end -->

          </div>

      </div>

  </header>
  <!-- #header end -->

    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Selamat Datang di Sistem Perpustakaan</h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Login</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">

                    <div class="acctitle"><i class="acc-closed icon-lock3"></i><i class="acc-open icon-unlock"></i>Admin Panel</div>
                    <div class="acc_content clearfix">
                        <form id="login" name="login" class="nobottommargin" action="proses_login.php?action=login" method="post">
                            <div class="col_full">
                                <label for="username">Username:</label>
                                <input type="text" id="username" name="username" value="" class="form-control" />
                            </div>

                            <div class="col_full">
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" value="" class="form-control" />
                            </div>

                            <div class="col_full nobottommargin">
                                <button class="button button-3d button-black nomargin" id="submit" name="submit" value="login">Login</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <?php include "footer.php"; ?>
    <!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>
