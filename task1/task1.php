<?php 
// print_r($_POST);
if(empty($_POST)){
      
}else{
$x = $_POST["one"] + $_POST["two"] + $_POST["three"] + $_POST["four"] + $_POST["five"];
$p = ($x / 500) * 100 ;
switch ($p){
  case $p >= 0 && $p < 40:
    echo 
    '<div class="alert alert-danger" role="alert">
    your Percentage is '. htmlspecialchars($p) .' and your Grade F
    </div>';
     break;
  case $p >= 40 && $p < 60:
    echo 
    '<div class="alert alert-warning" role="alert">
    your Percentage is '. htmlspecialchars($p) .' and your Grade E
    </div>';
     break;
  case $p >= 60 && $p < 70:
    echo 
    '<div class="alert alert-warning" role="alert">
    your Percentage is '. htmlspecialchars($p) .' and your Grade D
    </div>';
     break;
  case $p >= 70 && $p < 80:
    echo 
    '<div class="alert alert-success" role="alert">
    your Percentage is '. htmlspecialchars($p) .' and your Grade C
    </div>';
     break;
  case $p >= 80 && $p < 90:
    echo 
    '<div class="alert alert-success" role="alert">
    your Percentage is '. htmlspecialchars($p) .' and your Grade B
    </div>';
     break;
    case $p >= 90 && $p <= 100:
      echo 
      '<div class="alert alert-success" role="alert">
      your Percentage is '. htmlspecialchars($p) .' and your Grade A
      </div>';
      break;
      default:
      echo 
      '<div class="alert alert-danger" role="alert">
      Your Score Not Vaild
      </div>';
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="contianer">
        <div class="row">
            <div class="col-12 text-center text-danger mt-5">
                <h1> Year Grade </h1>
            </div>
            <div class="col-4 offset-4 mt-0">
                <form  method="post">
                    <div class="form-group">
                      <label for="formGroupExampleInput">Physics</label>
                      <input name="one" type="number" class="form-control" id="formGroupExampleInput" placeholder="Enter Grade" required>
                      <label for="formGroupExampleInput">Chemistry</label>
                      <input name="two" type="number" class="form-control" id="formGroupExampleInput" placeholder="Enter Grade" required>
                      <label for="formGroupExampleInput">Bioligy</label>
                      <input name="three" type="number" class="form-control" id="formGroupExampleInput" placeholder="Enter Grade" required>
                      <label for="formGroupExampleInput">Mathematics</label>
                      <input name="four" type="number" class="form-control" id="formGroupExampleInput" placeholder="Enter Grade" required>
                      <label for="formGroupExampleInput">Computer</label>
                      <input name="five" type="number" class="form-control" id="formGroupExampleInput" placeholder="Enter Grade" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-danger rounded form-control"> Get Year Grade </button>
                    </div>
                </form>
                
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>