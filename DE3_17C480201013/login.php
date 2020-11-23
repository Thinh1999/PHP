<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-weight: bold;
}
.style2 {color: #0000FF}
-->
</style>
</head>

<body>
<form name="form1" method="post" action="kiemtra.php">
  <table width="452" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>Chúc mừng bạn đã đăng ký thành công </strong></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center" class="style1">Thông tin cá nhân </div></td>
    </tr>
    <tr>
      <td width="121"><span class="style2">Tên truy cập: </span></td>
      <td width="321"><label>
       <?php echo $_POST["ttc"]?>
      </label></td>
    </tr>
    <tr>
      <td><span class="style2">Họ và tên: </span></td>
      <td><label>
        <?php echo $_POST["hvt"]?>
      </label></td>
    </tr>
    <tr>
      <td><span class="style2">Địa chỉ: </span></td>
      <td><label>
        <?php echo $_POST["dc"]?>
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#F0F0F0"><span class="style2">Số điện thoại: </span></td>
      <td><label>
        <?php echo $_POST["sdt"]?>
      </label></td>
    </tr>
    <tr>
      <td><span class="style2">Email:</span></td>
      <td><label>
        <?php echo $_POST["em"]?>
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="Submit" type="submit" value="Quay lại trang đăng ký">
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
