<html lang="">
<head>
    <style>
        .collumn {
            width: 100px;
            height: 100px;
            border: solid 1px black
        }

        .odd {
            background-color: #FFFFFF;
            border: solid 1px black;
        }

        .even {
            background-color: rgb(82, 32, 32);
            border: solid 3px purple;
        }
    </style>
    <title></title>
</head>
<body>
<table>
    <tbody>
    <?php for ($j = 0; $j < 7; $j++) { ?>
        <tr>
            <?php for ($i = 0; $i < 7; $i++) {
                $displayClass = "odd";
                if (($i === 1 || $i === 5) && ($j === 1 || $j === 5)) {                
                    $displayClass = "even";
                } elseif (($i === 0 || $i === 6) && ($j === 0 || $j === 6)) {
                    $displayClass = "even";
                } elseif (($i === 2 || $i === 4) && ($j === 2 || $j === 4)) {
                    $displayClass = "even";
                } elseif (($i === 3 || $i === 3) && ($j === 3 || $j === 3)) {
                    $displayClass = "even";
                } ?>
                <td class="collumn <?= $displayClass; ?>"></td>
            <?php } ?>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>