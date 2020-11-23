<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #400080}
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="C3_BT1.php">
  <label></label>
  <table width="394" border="1">
    <tr>
      <th colspan="2" bordercolor="#000099" bgcolor="#00CC33" scope="col">DIỆN TÍCH HÌNH CHỮ NHẬT </th>
    </tr>
    <tr>
      <td width="120">Chiều dài </td>
      <td width="258"><label>
        <input type="text" name="cd" />
      </label></td>
    </tr>
    <tr>
      <td>Chiều rộng </td>
      <td><label>
        <input type="text" name="cr" />
      </label></td>
    </tr>
    <tr>
      <td>Diện tích </td>
      <td><label>
        <input type="text" name="dt" value="<?php echo $_POST["cd"]*$_POST["cr"]; ?>" readonly="true" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="Submit" value="Tính" />
          </div>
      </label></td>
    </tr>
  </table>
</form>
</body>

</html>
