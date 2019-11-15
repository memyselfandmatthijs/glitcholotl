<style>
body{
    font-family:sans-serif;
    }

div.titel, div.usercount, div.account, div.Feed, div.probeersel{
     background-color: #26a69a;
     border-color:#10695e;
     border-style:solid;
     border-radius:5px;
     
}

div.probeersel{
    padding:20px;
    margin-top: 10px;
}


div.titel{
    height: 100;
    width: 93%;
    float: left;
    border-width: 6px 0px 6px 6px; 
    border-radius:5px 0px 0px 5px;

}
div.usercount{
    height: 100px;
    width: 6%;
    float: right;
    border-width: 6px 6px 6px 0px;
    border-radius:0px 5px 5px 0px;
}
h1{ 
    margin-bottom:0px;
    padding-left:20px;
    padding-top:10px;
    color:white;

}
p{
    color:white;
    padding-left:30px;
    float:left;
}
p.ondertitel{  
    margin-top:0px;
    padding-left:20px;
    padding-right:20px;
    padding-bottom:20px;
    color:white;

}
p.usercount{
    padding: 20px 0px 20px 0px;
    color:white;
}

div.account{
    margin: 16px 16px 0px 0px;
    height:90%;
    width:20%;
    float:left;
    border-width: 6px;
}


h3{
    padding-left: 20px;
    color:white;
}


div.Feed{
    float:left;
    margin-top: 16px;
    border-width: 6px;
    height: 90%;
    width: 40%;
}

div.linkerhelft{
    float:left;
}
div.rechterhelft{
    float:right;
}

</style>

<div class="titel">
 
<h1>Glitcholotl </h1>
<p class="ondertitel">The social medium for axolotls</p>
 
</div>
 
 
 
<div class="usercount">
 
<?php
 
$conn = new mysqli("remotemysql.com", "zwTzrl4wRV", "0t3d9R5kuh", "zwTzrl4wRV");
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$usertext = "users";
$sql = "select count(UserID) from Users";
$result = $conn->query($sql);
 
if (!$result) {
    die("counting of users failed");
}
 
$count = mysqli_fetch_row($result)[0];
 
//de volgende code voorkomt "1 gebruikers"
if($count == 1){
    $usertext = "user";
}
else{
    $usertext = "users";
}
 echo  "<p class=usercount>$count $usertext </p>";
 
$conn->close();
?>
 
</div>

<br>
<br>


<div class="account">
<h3>Profile</h3>
<p>avatar, username, etc.</p>
</div>


<div class="Feed"> 
<h3>Feed</h3>


<?php

$a = "Ik weet niet wat ik hier moet zetten, als je een suggestie hebt mag je die op de mail zetten.";
$woord = explode(" ", $a);

for($i=0; $i<=20; $i++){
         echo"<p>  $woord[$i]</p><br>";
        }   


?>

</div>





