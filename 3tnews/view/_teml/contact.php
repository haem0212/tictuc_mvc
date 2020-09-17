<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  /* background-color: #f2f2f2; */
  
}
</style>
</head>
<body>

<h3>Bạn muốn hỗ trợ</h3>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">Họ và tên</label>
    <input type="text" id="fname" name="fullname" placeholder="Họ và tên">

    <label for="lname">Email</label>
    <input type="text" id="lname" name="email" placeholder="email">
    <label for="lname">Số điện thoại</label>
    <input type="text" id="lname" name="phonenumber" placeholder="SĐT">
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>