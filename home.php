
<!DOCTYPE html> 
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-10">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Streaming Movies @ AJE.Streaming</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-black.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>STREAMING MOVIES</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">



      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active"><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="contact.php"><i class="fa fa-phone"></i> <span>Contact Us</span></a></li>
        <li><a href="article.php"><i class="fa fa-pencil"></i> <span>Articles</span>
          </a>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content container-fluid">

  <style>
table, th, td {
  border: 1px solid black;
}
</style>

<table style="width:20%">
  <tr>
    <th><span id="isinama"></span></th>
  </tr>
  <tr>
    <th><img src="under the dome.jpg"></span></th>
  </tr>
  <tr>
    <th><span id="isitype"></span></th>
  </tr>
  <tr>
    <th><span id="isigenre"></span></th>
  </tr>
  <tr>
    <th><span id="isiruntime"></span></th>
  </tr>
  <tr>
    <th><span id="isiaverage"></span></th>
  </tr>
  <tr>
    <th><span id="isilanguage"></span></th>
  </tr>
 <!-- penampung data json -->
</table>

        <!-- batas -->
    </section>
    <!-- /.content -->
  </div>
<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
<script type="text/javascript">
  $.ajax({
      url: "http://api.tvmaze.com/shows/1",
      images: "http://static.tvmaze.com/uploads/images/medium_portrait/0/15.jpg",
      type: "GET",
      dataType: "JSON",
      success: function(data)
      {
        var genres = "";

        //isi data
        $('#isinama').html( data.name );
        $('#isitype').html( data.type );
        $('#isilanguage').html( data.language );
        $('#isiruntime').html( data.runtime );
        $('#isirating').html( data.rating );
//data array harus di looping 


          for (var i = 0; i < data.genres.length; i++)
          {
            genres = genres + data.genres[i]+ ", ";
          }

          $('#isigenre').html( genres );
          $('#isicountry').html( country );
          $('#isilink').attr( "href", data.url );

      }
    });
  
</script>
</html>