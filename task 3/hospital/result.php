<?php
session_start();
function result($x){
    if($x < 3){
        echo "bad";
    }elseif($x >= 3 && $x < 5 ){
        echo "good";
    }elseif($x >= 5 && $x < 10 ){
        echo "very good";
    }
    elseif($x >= 10){
        echo "excellent";
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
  <table class="table">
        <thead>
            <tr>
                <th>Question</th>
                <th>Review</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td >are you satisfied with the level of cleaness?   </td>
                <td>
                    <?= result($_SESSION["q1"]); ?>
                </td>
            </tr>
            <tr>
                <td >are you satisfied with calmness in the hospital?</td>
                <td>
                <?= result($_SESSION["q2"]); ?>
                </td>
            </tr>
            <tr>
                <td >are you satisfied with service prices?</td>
                <td>
                <?= result($_SESSION["q3"]); ?>
                </td>
            </tr>
            <tr>
                <td >are you satisfied with nursing service?</td>
                <td>
                <?= result($_SESSION["q4"]); ?>
                </td>
            </tr>
            <tr>
                <td >are you satisfied with the level of the doctor?</td>
                <td>
                <?= result($_SESSION["q5"]); ?>
                </td>
            </tr>
            <tr>
                <td >result</td>
                <td>
                <?= result(($_SESSION["q1"] + $_SESSION["q2"] + $_SESSION["q3"] +$_SESSION["q4"] +$_SESSION["q5"]) / 5 ); ?>
                </td>
            </tr>
        </tbody>
    </table>
    <label for=""><?php if (($_SESSION["q1"] + $_SESSION["q2"] + $_SESSION["q3"] +$_SESSION["q4"] +$_SESSION["q5"]) / 5 < 3){
        echo "please contact the pationt to find out the reason for the bad evaluation  mob : ". $_SESSION["number"];
    }
    else{
        echo "thank you";
    }
    ?></label>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>