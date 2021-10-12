<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application de conversion</title>
</head>
<body>
    <div class="container">
        <h3>Convertisseur de numéro de téléphone de 8 à 10 chiffres</h3>

    <form action="index.php" method="post">
        <p>Entrez votre numéro à 8 chiffres</p>
        <input type="number" name="num" id="num">
        <button type="submit">Convertir</button>
        <p id="convert"></p>
    </form>

    </div>
    
    <style>
        .container{
            text-align: center;
        }
        input{
            padding: 0.5em;
        }
        button{
            background-color: #000;
            color: #fff;
            border: none;
            padding: 0.7em;
            border-radius: 0.5em;
            cursor: pointer;
        }
    </style>
    <?php
        $org = array('07', '08', '09', '47', '48', '49', '57', '58', '59', '67', '68', '69', '77', '78', '79', '87', '88', '89', '97', '98', '99');
        $mtn = array('04', '05', '06', '44', '45', '46', '54', '55', '56', '64', '65', '66', '74', '75', '76', '84', '85', '86', '94', '95', '96');
        $moov = array('01', '02', '03', '41', '42', '43', '51', '52', '53', '61', '62', '63', '71', '72', '73', '81', '82', '83', '91', '92', '93');
        if (isset($_POST['num'])) {
            if (strlen($_POST['num']) == 8) {
                $num8 = $_POST['num'];
                $indice = $num8[0] . $num8[1];
                if (in_array($indice, $org)) {
                    $num10 = '07'.$num8;
                    echo "<p style='text-align: center'> Votre numéro à 10 chiffres est:" .$num10. "</p>" ;
                }
                else if (in_array($indice, $mtn)) {
                    $num10 = '05'.$num8;
                    echo "<p style='text-align: center'> Votre numéro à 10 chiffres est:" .$num10. "</p>" ;
                }
                else if (in_array($indice, $moov)) {
                    $num10 = '01'.$num8;
                    echo "<p style='text-align: center'> Votre numéro à 10 chiffres est:" .$num10. "</p>" ;
                }
                else{
                    echo "<p style='text-align: center'> Votre numéro n'est au bon format </p>" ;

                }
            }else{
                echo'Le numero est incorrect';
            }
        }
    ?>
</body>
</html>