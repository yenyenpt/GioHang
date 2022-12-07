<?php
    $sanPham = [
        [
            "id"=>1,
            "tenSP" => "cay",
            "giaTien" => "12000"
        ],
        [
            "id"=>2,
            "tenSP" => "banh",
            "giaTien" => "14000"
        ],
        [
            "id"=>3,
            "tenSP" => "ban",
            "giaTien" => "120"
        ],
        [
            "id"=>1,
            "tenSP" => "sua",
            "giaTien" => "1900"
        ],
    ];

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
    <a href="./cart.php">GioHang</a>
    <table>
        <thead>
            <td>tenSP</td>
            <td>giaTien</td>
            
        </thead>
        <tbody>
            <?php foreach($sanPham as $value): ?>
                <tr>
                    <td><?php echo $value["tenSP"]?></td>
                    <td><?php echo $value["giaTien"]?></td>
                    <td>
                        <a href="./addToCart.php?id=<?php echo $value["id"]?>">
                        
                Add to cart
            </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>