<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="Cau2.php">
  <table width="493" border="0" align="center">
    <tr>
      <td colspan="2" bgcolor="#FF6600"><div align="center">NH&#7852;N D&#7840;NG TAM GI&Aacute;C </div></td>
    </tr>
    <tr>
      <td bgcolor="#FF9966">C&#7841;nh 1: </td>
      <td bgcolor="#FF9966"><label>
        <input type="text" name="c1" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FF9966">C&#7841;nh 2: </td>
      <td bgcolor="#FF9966"><label>
        <input type="text" name="c2" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FF9966">Cạnh 3: </td>
      <td bgcolor="#FF9966"><label>
        <input type="text" name="c3" />
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#FF9966">Loại tam giác: </td>
      <td bgcolor="#FF9966"><label>
        <input type="text" name="loai" value="<?php if(($_POST["c1"]==$_POST["c2"])&&($_POST["c1"]==$_POST["c3"])&&($_POST["c2"]==$_POST["c3"])){echo("Tam giác đều");} elseif(($_POST["c1"]=$_POST["c2"])or($_POST["c1"]==$_POST["c3"])($_POST["c2"]==$_POST["c3"])){echo("Tam giác cân");} else{echo("Không là tam giác");} ?>"readonly="true"/>
      </label></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#FF9966"><label>
        <div align="center">
          <input type="submit" name="Submit" value="Nhận dạng" />
        </div>
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
