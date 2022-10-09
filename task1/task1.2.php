<?php
$r = "";
if(empty($_POST)){
}
elseif($_POST["operator"] == '+'){
    $r = $_POST['one'] + $_POST['two'];
}
elseif($_POST["operator"] == '-'){
    $r = $_POST['one'] - $_POST['two'];
}
elseif($_POST["operator"] == '*'){
    $r = $_POST['one'] * $_POST['two'];
}
elseif($_POST["operator"] == '/'){
    $r = $_POST['one'] / $_POST['two'];
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
                <h1> Calculator </h1>
            </div>
            <div class="col-4 offset-4 mt-0">
                <form  method="post">
                    <div class="form-group">
                        <label for="formGroupExampleInput">FirstNumber</label>
                        <input name="one" type="number" class="form-control" id="formGroupExampleInput" placeholder="Enter Number" required>
                        <label for="formGroupExampleInput">SecondNumber</label>
                        <input name="two" type="number" class="form-control" id="formGroupExampleInput" placeholder="Enter Number" required>
                        </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="operator" id="inlineRadio1" value="+">
                    <label class="form-check-label" for="inlineRadio1">+</label>
                    
                    <input class="form-check-input" type="radio" name="operator" id="inlineRadio2" value="-">
                    <label class="form-check-label" for="inlineRadio2">-</label>
                    
                    <input class="form-check-input" type="radio" name="operator" id="inlineRadio3" value="*" >
                    <label class="form-check-label" for="inlineRadio3">* </label>

                    <input class="form-check-input" type="radio" name="operator" id="inlineRadio3" value="/" >
                    <label class="form-check-label" for="inlineRadio3">/ </label>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-danger rounded form-control"> Get Result </button>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Result</label>
                      <label for="formGroupExampleInput">
                        <?php 
                        echo $r; 
                        ?></label>
                      <?php ?>
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