<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="C3_BT3.php">
  <table width="427" border="1">
    <tr>
      <th colspan="2" bgcolor="#00FFFF" scope="col">THANH TOÁN TIỀN ĐIỆN </th>
    </tr>
    <tr>
      <td width="163">Tên chủ hộ: </td>
      <td width="248"><label>
        <input name="ten" type="text" value="<?php echo $_POST["ten"]?>">
      </label></td>
    </tr>
    <tr>
      <td>Chỉ số cũ : </td>
      <td><label>
        <input name="cu" type="text" value="<?php echo $_POST["cu"]?>">
        (Kw)
      </label></td>
    </tr>
    <tr>
      <td>Chỉ số mới: </td>
      <td><label>
        <input name="moi" type="text" value="<?php echo $_POST["moi"]?>">
      (Kw)
      </label></td>
    </tr>
    <tr>
      <td>Đơn giá: </td>
      <td><label>
        <input type="text" name="dg" value="2000">
      (VNĐ)</label></td>
    </tr>
    <tr>
      <td>Số tiền thanh toán: </td>
      <td><label>
        <input type="text" name="tt" value="<?php echo ($_POST["moi"]-$_POST["cu"])*$_POST["dg"] ?>" readonly="true">
        (VNĐ)
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
