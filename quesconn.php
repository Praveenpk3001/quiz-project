<?php
$servername="localhost";
$username="root";
$password="admin123";
$dbname="Test";
try{
    $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $Question=$conn->prepare("INSERT INTO Question(ques_ID,description,language,level, ansType) 
                                    values(:ques_ID,:description,:language,:level,:ansType)");

    $Question->bindParam(':ques_ID',$ques_ID);
    $Question->bindParam(':description',$description);
    $Question->bindParam(':language',$language);
    $Question->bindParam(':level',$level);
    $Question->bindParam(':ansType',$ansType);

    if($_SERVER["REQUEST_METHOD"]="POST"){
        $ques_ID=$_POST["ID"];
        $description=$_POST["quesDescription"];
        $language=$_POST["language"];
        $level=$_POST["level"]; 
        $ansType=$_POST["ansType"];
        $Question->execute();    
    } 

      
    echo"new record";
  
}
catch(PDOException $e){ 
        echo "Error" .$e->getMessage();
}
$conn=null;
?>
 