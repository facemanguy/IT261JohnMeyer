<?php
// Currency Conversions
// 1 ruble = 0.013 dollars
// 1 pound sterling = 1.28 dollars
// 1 canadian dollar = 0.79 dollars
// 1 euro = 1.18 dollars
// 1 yen = 0.0094 dollars

$ruble = 10007;
$ruble *= 0.013;
$rubleFriendly = number_format($ruble, 2);
$sterling = 500;
$sterling *= 1.28;
$sterlingFriendly = number_format($sterling, 2);
$canadian = 5000;
$canadian *= 0.79;
$canadianFriendly = number_format($canadian, 2);
$euros = 1200;
$euros *= 1.18;
$eurosFriendly = number_format($euros, 2);
$yen = 2000;
$yen *= 0.0094;
$yenFriendly = number_format($yen, 2);

$total = $ruble + $sterling + $canadian + $euros + $yen;
$totalFriendly = number_format($total, 2);

?>

<!<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Currency Logic - John Meyer</title>
        <meta name="description" content="A currency calculator for week 2 of it261">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            /* inline styles are bad practice */
            table {
                width: 300px;
                margin: 0 auto;
                border: 1px solid orangered;
                border-collapse: collapse;
            }

            td {
                border: 1px solid orangered;
                padding: 1rem;
            }

            th {
                padding: 1rem;
                background-color: palegoldenrod;
            }
        </style>
    </head>
    <body>
        
        <table>
            <tr>
                <th>Money</th>
                <th>Dollars</th>
            </tr>
            <tr>
                <td>Rubles</td>
                <td><?php echo '$'.$rubleFriendly.' '; ?></td>
            </tr>
            <tr>
                <td>Sterling</td>
                <td><?php echo '$'.$sterlingFriendly.' '; ?></td>
            </tr>
            <tr>
                <td>Canadian</td>
                <td><?php echo '$'.$canadianFriendly.' '; ?></td>
            </tr>
            <tr>
                <td>Euros</td>
                <td><?php echo '$'.$eurosFriendly.' '; ?></td>
            </tr>
            <tr>
                <td>Yen</td>
                <td><?php echo '$'.$yenFriendly.' '; ?></td>
            </tr>
            <tr>
                <th>Total</th>
                <th><?php echo '$'.$totalFriendly.' '; ?></th>
            </tr>
        </table>
        
    </body>
</html>
