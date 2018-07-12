<?php 

if (isset($_POST["filename"])) {
	$fname = $_POST["filename"];
	$file = stripslashes($_POST["file"]);
	$fp = @fopen($fname, "w");
	if ($fp) {
		fwrite($fp, $file);
		fclose($fp);
	}
	
}

if (isset($_GET["f"])) 
	$fname = stripslashes($_GET["f"]);
	if (file_exists($fname)) 
		$fp = @fopen($fname, "r");
		if (filesize($fname) !== 0) 
			$loadfile = fread($fp, filesize($fname));
			$loadfile = htmlspecialchars($loadfile);
			fclose($fp);
?>
<!DOCTYPE HTML >
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<META name="AUTHOR" content="Van-Gunt Allen -vanguntallen@gmail.com">
<META name="KEYWORDS" content="HTML5 TV Page  generator">
<META name="DESCRIPTION" content="HTML5 Audio Video Player generator">
<META NAME="Generator" CONTENT="VCMS">
<TITLE> VGA  Editor </TITLE>

 <link href="http://smtvs.com/css/bootstrap.min.css" rel="stylesheet">
<head>
 <script type="text/javascript">
<!--

function init() {

hideCodeBox();	
hideCodeBox2();
hideDesign();
}
</script>

<script type="text/javascript">
<!--

function hideDesign(){
  document.getElementById('design').style.display = "none"
	 document.getElementById('html_window').style.display = "block";
}

function showDesign(){

    document.getElementById('design').style.display = "block"
 document.getElementById('html_window').style.display = "none";
		
}

function showCodeBox() {
 
		document.getElementById('Codbox').style.display = "block";
}


function hideCodeBox(){
  
	
	document.getElementById('Codebox').style.display = "none";
	
}
function showCodeBox2() {
 
		document.getElementById('box').style.display = "block";
}


function hideCodeBox2(){
  
	
	document.getElementById('box').style.display = "none";
	
}



//-->
</script>
 <script type="text/javascript"> 
 
<!-- Begin
function View(form) {
msg=open("","DisplayWindow","status=1,scrollbars=1");
msg.document.write(form.Text2.value);
}
 



</script>  

</head>
<BODY onLoad="init();"  bgcolor="" background="http://vga.smtvs.com/bgimage/bg.png" text="#FFFFFF"   link=""   vlink="" alink=""   leftmargin="0" topmargin="0">

<form  method="post" action="" >

<P>

<div class="panel panel-default"  style="position:absolute; Z-INDEX:0;background-color:;background-image:url();background-repeat:repeat;;background-position:left top;left:100px;top:90px;width:1125px;height:655px; border: 0px solid #E68282; border-color: #E68282 #650000 #650000 #9C2828;z-index:0" id="embedproperties">	
	<div id= "panel-heading" >
	
	Editor
	
	</div>
	
	
            <div class="panel-body">
</div>
<textarea class="form-control" rows="20" cols="170"  name="file"  id="Text2" style=" Z-INDEX: 2;    font-size: 19px; color:#0000FF; font-family: arial, verdana, helvetica, sans serif; margin-left: 1px; width: 1090px;">
<?php echo $loadfile; ?>
</textarea><P>

 <div class="">

<input class="form-control" type="text"  name="filename" id=data value="<?php echo $fname; ?>" size="30" style=" Z-INDEX: 2;    font-size: 19px; color:#0000FF; font-family: arial, verdana, helvetica, sans serif; margin-left: 1px; width: 490px;"/>  
</div>


<div id="design" class="panel panel-default"  style="Z-INDEX: 27; POSITION: absolute; background-color:#C0C0C0 ;  WIDTH: 1125px; TOP: 0px; LEFT: 0xp" >
<div class="panel-heading" >
                        Page Design
                        </div>
            <div class="panel-body">
<iframe src="about:blank" name="preview" style="height:581px;width:1092px;border:solid 1px #b9b8b6;background:#ffffff" frameborder="0" class="form-control">
</iframe>
</div></div></div>


<P> 


<div class="panel panel-default"  style="position:absolute;background-color:#C0C0C0;background-image:url();background-repeat:repeat;;background-position:left top;left:100px;top:753px;width:1125px;height:80px; border: 0px solid #E68282; border-color: #E68282 #650000 #650000 #9C2828;z-index:200" id="embedproperties">	
	<div id= "panel-heading"  >
	
	Dashboard
	</div>
	
	
            <div class="panel-body">
            
<input class="btn btn-danger" class="form-control"type="submit" name="save_file" value="Save" style=" font-size: 10px; font-family: arial, verdana, helvetica, sans serif; margin-left: 2px; width: 88px;"/>
   	
<input type="button"  class="btn btn-warning" value="Live Preview" onclick="preview.document.write (document.getElementsByTagName ('TEXTAREA')[0].value); preview.document.close(); preview.focus(); showDesign(); return false;" style="font-size: 10px; font-family: arial, verdana, helvetica, sans serif; margin-left: 1px; width: 90px;">
            
            
	<button   class="btn btn-success" type="button" value="button"  style="font-size: 10px; font-family: arial, verdana, helvetica, sans serif; margin-left: 2px; width: 78px;"onclick="hideDesign();return false;">Edit</button><P><br> 

            </div></div>


 </form>
 
 
 
</body></html>
