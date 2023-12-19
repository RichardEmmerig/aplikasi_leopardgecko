<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <!-- DROPZONE CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/dropzone.min.css">
    <!-- MY CSS -->
    <link rel="stylesheet" href="assets/style.css">

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <!-- CHART JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- DROPZONE JS -->
    <script src="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/dropzone.min.js"></script>

    <title>Aplikasi Leopard Gecko</title>
</head>

<body>

    <?php
    include_once "components/menu.php";
    ?>

    <div class="content">
        <?php
        if (isset($_GET["menu"])) {
            $menu = $_GET["menu"];
        } else {
            $menu = "";
        }

        switch ($menu) {
            case 'leopard-gecko':
                include_once "components/leopard-gecko.php";
                break;
            case 'tambahleopardgecko':
                include_once "components/tambahleopardgecko.php";
                break;
            case 'projek-breeding':
                include_once "components/projek-breeding.php";
                break;
            case 'telur-clutch':
                include_once "components/telur-clutch.php";
                break;

            default:
                include_once "components/myfarm.php";
                break;
        }

        ?>
    </div>

    <?php
    include_once "components/footer.php";
    ?>

</body>

</html>