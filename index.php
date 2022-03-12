<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="dist/app.css">
    <script type="module" src="dist/app.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>Noteuniv</title>
</head>

<body class="bg-nu-gray-100">
    <?php
    if (!empty($_GET)) {
        $page = $_GET['p'];
        if ($page) {
    ?>
    <div class="grid grid-cols-12">
        <?php
                include("./views/parts/sidebar.php");
                ?>
        <div class="col-span-10 minH-screen flex flex-col">
            <?php
                    include("./views/parts/header.php");
                    $file = "./views/" . $page . ".php";
                    if (file_exists($file)) {
                    ?>
            <div class="flex-grow">
                <?php
                            include($file);
                            ?>
            </div>
            <?php
                    } else {
                        echo '404';
                    }

                    include("./views/parts/footer.php");
                    return;
                    ?>
        </div>
    </div>
    <?php
        }
    }
    include("./views/login.php");
    ?>
</body>

</html>