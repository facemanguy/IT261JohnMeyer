<?php
// heredoc

$book = "Game of Thrones";
$author = "George R. R. Martin";
$character = "Tyrion Lannister";
$actor = "Peter Dinklage";
$content = <<<EOT
<p>The book I've chosen is $book, written by $author, which was a successful TV series on HBO. One of the largest shows
of the last few years it garnered reviews in the 90th percentile for it's first 7 seasons as well as <b>59 emmey awards.</b> All based off of $author's books.
</P>

<P><i>$actor</i> who plays $character is my favorite character. He does an excellent job throughout the entire series! This content should 
display correctly with the use of heredoc allowing all of my tags and variables to be read as one block!</p>
EOT;

echo $content;

?>