
     <html> 
  <h2 style="text-align: center;">muhammad talb esmail</h2>
   <table width="450px" cellspacing="0px" cellpadding="0px" border="1px" style="margin: auto; color: green;">
   
      <?php
      
      for($i=8;$i>=1;$i--){
         $ch = 97;
          echo "<tr>";
          for($j=8;$j>=1;$j--){
          $total=$i+$j;
          if($total%2==0){
          echo "<td height=50px width=50px bgcolor=#000000>". chr($ch)."$i</td>";
          $ch++;
          }
        else
        {
          echo "<td height=50px width=50px bgcolor=#ffffff>". chr($ch)."$i</td>";
          $ch++;
          }
          }
          echo "</tr>";
   }
          ?>
  </table>
    
  </html>
