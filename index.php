<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="dist/app.css">
    <script type="module" src="dist/app.js" defer></script>
    <title>Noteuniv</title>
</head>

<body>
    <?php
    if (!empty($_GET)) {
        $page = $_GET['p'];
        if ($page) {
            include("./views/parts/header.php");
            include("./views/parts/sidebar.php");

            $file = "./views/" . $page . ".php";
            if (file_exists($file)) {
                include($file);
            } else {
                echo '404';
            }

            include("./views/parts/footer.php");
            return;
        }
    }
    include("./views/login.php");
    ?>
</body>

</html>