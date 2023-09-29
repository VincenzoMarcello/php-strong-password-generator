<?php

$pass_length = $_GET["passlng"] ?? "";

function generate_password($pass_length)
{
    $possible_chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()";


    $pass = "";
    for ($i = 0; $i < $pass_length; $i++) {
        $random = rand(0, strlen($possible_chars) - 1);
        $pass .= $possible_chars[$random];

    }

    return $pass;

}

$has_length = isset($_GET["passlng"]);

if ($has_length) {

    $generate_password = generate_password($pass_length);

    // SENZA FUNCTION
    // $possible_chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()";
    // $pass_length = $_GET["passlng"];

    // $pass = "";
    // for ($i = 0; $i < $pass_length; $i++) {
    //     $random = rand(0, strlen($possible_chars) - 1);
    //     $pass .= $possible_chars[$random];

    // }

    // echo $pass;

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- STYLE -->
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <!-- FACCIAMO UN FORM IN CUI L'UTENTE DECIDE LA LUNGHEZZA DELLA PASSWORD -->
    <div class="container mt-5">
        <form method="GET">
            <label for="passlng">
                <h2>Scegli la lunghezza della tua password:</h2>
            </label>
            <div>
                <div class="input-group mb-3">
                    <input type="number" id="passlng" name="passlng" min="5" max="15" class="form-control"
                        placeholder="lunghezza password...">
                    <button class="btn btn-outline-secondary" type="submit">Invia</button>
                </div>
            </div>
        </form>
        <h2>la tua password è:</h2>
        <h2>
            <?php echo $generate_password ?? "" ?>
        </h2>
    </div>
</body>

</html>