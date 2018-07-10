
 <?php
$d=strtotime("July 1 2015");
$k=-1;
$l=-1;
$c=strtotime("July 1 2015");
if(date("D", $d)=="Fri")
{
    
    $k++;
}
while(date("m", $d)=='07')
{
    $d=strtotime("next Friday",$d);
    $k++;
}
$k--;
 echo "No .of Fridays " . $k;
 if(date("D", $c)=="Sat")
{
    
    $l++;
}
while(date("m", $c)=='07')
{
    $d=strtotime("next Saturday",$c);
    $l++;
}
 echo "No .of Saturays " . $l;
?> 
