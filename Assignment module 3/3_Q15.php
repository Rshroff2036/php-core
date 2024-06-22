<?php
$encodedString = "SGVsbG8gV29ybGQh"; // "Hello World!" encoded in Base64
$decodedString = base64_decode($encodedString);
echo "Decoded string: " . $decodedString . "<br>";

?>
