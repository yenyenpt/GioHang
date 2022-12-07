<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            border: 1px solid black;
            width: 100%;
            
        }
        td{
            border: 1px solid black;
            padding: 20px;
            text-align: center;

        }
    </style>
</head>
<body>
    <a href="./index.php">Trang chu</a>
    <table>
        <thead>
            <td>tenSP</td>
            <td>giaTien</td>
            <td>xoa</td>
        </thead>
        <tbody>
        <?php foreach($_SESSION["cart"] as $value): ?>
            <tr>
                    <td><?php echo $value["tenSP"]?></td>
                    <td><?php echo $value["giaTien"]?></td>
                    <td><a href="./delete.php?id=<?php echo $value["id"]?>">Xoa</a></td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</body>
</html>