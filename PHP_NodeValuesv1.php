
<html>
<body>

<?php
$xml=simplexml_load_file("book.xml") or die("Error: Cannot create object");
foreach($xml->children() as $books) {
        echo $books->title . ", ";
        echo $books->author . ", ";
        echo $books->year . ", ";
        echo $books->price . "<br>";
}
?>

</body>
</html>

<html>
<body>

<?php
$xml=simplexml_load_file("book.xml") or die("Error: Cannot create object");
echo $xml->book[0]['category'] . "<br>";
echo $xml ->book[1]->title['lang'];
?>
</body>
</html>

<html>
<body>
<?php
$xml=simplexml_load_file("book.xml") or die("Error: Cannot create object");
foreach($xml->children()  as $books) {
    echo $books->title['lang'];
    echo "<br>";
}
?>
</body>
</html>