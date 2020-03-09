<DOCTYPE html>
<html>
<head>
  <title>PHP CRUD</title>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
  <div class="row justify-content-center">
    <form action="" method="POST">
      <div class="form-group">
        <label>Name</label>
      </div>
      <div class="form-group">
        <input type="text" name="name" class="form-control" value="Enter your name">
      </div>
      <div class="form-group">
        <label>Location</label>
      </div>
      <div class="form-group">
        <input type="text" name="location" class="form-control" value="Enter your location">
      </div>
      <div class="form-group">
        <button type="submit" name="save">Save</button>
      </div> 
    </form>
  </div>
</body>
</html>