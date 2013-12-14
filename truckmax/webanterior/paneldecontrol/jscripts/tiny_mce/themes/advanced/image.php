<?
     session_start();
     $TinyArray="";  
     if(!empty($_SESSION["imag_vtxtfoto"][1]) && !empty($_SESSION["imag_vtxtorig"][1]))
	  {
	    $TinyArray= "var tinyMCEImageList = new Array(";
        for($Cnt=1; $Cnt<=4; $Cnt++)
	     {
		  if(!empty($_SESSION["imag_vtxtorig"][$Cnt]) && !empty($_SESSION["imag_vtxtfoto"][$Cnt])) 
		   {
            $TinyArray= $TinyArray . ("['" . $_SESSION["imag_vtxtorig"][$Cnt]  ."', '" . $_SESSION["dirrelativocontenido"] .$_SESSION["imag_vtxtfoto"][$Cnt] . "']"); 
			if($Cnt<4)
			 {
			   if(!empty($_SESSION["imag_vtxtorig"][$Cnt+1]))
			      $TinyArray= $TinyArray . ","; 
			 }
		   } 
         }
	    $TinyArray=  $TinyArray . ");\n"; 			
	 }	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>{$lang_insert_image_title}</title>
	<script type="text/javascript">
     <!--
	   <?=$TinyArray?>
     // -->
    </script>
	<script language="javascript" type="text/javascript" src="../../tiny_mce_popup.js"></script>
	<script language="javascript" type="text/javascript" src="../../utils/form_utils.js"></script>
	<script language="javascript" type="text/javascript" src="jscripts/image.js"></script>
</head>
<body onload="tinyMCEPopup.executeOnLoad('init();');" style="display: none">
<form onsubmit="insertImage();return false;">
  <table border="0" cellpadding="0" cellspacing="0" width="200">
    <tr>
      <td align="center" valign="middle"><table border="0" cellpadding="4" cellspacing="0">
          <tr>
            <td colspan="2" class="title" nowrap="nowrap">{$lang_insert_image_title}</td>
          </tr>
          <tr>
            <td nowrap="nowrap">{$lang_insert_image_src}:</td>
            <td><table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><input name="src" type="text" id="src" value="" style="width: 200px" onchange="getImageData();"></td>
                  <td id="srcbrowsercontainer">&nbsp;</td>
                </tr>
              </table></td>
          </tr>
		  <!-- Image list -->
		  <script language="javascript">
			if (typeof(tinyMCEImageList) != "undefined" && tinyMCEImageList.length > 0) {
				var html = "";

				html += '<tr><td>{$lang_image_list}:</td>';
				html += '<td><select name="image_list" style="width: 200px" onchange="this.form.src.value=this.options[this.selectedIndex].value;resetImageData();getImageData();">';
				html += '<option value="">---</option>';

				for (var i=0; i<tinyMCEImageList.length; i++)
					html += '<option value="' + tinyMCEImageList[i][1] + '">' + tinyMCEImageList[i][0] + '</option>';

				html += '</select></td></tr>';

				document.write(html);
			}
		  </script>
		  <!-- /Image list -->
          <tr>
            <td nowrap="nowrap">{$lang_insert_image_alt}:</td>
            <td><input name="alt" type="text" id="alt" value="" style="width: 200px"></td>
          </tr>
          <tr>
            <td nowrap="nowrap">{$lang_insert_image_align}:</td>
            <td><select name="align">
                <option value="">{$lang_insert_image_align_default}</option>
                <option value="baseline">{$lang_insert_image_align_baseline}</option>
                <option value="top">{$lang_insert_image_align_top}</option>
                <option value="middle">{$lang_insert_image_align_middle}</option>
                <option value="bottom">{$lang_insert_image_align_bottom}</option>
                <option value="texttop">{$lang_insert_image_align_texttop}</option>
                <option value="absmiddle">{$lang_insert_image_align_absmiddle}</option>
                <option value="absbottom">{$lang_insert_image_align_absbottom}</option>
                <option value="left">{$lang_insert_image_align_left}</option>
                <option value="right">{$lang_insert_image_align_right}</option>
              </select></td>
          </tr>
          <tr>
            <td nowrap="nowrap">{$lang_insert_image_dimensions}:</td>
            <td><input name="width" type="text" id="width" value="" size="3" maxlength="3">
              x
              <input name="height" type="text" id="height" value="" size="3" maxlength="3"></td>
          </tr>
          <tr>
            <td nowrap="nowrap">{$lang_insert_image_border}:</td>
            <td><input name="border" type="text" id="border" value="" size="3" maxlength="3"></td>
          </tr>
          <tr>
            <td nowrap="nowrap">{$lang_insert_image_vspace}:</td>
            <td><input name="vspace" type="text" id="vspace" value="" size="3" maxlength="3"></td>
          </tr>
          <tr>
            <td nowrap="nowrap">{$lang_insert_image_hspace}:</td>
            <td><input name="hspace" type="text" id="hspace" value="" size="3" maxlength="3"></td>
          </tr>
          <tr>
            <td nowrap="nowrap"><input type="button" id="insert" name="insert" value="{$lang_insert}" onclick="insertImage();">
            </td>
            <td align="right"><input type="button" id="cancel" name="cancel" value="{$lang_cancel}" onclick="tinyMCEPopup.close();"></td>
          </tr>
        </table></td>
    </tr>
  </table>
</form>
</body>
</html>
