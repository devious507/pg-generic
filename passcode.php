<?php


$h = `/bin/hostname`;

$tmp=explode(".",$h);
$hostname = $tmp[0];
?>
<html>
 <head>
  <title>
Guest Suite
  </title>
 </head>
<body topmargin="0" leftmargin="0">
 <table width="100%" border="0" cellpadding="0" cellspacing="0">
<!--Top Menu-->
  <tr>
   <td>
<!--7d0c10 -->
    <table bgcolor="#ffffff" width="100%" border="0" cellpadding="0" cellspacing="0">

     <tr><td><br></td></tr>
     <tr>
      <td align="center" bgcolor="#ffffff">
       <img src="captiveportal-logo1-new.jpg" alt="Guest Suite">
      </td>
     </tr>
     <tr>
      <td align="center" bgcolor="#ffffff">
       <img src="captiveportal-logo2-new.jpg" alt="Guest Suite">
      </td>
     </tr>
    </table>
   </td>

  </tr>
 </table>
<!--End of Top-->
<!--Middle Section-->
 <table bgcolor="#ffffff" width="700" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr><td><br></td></tr>
  <tr>
   <td>
    <img src="captiveportal-welcome.jpg" alt="Welcome">
   </td>

   <td>
        <img src="captiveportal-maingraphic.jpg" alt="Main">
       </td>
  </tr>
  <tr><td><br></td></tr>  
  <tr>
   <td>
    <img src="captiveportal-family.jpg" alt="Family" align="left" valign="top">
     <br>&nbsp;<br>

     <form method="get" action="captiveportal-checkCode.php" name="myForm">
	  <input type="hidden" name="redirurl" value="<?php echo $_GET['redirurl']; ?>">
	  <input type="hidden" name="portalaction" value="<?php echo $_GET['portalaction']; ?>">
	  <input type="hidden" name="site" value="<?php echo $hostname; ?>">
      <font face="helvetica" size="-1">

       Enter your access code and click<br>
       continue to access the Internet.
      </font>
      <br>
      <input type="text" name="password"><br>
      <br>
      <input type="image" value="Continue" src="captiveportal-continue.gif" border="0">
     </form>
   </td>

   <td valign="top">
    <img src="captiveportal-enjoy.jpg" alt="Enjoy">
   </td>
  </tr>
 </table>
<!--End of Middle Section-->
</body>
</html>
