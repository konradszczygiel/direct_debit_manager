<?php

require_once 'header.php';

?>

<body>

<?php require_once 'menu.php'; ?>

<main role="main" class="container">

<?php

    $action = isset($_GET['action']) ? $_GET['action'] : 'index';

    $fileToLoad = 'pages/' . $action . '.php';

    if (file_exists($fileToLoad)) {
        require_once $fileToLoad;
    }

?>

</main>


<?php require_once 'footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="public/js/popper.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
</body>
</html>
