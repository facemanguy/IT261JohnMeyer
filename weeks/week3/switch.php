<?php
//switch

// echo date('Y');
// echo '<br>';
// echo date('l');

//if today is thursday show thursday content

//global variable
//$_GET , $_POST

date_default_timezone_set('America/Los_Angeles');
$todayDate = date('H:i A');

if(isset($_GET['today'])){
    $today = $_GET['today'];
}else{
    $today = date('l');
}

//echo '<br>';

switch($today){
    case 'Monday':
    $character = 'Monday is Jean-Luc Picard day';
    $pic = 'picard.jpg';
    $alt = "Jean-Luc Picard";
    $content = "Jean-Luc Picard was a celebrated Starfleet officer, archaeologist, writer, historian and diplomat who served throughout much of the 24th century. The highlights of his career were centered around assignments as commanding officer of the Federation starships USS Stargazer, USS Enterprise-D, and the USS Enterprise-E. In these roles, Picard not only witnessed major turning points of recent galactic history, but played a key role in them also, from making first contact as captain of the Federation's flagship with no fewer than 27 alien species, including the Ferengi and the Borg. He also became the chief contact point with the Q Continuum, and served as Arbiter of Succession of the Klingon Empire, where he presided over the investiture of Chancellor Gowron. Picard would expose the Romulan Star Empire as backers of Gowron's chief rivals, later aiding a Romulan underground movement of dissidents to gain a toehold on the Romulan homeworld. He continued to serve as captain of the Enterprise-E, the sixth Federation starship to bear the name, until at least the early 2380s.";
    $background = 'white';
    break;

    case 'Tuesday':
    $character = 'Tuesday is Data day';
    $pic = 'data.jpg';
    $alt = "Data";
    $content = 'Lieutenant Commander Data was a Soong-type android, the first and only such being to ever enter Starfleet. Data was created some time in the 2330s and was killed in 2379, sacrificing himself to save the crew of the USS Enterprise-E.';
    $background = 'darkorange';
    break;
    
    case 'Wednesday':
    $character = 'Wednesday is Geordi La Forge day';
    $pic = 'geordi.jpeg';
    $alt = "Geordi La Forge";
    $content = 'Geordi La Forge was a Human male Starfleet officer who originally was the helmsman of the USS Enterprise-D during 2364, with the rank of lieutenant junior grade. He was promoted to lieutenant and later lieutenant commander and became the chief engineer of the Enterprise-D and later USS Enterprise-E, both under Captain Jean-Luc Picard.';
    $background = 'yellow';
    break;

    case 'Thursday':
    $character = 'Thursday is Beverly Crusher day';
    $pic = 'crusher.jpg';
    $alt = "Beverly Crusher";
    $content = 'Commander Beverly C. Crusher, MD (née Howard) was the chief medical officer aboard the USS Enterprise-D and its successor, the USS Enterprise-E, both under the command of Captain Jean-Luc Picard. She briefly left her post as CMO of the Enterprise-D to become head of Starfleet Medical, only to return shortly after. She was a Fellow of the Academy of Starfleet Surgeons (Sol Chapter).';
    $background = 'lightblue';
    break;

    case 'Friday':
    $character = 'Friday is Worf day';
    $pic = 'worf.jpg';
    $alt = "Worf";
    $content = "Worf – son of Mogh, of the Klingon House of Martok, of the Human family Rozhenko; mate to K'Ehleyr, father to Alexander Rozhenko, and husband to Jadzia Dax; Starfleet officer and soldier of the Empire; bane of the House of Duras; slayer of Gowron; Federation ambassador to Qo'noS – was one of the most influential Klingons of the latter half of the 24th century.";
    $background = 'red';
    break;
    
    case 'Saturday':
    $character = 'Saturday is William Riker day';
    $pic = 'riker.jpg';
    $alt = "William Riker";
    $content = 'William Thomas "Will" Riker was a 24th century male Human Starfleet officer. During his career, a transporter accident resulted in two Rikers, with each one being identical to the other, as well as genetically indistinguishable. Their personalities and memories were the same up to the point of duplication. The other Riker would remain trapped on Nervala IV for eight years without anyone knowing of his exsistance, and, after being rescused, would eventually decide to use his middle name and became known as Thomas Riker. Shortly after the accident, Will Riker would go on to serve as first officer for Captain Jean-Luc Picard for the next 15 years on the USS Enterprise-D and USS Enterprise-E before finally accepting his own command with the USS Titan.';
    $background = 'salmon';
    break;

    case 'Sunday':
    $character = 'Sunday is Deanna Troi day';
    $pic = 'troi.jpg';
    $alt = "Deanna Troi";
    $content = "Deanna Troi was a female Betazoid–Human hybrid Starfleet officer. Under the command of Captain Jean-Luc Picard, she served as the counselor aboard the USS Enterprise-D and the USS Enterprise-E. In 2379, Troi transferred to the USS Titan. By 2399, she and her husband William T. Riker lived on the planet Nepenthe with their daughter, Kestra Troi-Riker. Their son, Thaddeus Troi-Riker, died of Mendaxic neurosclerosis soon after their arrival on Nepenthe. As a half-Betazoid, Troi was capable of extra-sensory empathy, but was incapable of reading aliens with brain structures dissimilar to Humans and other Betazoids, such as the Breen and the Ferengi. Like most Betazoids, Troi had telepathic abilities. Due to her half-Human heritage, however, the range of her telepathic abilities was limited compared to full-blooded Betazoids, and she could usually only read the thoughts of other Betazoids, most notably her mother. Troi's empathic skills made her an important asset to the Enterprise-D and her abilities were often particularly useful when dealing with hostile races. Since she could usually determine, through use of her abilities, whether others were lying, she repeatedly proved herself invaluable in many suspenseful situations.";
    $background = 'violet';
    break;
}

?>

<!doctype html>
<html lang="en">
<head>
    <title>Switch</title>
    <meta charset="UTF-8">
    <style>
        ul{list-style: none;}
        .white{background-color: #eee;}
        .yellow{background-color: yellow;}
        .darkorange{background-color: darkorange;}
        .lightblue{background-color: lightskyblue;}
        .red{background-color: darkred;}
        .salmon{background-color: salmon;}
        .violet{background-color: violet;}
    </style>
</head>
<body class="<?php echo $background;?>">
    <h1>
        <?php
        if($todayDate <=11){
            echo 'Good Morning!';
        }elseif($todayDate <= 16){
            echo "Good Afternoon";
        }else{
            echo "Good Evening";
        }
        echo "<br>";
        echo $character;?>
    </h1>
    <img src="../../images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
    <p><?php echo $content;?></p>
    <h2>Check out the other days below</h2>
    <ul>
        <li><a href="switch.php?today=Monday">Monday</a></li>
        <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
        <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
        <li><a href="switch.php?today=Thursday">Thursday</a></li>
        <li><a href="switch.php?today=Friday">Friday</a></li>
        <li><a href="switch.php?today=Saturday">Saturday</a></li>
        <li><a href="switch.php?today=Sunday">Sunday</a></li>
    </ul>


</body>
</html>