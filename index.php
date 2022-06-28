<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <form action='index.php' method='post' class="text-dark text-center bg-warning bg-opacity-75">
        <label for='nom'>Please enter any string to show <span class="fw-bolder text-danger">baby shark *<span> </label>
        <input required type='text' name='nom' id='nom' class="p-2 rounded-pill">
        <input type='submit' value='Submit' class="bg-success p-2 rounded-pill text-light">
    </form>

    <?php 
    function babySharkLyrics(){$c="shark";$k="$c!<br>";
        $h="Let's go hunt";return z("Baby ",$c).$k.z("Mommy ",$c).$k.z("Daddy ",$c).$k.z("Grandma ",$c).$k.z("Grandpa ",$c).$k.z($h,'')."!<br>Run away,…";}function z($a,$b){$o=" doo doo";$c=",$o$o$o<br>";return"$a$b$c$a$b$c$a$b$c$a";}
    if($_POST){echo '<div class="text-center">'.babySharkLyrics().
        '<form method="get" action="index.php">'.
        '<button type="submit">'.'hide baby shark !'.'</button>'.'</form>'.
        '</div>';}
    ?>
</body>
</html>