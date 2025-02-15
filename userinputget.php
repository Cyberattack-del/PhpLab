<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Corrected form tag with quotes for action and input -->
    <form action="userinputget.php" method="GET">
        Name: <input type="text" name="name">
        <input type="submit">
    </form>

    <?php
    #"Hello, " .
    #####################
    #            HAISH  #
    #####################"Hello, " .
    // Check if the 'name' is set in the GET request
    if (isset($_GET['name'])) {
        //echo  htmlspecialchars($_GET["name"]);
        $_GET["name"];
    }
    ?>
</body>
</html>
