<!DOCTYPE HTML >
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<META name="AUTHOR" content="Van-Gunt Allen -vanguntallen@gmail.com">
<META name="KEYWORDS" content="fil emanage">
<META name="DESCRIPTION" content="file manager">
<META NAME="Generator" CONTENT="VCMS">
<TITLE> File Manager</TITLE>

 <link href="http://smtvs.com/css/bootstrap.min.css" rel="stylesheet">
<head>
    <style>   
  * { 
   box-sizing: border-box; 
 } 
 video { 
   width: 100%; 
   height: auto; 
 } 
 img{ 
   width: 30%; 
   height: auto; 
 } 
 
 
table{ 
   width: 100%; 
   height: auto; 
 } 
 .row:after { 
   content: "";
    clear: both; 
   display: table; 
 } 
 [class*="col-"] { 
  float: left;  
    padding: 50px;  
    width: 100%; 
 }  
  </style>      
</head>
<BODY onLoad="init();"  bgcolor="" text="#FFFFFF"   link=""   vlink="" alink=""   leftmargin="0" topmargin="0">

<div class="col-6 col-s-9">
                                            
 <h1>Filemanager</h1>
 
 
  <table border="1" cellspacing="0" cellpadding="0" class="t1">
          <tbody>
          <tr>
          
               
            
<?php 
            
						 $files = glob("*.html");
            foreach ($files as $file) { if (!is_dir($file)) {?>
   

  <td valign="top" class="td2">
                <p class="p3"><span class="s1"><b>Format</b></span></p>
              </td>
              <td valign="top" class="td3">
                <p class="p3"><span class="s1"></span></p>
              </td>
              <td valign="top" class="td3">
                <p class="p3"><span class="s1"><b>Edit</b></span></p>
              </td>
              <td valign="top" class="td3">
                <p class="p3"><span class="s1"></span></p>
              </td>
              <td valign="top" class="td3">
                <p class="p3"><span class="s1"><b>View</b></span></p>
              </td>
              <td valign="top" class="td3">
                <p class="p3"><span class="s1"><b>Delete</b></span></p>
              </td>
                 <tr>
              <td valign="top" class="td4">
                <p class="p3"><span class="s1">  <span> <a href="./vga_editor.php?f=<?php echo $file; ?>"><img src="http://html5studio.smtvs.com/images/html.png"  width="13"  height="20" alt="<?php echo basename($file); ?>"</span>
              </td>
              <td valign="top" class="td4">
                <p class="p3"><span class="s1">  </span>
              </td>
              <td valign="top" class="td5">
                <p class="p4"><span class="s1"><a href="/admin/vga_editor.php?f=<?php echo basename($file); ?>"><?php echo basename($file); ?></a>"</span></p>
              </td> 
              <td valign="top" class="td4">
                <p class="p3"><span class="s1">  </span>
              </td>
                <td valign="top" class="td4">
                <p class="p3"><span class="s1"><a href="/admin/<?php echo $file; ?>" target="_new"><?php echo $file; ?></a></span>
              </td>
              <td valign="top" class="td4">
                <p class="p3"><span class="s1">  </span>
                <?php echo  "<a href=\"delete.php?f=$file\" onclick=\return confirm('Are you sure you want to delete?')\" >Delete</a> "?>
              </td>
              
              </tr><?php }} ?>
             
          <tr>
          
               
         
            
<?php 
            
						 $files = glob("*.css");
            foreach ($files as $file) { if (!is_dir($file)) {?>
   

  <td valign="top" class="td2">
                <p class="p3"><span class="s1"><b>Format</b></span></p>
              </td>
              <td valign="top" class="td3">
                <p class="p3"><span class="s1"></span></p>
              </td>
              <td valign="top" class="td3">
                <p class="p3"><span class="s1"><b>Edit</b></span></p>
              </td>
              <td valign="top" class="td3">
                <p class="p3"><span class="s1"></span></p>
              </td>
              <td valign="top" class="td3">
                <p class="p3"><span class="s1"><b>View</b></span></p>
              </td>
              <td valign="top" class="td3">
                <p class="p3"><span class="s1"><b>Delete</b></span></p>
              </td>
                 <tr>
              <td valign="top" class="td4">
                <p class="p3"><span class="s1">  <span> <a href="./vga_editor.php?f=<?php echo $file; ?>"><img src="http://html5studio.smtvs.com/images/stylesheet.png"  width="20"  height="30" alt="<?php echo basename($file); ?>"</span>
              </td>
              <td valign="top" class="td4">
                <p class="p3"><span class="s1">  </span>
              </td>
              <td valign="top" class="td5">
                <p class="p4"><span class="s1"><a href="./vga_editor.php?f=<?php echo basename($file); ?>"><?php echo basename($file); ?></a>"</span></p>
              </td> 
              <td valign="top" class="td4">
                <p class="p3"><span class="s1">  </span>
              </td>
                <td valign="top" class="td4">
                <p class="p3"><span class="s1"><a href="/<?php echo $file; ?>" target="_new"><?php echo $file; ?></a></span>
              </td>
              <td valign="top" class="td4">
                <p class="p3"><span class="s1">  </span>
                <?php echo  "<a href=\"delete.php?f=$file\" onclick=\return confirm('Are you sure you want to delete?')\" >Delete</a> "?>
              </td>
              
              </tr><?php }} ?>
                </table> 

      
    
          </div> </div></div>

</form>

 <p>.</p>
</div>


</body></html>
