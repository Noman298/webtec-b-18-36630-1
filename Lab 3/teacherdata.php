<!DOCTYPE html>  
 <html>  
      <head>  
        <title>Informtion</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
        <div class="container" style="width:900px;">              
                <div class="table-responsive"> 
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Name</th> 
                               <th>Gender</th> 
                               <th>DOB</th>
                               <th>University</th>
                               <th>Email</th>  
                               <th>Marital Status</th>
                               <th>Religion</th>
                               <th>Blood Group</th> 
                          </tr>  
                          <?php   
                          $data = file_get_contents("data.json");  
                          $data = json_decode($data, true);  
                          foreach($data as $row)  
                          {  
                               echo '<tr>
                                        <td>'.$row["name"].'</td>
                                        <td>'.$row["gender"].'</td>
                                        <td>'.$row["dob"].'</td>
                                        <td>'.$row["university"].'</td>
                                        <td>'.$row["email"].'</td>
                                        <td>'.$row["marital_status"].'</td>
                                        
                                        <td>'.$row["religion"].'</td>
                                        <td>'.$row["blood_group"].'</td>
                                         
                                    </tr>'; 
                          }  
                          ?>  
                     </table>  
                   </div>
                 </div>
      </body>  
 </html>