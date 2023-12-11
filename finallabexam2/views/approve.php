<?php
    require_once('../models/productModel.php');
    $list = viewproducts();
?>

<html>
    <body>
        List Of Products:
        <table>
            
                <?php while ($product = mysqli_fetch_assoc($list)) { ?>
                <form method="post" action="../controllers/approveCheck.php">
                    <tr>
                    <td><?php echo $product['id'] ?></td>
                    <td><?php echo $product['productname'] ?></td>
                    <td><?php echo $product['price'] ?></td>
                    <td><input hidden type="text" name="id" value="<?php echo $product['id'] ?>">
                        <input type="submit" name="approve" value="approve"></td>
                    </tr>
                </form>
                <?php } ?>
            
        </table>
    </body>
</html>