 <?php 
/*  
echo "<div id='fixed-div'>"  */
?> 

<?php

$minutes=5;  
$dispUsers=50;  
$t=date('Y-m-d H:i:s', time()-$minutes*60);  
// display users who were active in last 10 minutes  
  
$users=DBLookup("select count(*) from user where lastaccess > '".$t."'");  
if ($users>0) {  
    $sql="select * from user where lastaccess > '".$t."'";  
    $rs=CustomQuery($sql);  
  
    if ($data = db_fetch_array($rs)) {  
        echo $users." active user(s): ".$data["username"];  
    }  
    $count=1;  
    while ($data = db_fetch_array($rs)) {  
      if ($count<$dispUsers) {  
            $count++;  
            echo ", ".$data["username"];  
      }  
        else {  
            echo " ...";  
            break;  
        }  
    }  
}  

?>
<?php /* echo "</div>" */  ?>

<P align="center"><FONT 
size="1"></FONT><BR></P>
<P align="center"><FONT 
size="1">..........................................................................</FONT></P>
<P align="center"><STRONG><FONT color="#8b0000" 
size="2">VisionWebApp</FONT></STRONG></P>
<P align="center">Developed by <STRONG><FONT color="#00008b">Alex 
</FONT></STRONG>&amp; <STRONG><FONT color="#00008b">
 Moinul</FONT></STRONG></P>

