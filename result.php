<?php include './header.php'; ?>
<div class="container text-center p-5">
    <h1>ผลลัพธ์</h1>
    <h3><?php

        switch ($_GET['mode']) {
            case 'triangle':
                $result = 1 / 2 * $_POST['base'] * $_POST['height'];
                echo $result;
                break;
            case 'circular':
                $result = 3.14 * $_POST['radius'] * $_POST['radius'];
                echo number_format($result, 2);
                break;

            default:
                # code...
                break;
        }
        ?></h3>
</div>
<?php include './footer.php'; ?>