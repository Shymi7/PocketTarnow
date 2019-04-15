<?php 
    $tytulStrony = "Logowanie";
    include_once('header.php');


    if($log){
        header("Location: index.php");
        exit();
    }
?>
<div id="container">
<?php 
    if(isset($_POST['login'])) $nameLogin = $_POST['login'];
    else {
        header("Location: index.php");
        exit();
    }
    if(isset($_POST['pass'])) $password = $_POST['pass'];
    else {
        header("Location: index.php");
        exit();
    }
    include_once("db_conn.php");

    $conn = mysqli_connect($host,$user,$pass,$db);
    if(!$conn)
    {
        echo "nich working";
        exit();
    }



    $sql = "SELECT pass FROM users WHERE login = '$nameLogin'";;

    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_array($result))
    {
       $hash = $row['pass'];
    }
    if (password_verify($password, $hash)) {
        $sql = "SELECT * FROM users where login = '$nameLogin'";

        $result = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_array($result))
        {
           $_SESSION['id'] = $row['id'];
           $_SESSION['typ'] = $row['typ'];
           $_SESSION['login'] = true;
        }

    }

    header("Location: index.php");

?>
    
</div>
<?php 
    include_once("footer.php");
?>