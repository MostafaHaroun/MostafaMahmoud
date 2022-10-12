<?php
if(isset($_GET["numOfItem"])){
    $x = $_GET["numOfItem"];
}
print_r($_POST);

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
    <form action="" method="get">
        <label for="">name</label>
        <input name="name" type="text" value="<?= $_GET['name'] ?? "" ?>"><br>
        <label for="">city</label>
        <select name="city" value="<?= $$_GET['city'] ?? "" ?>">
        <option >cairo</option>
        <option >giza</option>
        <option >alex</option>
        <option >other</option>
        </select><br>
        <label for="">num of items</label>
        <input name="numOfItem" type="text" value="<?= $_GET['numOfItem'] ?? "" ?>"><br>
        <button type="submit">next</button>
    </form>
    <form action="" method="post">
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>produst name</th>
                    <th>price</th>
                    <th>quantities</th>
                </tr>
                </thead>
                <tbody><?php for($i = 0 ;$i < $x ; $i++){
                    echo '<tr>
                    <td><input type="text"></td>
                    <td><input name="price" type="number"></td>
                    <td><input name="quant" type="number"></td>
                </tr>';
                }
                ?>
                </tbody>
        </table>
        <button type="submit">submeit</button>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>