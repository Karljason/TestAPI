<html>
    <head>
    <script></script>
    <script>
        function myGetURL() {
            document.getElementById("txtAction").value = "Generate";
            document.getElementById("Form1").submit();
        }

    </script>
    </head>
    
    <body>
<div align="center">
<form action="index.php" method="POST" id="Form1" name="Form1">
<table border="0" cellpadding="2" width="780">
    <tr>
      <td width="15"></td>
      <td width="220"></td>
      <td width="350"></td>
      <td width="195"></td>
    </tr>
    <tr>
      <td></td>
      <td>URL:*</td>
      <td><input id="txtURL" type="text" size="10" name="txtURL" value="<?php echo $txtURL ?>"></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td><input id="cmdQuery" name="cmdQuery" type="button" value="Query"
      LANGUAGE="javascript" onclick="return myGetURL()" accesskey="G">
	  </td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td>URL  Response:</td>
      <td><textarea id="txtURLResp"  name="txtURLResp" rows="4" cols="50"><?php echo $myResponse ?></textarea></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td>Inverted URL  Response:</td>
      <td><textarea id="txtURLInv"  name="txtURLInv" rows="4" cols="50"><?php echo $myResponseRev ?></textarea></td>
      <td></td>
    </tr>
    
    
    <input id="txtAction" name="txtAction" type="hidden" value="Generate">
</table>
</form>
</div>
</body>
</html>