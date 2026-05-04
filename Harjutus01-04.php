<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HARJUTUSED</title>
</head>
<body>
    <?php
    $valik = $_GET['calc'] ?? '';

    ?>
    <H1>Harjutus 1</H1>
    <p>
        <?php
        //Jarek Mandre, 17.04
        // Harjutus 1

        $nimi = "Jarek";
        $sa = 2008;
        $tähtkuju = "Leo";


        echo $nimi. "<br>" .$sa. "<br>" .$tähtkuju;
        echo "<br>";
        echo "\"It's My Life\" - Dr. Alban<br>";
        echo '(\(\\ <br> ( -.-) <br> o_(")(")';

        ?>
    </p>

    <H1>Harjutus 2</H1>
    <p>
        <?php
        //Jarek Mandre, 17.04
        // Harjutus 2

        $arv1 = 420;
        $arv2 = 123;

        echo $arv1. " + ". $arv2. " = ". $arv1+$arv2. "<br>";
        echo $arv1. " - ". $arv2. " = ". $arv1-$arv2. "<br>";
        echo $arv1. " ' ". $arv2. " = ". $arv1*$arv2. "<br>";
        echo $arv1. " / ". $arv2. " = ". $arv1/$arv2. "<br>";
        ?>
    </p>

    <H1>Harjutus 3</H1>
    <h2>Trapetsi pindala</h2>
    <form method="get" action="">
        <input type="hidden" name="calc" value="trapets">
        a: <input type="number" name="a" step="0.1" min="0.1" required><br>
        b: <input type="number" name="b" step="0.1" min="0.1" required><br>
        h: <input type="number" name="h" step="0.1" min="0.1" required><br><br>
        <input type="submit" value="Arvuta trapets">
    </form>

    <h2>Rombi ümbermõõt</h2>
    <form method="get" action="">
        <input type="hidden" name="calc" value="romb">
        külg s: <input type="number" name="s" step="0.1" min="0.1" required><br><br>
        <input type="submit" value="Arvuta romb">
    </form>

    <h2>Tulemus</h2>

    <?php
    if ($valik == 'trapets') {   
        $a = isset($_GET['a']) ? (float)$_GET['a'] : 0;
        $b = isset($_GET['b']) ? (float)$_GET['b'] : 0;
        $h = isset($_GET['h']) ? (float)$_GET['h'] : 0;
        $summa = $a + $b;
        $trapetsPindala = ($summa / 2) * $h;
        echo "<p>Trapetsi pindala on " . number_format($trapetsPindala, 1, '.', '') . ".</p>";
    } 
    elseif ($valik == 'romb') {
        $s = isset($_GET['s']) ? (float)$_GET['s'] : 0;
        $kordaja = 4;
        $rombYmber = $kordaja * $s;
        echo "<p>Rombi ümbermõõt on " . number_format($rombYmber, 1, '.', '') . ".</p>";
    } 
    else {
        echo "<p>Täida üks vorm ja vajuta arvuta.</p>";
    }
    ?>

    <H1>Harjutus 4</H1>

    
</body>
</html>