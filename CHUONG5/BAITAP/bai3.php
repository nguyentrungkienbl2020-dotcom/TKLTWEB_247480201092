<?php
$x=3;
$y=5;
$z=0;
$nh1=rand(0,10000);
$nh2=rand(0,10000);

if ($nh1>$nh2)
echo "<h1>lấy ngẫu nhiên 2 số là $nh1 và $nh2 ta thấy <br> $nh1>$nh2</h1>";
else
echo "<h1>lấy ngẫu nhiên 2 số là $nh1 và $nh2 ta thấy <br> $nh1=<$nh2 </h1>";

echo "phép cộng  ".($x+$y)."";
echo "<br>phép chừ ".($x-$y)."";
echo "<br>phép nhân  ".($x*$y)."";
echo "<br>phép chia  ".($x%$y)."";
echo "<br>phép chia lây dư  ".($x%=$y)."";


?>