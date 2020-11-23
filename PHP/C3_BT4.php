<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="C3_BT4.php">
  <table width="508" border="1">
    <tr>
      <th colspan="2" bgcolor="#FF6633" scope="col">KẾT QUẢ HỌC TẬP </th>
    </tr>
    <tr>
      <td width="156">Điểm HK1: </td>
      <td width="336"><label>
        <input type="text" name="hk1">
      </label></td>
    </tr>
    <tr>
      <td>Điểm HK2: </td>
      <td><label>
        <input type="text" name="hk2">
      </label></td>
    </tr>
    <tr>
      <td>Điểm trung bình:</td>
      <td><label>
        <input type="text" name="tb" value="<?php echo ($_POST["hk1"]+$_POST["hk2"]*2)/3 ?>">
      </label></td>
    </tr>
    <tr>
      <td>Kết quả:</td>
      <td><label>
        <input type="text" name="kq" value="<?php if(($_POST["hk1"]+$_POST["hk2"]*2)/3>=5){echo("Được lên lớp");}else{echo("Ở lại lớp");}?>">
      </label></td>
    </tr>
    <tr>
      <td>Xếp loại học lực: </td>
      <td><label>
        <input type="text" name="hl" value="<?php if(($_POST["hk1"]+$_POST["hk2"]*2)/3>=8){echo("Giỏi");}elseif(($_POST["hk1"]+$_POST["hk2"]*2)/3>=6.5){echo("Khá");} elseif(($_POST["hk1"]+$_POST["hk2"]*2)/3>=5){echo("Trung bình");}else{echo("Yếu");}?>">
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="Submit" value="Xem kết quả">
          </div>
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
