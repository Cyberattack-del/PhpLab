<html>
<head>
    <title>Calculate Age</title>
</head>
<body bgcolor="aqua">
    <h2>Compute Age on a Given Date</h2>
    <?php
    $birthdate = "2004-12-29";
    $current_date = date('Y-m-d');
    $birth_date_obj = new DateTime($birthdate);
    $current_date_obj = new DateTime($current_date);
    $diff = $current_date_obj->diff($birth_date_obj);
    $age_years = $diff->y;
    echo "Age: $age_years years";
    ?>
</body>
</html>