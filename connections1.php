<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submittion</title>
    <style>
        body{
            background: linear-gradient(to right top,orange,purple);
            min-height: 97vh;
            text-align: center;

        }
    </style>
</head>
<body>
    <h3>
    <?php
$servername="localhost";
$user="root";
$pass="";
$db="Form_Data";
$conn=mysqli_connect($servername,$user,$pass,$db);

$key=mysqli_num_rows(mysqli_query($conn,"select * from Contact_us"))+1;
$name=$_POST['na'];
$email=$_POST['em'];
$gen=$_POST['inlineRadioOptions'];
// echo $key,$name,$email,$gen;

$qry="insert into Contact_us values(".$key.",'".$name."','".$email."','".$gen."')";

if (mysqli_query($conn, $qry)) {
    echo "Succesful Submitted";

}
else{
    die("Unsucessful".mysqli_connect_error());
}
// echo "data".$_POST["em"]." ".$_POST["na"]." ".$_POST["no"]." ".$_POST["inlineRadioOptions"];
mysqli_close($conn);


?>
</h3>
</body>
</html>