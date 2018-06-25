
<?php
   $c = "HELLO WORLD";
$p=0;
$x=0;
while($c[$x]!=NULL)
{
	
    $p++;
    $x++;
}
$a=" ";
for($x = $p; $x >=0; $x--)
{
		$a.=$c[$x];
	
}
echo "reversed string"."\n";
echo $a;
?>
