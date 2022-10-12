<?php
session_start();
// $_SESSION = $_POST;
if(isset($_POST["q1"]) && isset($_POST["q2"]) && isset($_POST["q3"]) && isset($_POST["q4"]) && isset($_POST["q5"])){
    $_SESSION = $_POST;
    header('location:result.php');
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
    <form action="" method="post">
    <table class="table">
        <thead>
            <tr>
                <th>Question</th>
                <th>bad</th>
                <th>good</th>
                <th>very good</th>
                <th>excelent</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td >are you satisfied with the level of cleaness?   </td>
                <td>
                    <input name="q1" type="radio" value="0">
                </td>
                <td>
                    <input name="q1" type="radio" value="3">
                </td>
                <td>
                    <input name="q1" type="radio" value="5">
                </td>
                <td>
                    <input name="q1" type="radio" value="10">
                </td>
            </tr>
            <tr>
                <td >are you satisfied with calmness in the hospital?</td>
                <td>
                    <input name="q2" type="radio" value="0">
                </td>
                <td>
                    <input name="q2" type="radio" value="3">
                </td>
                <td>
                    <input name="q2" type="radio" value="5">
                </td>
                <td>
                    <input name="q2" type="radio" value="10">
                </td>
            </tr>
            <tr>
                <td >are you satisfied with service prices?</td>
                <td>
                    <input name="q3" type="radio" value="0">
                </td>
                <td>
                    <input name="q3" type="radio" value="3">
                </td>
                <td>
                    <input name="q3" type="radio" value="5">
                </td>
                <td>
                    <input name="q3" type="radio" value="10">
                </td>
            </tr>
            <tr>
                <td >are you satisfied with nursing service?</td>
                <td>
                    <input name="q4" type="radio" value="0">
                </td>
                <td>
                    <input name="q4" type="radio" value="3">
                </td>
                <td>
                    <input name="q4" type="radio" value="5">
                </td>
                <td>
                    <input name="q4" type="radio" value="10">
                </td>
            </tr>
            <tr>
                <td >are you satisfied with the level of the doctor?</td>
                <td>
                    <input name="q5" type="radio" value="0">
                </td>
                <td>
                    <input name="q5" type="radio" value="3">
                </td>
                <td>
                    <input name="q5" type="radio" value="5">
                </td>
                <td>
                    <input name="q5" type="radio" value="10">
                </td>
            </tr>
        </tbody>
    </table>
    <input name="number" type="text" value="<?= $_SESSION["number"] ; ?>" style="visibility:hidden">
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>