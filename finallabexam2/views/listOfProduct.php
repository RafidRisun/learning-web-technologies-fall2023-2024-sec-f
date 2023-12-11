<?php
    require_once('../models/productModel.php');
    $list = viewproductlist();
?>

<html>
    <body>
        List Of Products:
        <table>
            <tr>
                <?php while ($product = mysqli_fetch_assoc($list)) { ?>
                    <td><?php echo $product['id'] ?></td>
                    <td><?php echo $product['productname'] ?></td>
                    <td><?php echo $product['price'] ?></td>
                <?php } ?>
            </tr>
        </table>
    </body>
</html>