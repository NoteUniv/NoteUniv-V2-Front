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
    function getSVG($file)
    {
        $path = "./src/assets/images/";
        $fullpath = $path . $file;
        if (file_exists($fullpath)) {
            echo file_get_contents($fullpath);
        } else {
            echo 'File not found';
        }
    }
    if (!empty($_GET)) {
        $page = $_GET['p'];
        if ($page) {
    ?>
    <div class="flex w-full overflow-hidden">
        <?php
                include("./views/parts/sidebar.php");
                ?>
        <div class="h-screen max-h-screen flex flex-col flex-grow min-w-0 overflow-x-hidden overflow-y-auto">
            <div>
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