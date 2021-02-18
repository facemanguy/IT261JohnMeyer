<?php
// substr() and str_replace()

$statement = 'The presidential election is around the corner';
echo $statement;
echo '<br>';
echo substr($statement, 0);
echo '<br>';
echo substr($statement, 0, 5);
echo '<br>';
echo substr($statement, 4, 12);
echo '<br>';
echo substr($statement, -8);
echo '<br>';
echo substr($statement, -10, 6);
echo '<br>';
echo substr($statement, 14);
echo '<br>';

$statement2 = 'This election will be the most important election in my lifetime!';
echo $statement2;
echo '<br>';
echo str_replace('my','our', $statement2);
echo '<br>';

$people['Donald_Trump'] = 'trump_Former President from NY.';
$people['Joe_Biden'] = 'biden_President from PA.';
$people['Hilary_Clinton'] = 'clint_Secretary from NY.';
$people['Bernie_Sanders'] = 'sande_Senator from VT.';
$people['Elizabeth_Warren'] = 'warre_Senator from MA.';
$people['Kamala_Harris'] = 'harri_Vice President from CA.';
$people['Cory_Booker'] = 'booke_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti_Transportation Secretary from IN.';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN.';
$people['Julian_Castro'] = 'castr_Former Housing/Urban from TX.';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table of images</title>
</head>
<body>
    <h1>Extra Credit add 4th column with different image</h1>
    <table>
        <?php foreach($people as $name => $image): ?>
            <tr>
                <td><img src="pics/<?php echo substr($image, 0, 5) ;?>.jpg"<?php echo $name;?>"></td>
                <td><?php echo str_replace('_', ' ', $name);?>
                <td><?php echo substr($image, 6);?></td>
            </tr>
        <?php endforeach ;?>
    </table>


</body>
</html>
