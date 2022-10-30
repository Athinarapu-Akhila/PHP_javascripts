<html>
       <head>
             <title>Login Page</title>
      </head>
      <body>
             <center>
             <h1>Login</h1>
             <form action="xmllogin.php" method="post">
                    Username:<input type="text" name="name"><br><br>
                    Password:<input type="password" name="password"><br><br>
                    <input type="submit"name="sl">       
            </form>
            </center>
            <?php
                    $done=0;
                    if(isset($_POST["sl"]))
                     {
                             $e=$_POST["name"];
                             $p=$_POST["password"];
                             $data=simplexml_load_file("userlist.xml");
                             foreach($data->children() as $x)
                             {  
                                    if($x->name==$e && $x->password==$p)  
                                    {  
                                            header('Location:success.html');
                                            $done=1;
                                            break;
                                     }
                              }
                              if($done!=1)
                                      header('Location:failure.html');
                      }
             ?>
             <p> <br> Name :A.Akhila<br> Rollno : 20255A0507<br> Date : 21-03-22 <br></p>
         </body>
</html>