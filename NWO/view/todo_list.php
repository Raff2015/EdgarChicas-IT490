<?php include '../view/header.php'; ?>

<html lang="en">
<head>
  
  <!--------------------------------------->
<link rel="stylesheet" type="text/css" href="t.css">
    <link rel="stylesheet" type="text/css" href="Content/css/a.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="dist/jquery.simple-popup.settings.css" rel="stylesheet" type="text/css" />



<style>
table.minimalistBlack {
  border: 3px solid #000000;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
table.minimalistBlack td, table.minimalistBlack th {
  border: 1px solid #000000;
  padding: 5px 4px;
}
table.minimalistBlack tbody td {
  font-size: 13px;
}
table.minimalistBlack thead {
  background: #CFCFCF;
  background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
  border-bottom: 3px solid #000000;
}
table.minimalistBlack thead th {
  font-size: 15px;
  font-weight: bold;
  color: #000000;
  text-align: left;
}
table.minimalistBlack tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #000000;
  border-top: 3px solid #000000;
}
table.minimalistBlack tfoot td {
  font-size: 14px;
}

</style>

</head>
<body>

    <div class = "container">

        <h2><?php echo "Welcome, " . $username; ?></h2>





        <div class = "link2"><a href = logout.php> Sign Out </a></div>
    </div>


    <div class="container">
      <div class="jumbotron">
        <h3 class="text-center">Search For Any Movie</h3>
        <form id="searchForm">
          <input type="text" class="form-control" id="searchText" placeholder="Search Movie....">
        </form>
      </div>
    </div>

    <div class="container">
      <div id="movies" class="row"></div>
    </div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Scripts/js/jquery-3.2.1.min.js"></script>
    <script src="Scripts/js/bootstrap.min.js"></script>
    <script src="Scripts/js/axios.min.js"></script>
    <script type="text/javascript" src="Scripts/js/main.js"></script>
  </body>

  </html>

<?php include '../view/footer.php'; ?>
