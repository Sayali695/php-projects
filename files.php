<?php

// there are many functions to read write in the file
// or to fetch the file or clode the file via php...........refer the code from code with harry
// fgets,fclose, fwrite,fread,filesize.

$a = readfile("myFile.txt");
// echo "$a";   this will also print the no. of characters.

$fptr = fopen("myFile.txt","r");
echo"<br>";

echo var_dump($fptr);
$content = fread($fptr, filesize("myFile.txt"));
echo"<br>";
echo $content;



?>
<!-- cookie is the information that is stored in the users end 
and the when we visit the website again the due to cookie our preferences is noted down and suggestions is given accordingly. -->


how to set cookie
<!-- setcookie("category","Books",time()+86400,"/"); -->
<!-- here the cookie is set we can check it in network slot of inspect. 
the cookie will be used for a day itself and then it will be destroyed afterwards.-->