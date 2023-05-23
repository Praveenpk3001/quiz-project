<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page1.css">
    <title>Question</title>
</head>
<body>
    <?php require "quesconn.php"?>
    <div class="container">               
     <form method="POST" >    
          <div class="index">
                <div>
                        <label>Language:</label>
                        <select name="language" >                
                            <option value="PHP">PHP</option>
                            <option value="OOPS">OOPS</option>
                            <option value="HTML">HTML</option>
                        </select>
                       
                </div> 
                <div>
                        <label>Level:</label>             
                        <select name="level">                  
                            <option value="Easy">Easy</option>
                            <option value="Medium">Medium</option>
                            <option value="Hard">Hard</option>
                        </select>
                </div>
                <div>  
                        <label class="anstype">AnsType:</label>
                        <select name="ansType">
                            <option value="Radio-button">Radio-button</option>
                            
                        </select>
                </div>                
         </div>
                 <div class="quesID">
                        <lable  for="ID">Question_ID</lable>
                        <input class="ques" type="number" name="ID"/>
                </div>
         <div class="description">Question description<br/><input class="quesinput" type="text" name="quesDescription"></div>    
                        <div>
                            A:<input class="clue" type="text" name="option1"><br>
                            B:<input class="clue" type="text" name="option2"><br>
                            C:<input class="clue" type="text" name="option3"><br>
                        </div>
         <div class="answer">  Answer:<input  type="text" name="answer" > </div>    
        <button>SUBMIT</button>
     </form>   
    </div>
</body>
</html>
