<?php 
if(isset($_Get['FirstName'])){//data exists,show it
  echo $_Get['FirstName'];
}else{// no data, show form
   echo '
   <form action="">
   First Name: <input type="text"
   name="FirstName" /><br />
   <input type="submit" />

   </form>
   ';
}