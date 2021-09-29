<?php
// int
echo 5 <=> 5; // 0
echo 6 <=> 5; // 1
echo 5<=> 6;   //-1

// string
echo "g" <=> "g"; // 0
echo "g" <=> "f"; // 1
echo "f" <=> "g"; // -1

// float
echo 4.5 <=> 4.5; // 0
echo 4.5 <=> 5.5; // -1
echo 5.5 <=> 4.5; // 1
 

?>
