<html>
   <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>Asal Sayı Kontrolü</title>
   </head>
 
   <body>
 
       <form action="php_2.php" method="post">
          <table > 
                <td colspan="2" >PHP Asal Sayı Bulma</td>
          </tr>
          <tr>
          <td>Bir Sayı Giriniz:</td>
          <td><input name="sayi" type="text" /></td>
          </tr>
          <tr > 
          <td><input name="gonder" type="submit" value="Sayıyı İncele" /></td>
          </tr>
          </table>
 
       </form>
       
<br /> 


<?php


function sayi_incele($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $i/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
   $num = "sayi";
if ($num == 1)
   echo "Asal sayı";
else
   echo "Asal sayı değil"
;}

?>
</body>
</html>
