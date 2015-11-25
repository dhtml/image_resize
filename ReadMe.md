## Introduction
IMAGE_RESIZE is a library that allows you to generate thumbnails quite fast in PHP.


It's created and developed by Anthony Ogundipe, CEO of [DHTMLExtreme](http://www.dhtmlextreme.net).

## Features
* It's lightweight (just 1 file).
* It should save you lots of work.
* It's easy to use (no need to be a hardcore coder).
* You can implement it in an existing project
* Compatible with PHP5+



## Quick Start
* Download the [zip master](https://github.com/dhtml/image_resize/archive/master.zip)
* Extract the zip master into your web directory
* Open the example folder to check out the basic and advanced functionalities.


Simple Usage:

```
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
```


## License

`phpformapi`'s code in this repo uses the MIT license, see our `LICENSE` file.
