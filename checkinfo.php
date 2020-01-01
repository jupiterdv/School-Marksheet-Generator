<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `stuinfo` WHERE CONCAT(`id`,'college','branch','roll_no' `enroll_no`, `date`, `sname`, 'fname', 'mname') LIKE '%".$valueToSearch."%'";

}

 else {
    $query = "SELECT * FROM `stuinfo`";
    
;
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "u286343678_erjupi", "Rajnagar98@#", "u286343678_erjupi");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>student Data Check</title>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./style.css">
<style>
.button {
  background-color: #868a86; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}



.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
        
    </head>
    <body>
       <center> <h1>ENGLISH MARKS DATABASE</h1></center>
        
        <form action="checkinfo.php" method="post">
<center>
    <div class="wrap">
   <div class="search">
            <input type="text" name="valueToSearch" class="searchTerm" placeholder="Search By Roll No/ID/Class/Name"><br><br>
            </div></div>
 
            <input type="submit" class="button button2" name="search" value="Filter"><br><br>
            </center>
            <div class="tbl-header">
    	<table width='80%' border=0>
          
                <tr>
                    <th>Id</th>
                    
                    <th>School Name</th>
                    <th>Class</th>
                    <th>Roll No</th>
                    <th>Address</th></th>
                    <th>Date</th>
                    <th>Student's Name</th>
                    <th>Father's Name</th>
                    <th>Mother's Name</th>
                    <th>Student Photo</th>
                   
                    
                </tr>
</div>
</table>
<div class="tbl-content">
    	<table width='80%' border=0>
      <tbody>
      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php  echo $row['college'];?></td>
                    <td><?php echo $row['branch'];?></td>
                    <td><?php echo $row['roll_no'];?></td>
                    <td><?php echo $row['enroll_no'];?></td>
                    <td><?php echo $row['date'];?></td>
                    <td><?php echo $row['sname'];?></td>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['mname'];?></td>
                    <td><img src="<?php echo $row['image'];?>" alt="Smiley face" height="42" width="42"></td>
               
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
    </body>
</html>
