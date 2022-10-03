    <?php
    global $casts;
    $casts = array("isset", "empty", "bool", "isnull");

    function typeTester($casting, $var)
    {
        switch ($casting) {
            case $casting == "isset":
                $answer = isset($var);
                break;
            case $casting == "empty":
                $answer = empty($var);
                break;
            case $casting == "bool":
                $answer = (bool)$var;
                break;
            case $casting == "isnull":
                $answer = is_null($var);
                break;
        }

        if ($answer) {
            echo "true";
        } else {
            echo "false";
        }
    }


    function rowsCount()
    {
        static $row = 1;
        echo $row++;
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Document</title>
        <style>
            table {
                width: 75%;
                text-align: center;
                border: solid red 2px;
                border-collapse: collapse;
            }

            th,
            td {
                border-bottom: solid 2px red;
            }

            th {
                background-color: pink;
            }
        </style>
    </head>

    <body>
        <table>
            <tr>
                <th>Fila</th>
                <th>Contenido de $var</th>
                <th>isset($var)</th>
                <th>empty($var)</th>
                <th>(bool) $var</th>
                <th>isnull($var)</th>
            </tr>
            <tr>
                <td><?php rowsCount() ?></td>
                <td>$var = null</td>
                <?php
                $var = null;
                for ($i = 0; $i < count($casts); $i++) {
                    echo "<td>";
                    typeTester($casts[$i], $var);
                    echo "</td>";
                }
                ?>
                </td>
            </tr>
            <tr>
                <td><?php rowsCount() ?></td>
                <td>$var = 0</td>
                <?php
                $var = 0;
                for ($i = 0; $i < count($casts); $i++) {
                    echo "<td>";
                    typeTester($casts[$i], $var);
                    echo "</td>";
                }
                ?>
            </tr>
            <tr>
                <td><?php rowsCount() ?></td>
                <td>$var = true</td>
                <?php
                $var = true;
                for ($i = 0; $i < count($casts); $i++) {
                    echo "<td>";
                    typeTester($casts[$i], $var);
                    echo "</td>";
                }
                ?>
            </tr>
        </table>
        <br>
        <?php
            $output = "<table>";
            for($i = 0;$i < 11;$i++){
                $output .= "<tr>";
                for($y = 0;$y < 11;$y++){
                    $calculo = $i*$y;
                    $output .= "<td>$i * $y = $calculo</td>";
                }
                $output .= "</tr>";
            }
            $output .= "</table>";
            echo $output;
        ?>
    </body>
    </html>