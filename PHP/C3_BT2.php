<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="C3_BT2.php">
  <table width="423" border="1">
    <tr>
      <th colspan="2" bgcolor="#33FF33" scope="col">DI&#7878;N T&Iacute;CH V&Agrave; CHU VI H&Igrave;NH TR&Ograve;N </th>
    </tr>
    <tr>
      <td width="165">B&aacute;n k&iacute;nh : </td>
      <td width="242"><label>
        <input type="text" name="bk">
      </label></td>
    </tr>
    <tr>
      <td>Di&#7879;n t&iacute;ch:</td>
      <td><label>
        <input type="text" name="dt" value="<?php echo 3.14*$_POST["bk"]*$_POST["bk"] ?>" readonly="true">
      </label></td>
    </tr>
    <tr>
      <td>Chu vi </td>
      <td><label>
        <input type="text" name="cv" value="<?php echo 2*3.14*$_POST["bk"] ?>" readonly="true">
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="Submit" value="Tính">
        </div>
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
