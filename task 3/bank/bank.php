<?php
$X = "";
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
    <label for="">name</label>
    <input name="name" type="text" value="<?= $_POST['name'] ?? "" ?>"><br>
    <label for="">loan ammount</label>
    <input name="amount" type="text" value="<?= $_POST['amount'] ?? "" ?>"><br>
    <label for="">loan years</label>
    <input name="years" type="text" value="<?= $_POST['years'] ?? "" ?>"><br>
    <button type="submit">calc</button>
</form>
<table style="<?php if(isset($_POST["name"]) && isset($_POST["amount"]) && isset($_POST["years"])){
echo "visibility:visble" ;
}else{
    echo "visibility:hidden" ;
}  ?>" class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>name</th>
            <th>interest rate</th>
            <th>loan after interest</th>
            <th>monthly pay</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $_POST["name"]?></td>
                <td><?php if($_POST["years"]<= 3){
                    $X = (($_POST["amount"] / 100) * 10) * $_POST["years"];
                    echo $X;
                    }else{
                    $X = (($_POST["amount"] / 100) * 15) * $_POST["years"];
                    echo $X; 
                    }?></td>
                <td><?= $_POST["amount"] + $X;?></td>
                <td><?= ($_POST["amount"] + $X) / ($_POST["years"] * 24)?></td>
            </tr>
        </tbody>
</table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>