<?php
include "../lib/image_resize.php";
$options=Array(
array('path'=>'size1.jpg','w'=>50,'h'=>50,'q'=>100),
array('path'=>'size2.gif','w'=>100,'h'=>100,'q'=>100),
array('path'=>'size3.png','w'=>150,'h'=>150,'q'=>9),
array('path'=>'size4.jpeg','w'=>200,'h'=>200,'q'=>100),
);

new IMAGE_RESIZE('original.jpg',$options);
?>
<p>This library can accept and create thumbnails in the following image extensions: jpg,jpeg,gif and png</p>
<p>In this example, we have an original image called "original.jpg".</p>
<p>We now went ahead to create thumbnails in the following specifications:</p>
<p>size1.jpg with a width of 50 and height of 50, quality at 100</p>
<p>size2.gif with a width of 100 and height of 100, quality at 100</p>
<p>size3.png with a width of 150 and height of 150, quality at 9</p>
<p>size4.jpeg with a width of 200 and height of 200, quality at 100</p>
<p></p>
<p></p>
<p></p>
