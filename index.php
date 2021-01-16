<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>John Meyer Portal</title>
    <meta name="description" content="John Meyer Portal">
    <meta name="author" content="John Meyer">
    <link rel="stylesheet" href="css/portal.css">
    <link rel="stylesheet" href="css/nav.css">
</head>

<body>
     <header>
     <h1>John Meyer's IT261 Portal</h1>
     <nav class="topnav" id="myTopnav">
       <a href="index.html" class="active">Welcome</a>
       <a href="elements.html">HTML Elements</a>
       <a href="aia.html">AIA</a>
       <a href="big/index.html">BIG</a>
       <a href="http://w3schools.com" target="_blank">W3 Schools</a>
       <a href="https://www.linkedin.com/learning/" target="_blank">LinkedIn Learning</a>
       <a href="flowchart.html">Flowchart</a>
       <a href="fp/index.html">Final Project</a>
       <a href="contact.php">Contact Sara</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
     </header>
     
   <div class="wrapper">
     
     <img class="desktop" src="images/desktop.jpg" alt="Photo of an adorable GSD puppy" />
       
     <img class="tablet" src="images/tablet.jpg" alt="Photo of an adorable GSD puppy" />
       
     <img class="phone" src="images/phone.jpg" alt="Photo of an adorable but large GSD in the lap of his best buddy" />
       
       <h2 class="subheader">A little about me!</h2>
       
       <p>Replace this Lorem Ipsum with a couple of paragraphs about me. Remember this is a public website so you don't want to put anything on here that you don't want the whole world to see! ;)</p>
       <p>Replace this Lorem Ipsum with a couple of paragraphs about me. Remember this is a public website so you don't want to put anything on here that you don't want the whole world to see! ;)</p>
       <p>Replace this Lorem Ipsum with a couple of paragraphs about me. Remember this is a public website so you don't want to put anything on here that you don't want the whole world to see! ;)</p>
       
     <footer>
      <p><small>&copy; 2019 by <a href="contact.php">Sara Newman</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
</body>

</html>