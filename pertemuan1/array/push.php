<?php
//Array_push
$komponen = ["Mobo", "Processor", "RAM", "SSD", "GPU"];

//Menambahkan elemen diakhir array
array_push($komponen, "PSU", "Cassing");

echo "Setelah Push<br>";
foreach($komponen as $k); {
    echo $k. "<br>";
}
?>
