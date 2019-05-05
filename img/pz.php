<?php
    $zy1 = $jd1 = $km1 = $je1 = $zy2 = $jd2 = $km2 = $je2 = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    $zy1 = test_input($_POST['zy1']);
    $jd1 = test_input($_POST['sty1']);
    $km1 = test_input($_POST['lainsty1']);
    $je1 = test_input($_POST['je1']);
    $zy2 = test_input($_POST['zy2']);
    $jd2 = test_input($_POST['sty2']);
    $km2 = test_input($_POST['lainsty2']);
    $je2 = test_input($_POST['je2']);
    $date = test_input($_POST['date']);
    }
    function test_input($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
$servername="localhost";
$username="root";
$password="";
$dbname="php";
$db=mysqli_connect($servername,$username,$password,$dbname);

if(!$db){
    die("连接失败：".mysqli_connect_error());
}
$sql= "INSERT INTO pz (ID, savedate, borsummary, borrow, borMoney, loansummary, loan, loanMoney, note) 
VALUES (NULL, '".$date."', '".$zy1."', $km1, $je1, '".$zy2."', $km2, $je2, '')";
if(mysqli_query($db,$sql)){
    echo "记录成功";
}else{
    echo "插入错误" . $sql . "<br>" . mysqli_error($db);
}

?>