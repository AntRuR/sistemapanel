<!DOCTYPE html>
<html>

<head>
  <title>Demo</title>
  <!-- <link rel="stylesheet" type="text/css" href="css/foopicker.css">
  <script type="text/javascript" src="js/foopicker.js"></script> -->
  <base href="http://localhost:8888/sistemapanel/wpkmanager/panel/">
<link type="text/css" rel="stylesheet" href="js/babel/vendor/foopicker/css/foopicker.css">
<script type="text/javascript" src="js/babel/vendor/foopicker/js/foopicker.js"></script>
</head>

<body>
<input type="text" id="datepicker2" value="02/07/2020"/>
<input type="text" id="datepicker3" value="02/07/2020"/>
  
  <script type="text/javascript">
    var foopicker2 = new FooPicker({
      id: 'datepicker2',
      dateFormat: 'dd/MM/yyyy'
    });
    var foopicker3 = new FooPicker({
      id: 'datepicker3',
      dateFormat: 'dd/MM/yyyy'
    });    
  </script>
</body>

</html>
