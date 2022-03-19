	<?php
        include('include/connection.php');
        $query="SELECT * from message_chat Where chat_id='1' order by date asc";
        $result_set=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($result_set)){
               $from_user=$row['from_user'];
               $to_user=$row['to_user'];
               $content=$row['content'];
               $date=$row['date'];
        
        }
        
				echo "<td>";
				echo "<div id='result' style='overflow-y:scroll; height:300px; width: 605px;''></div>";
				echo "<form class='form' action='' method='POST'>";

				 if($from_user='$email_address')
                    {
                    	echo"<div align='right'>";
				   echo "<h4>Admin </h4></p>";
					echo " <p>$content</p>";
                    echo "<h10>$date</h10><br>";
                   echo "</div>";
                 }
                    

                    	$query1="SELECT * from message_chat Where chat_id='1' order by date desc";
        $result_set=mysqli_query($conn,$query1);
        while($r=mysqli_fetch_array($result_set)){
               
               $from_user=$r['from_user'];
               $to_user=$r['to_user'];
               $content=$r['content'];
               $date=$r['date'];
             
                }
       if($from_user!='admin')
                    {
                    	echo "<h4>ME</h4></p>";
                    	echo "<p>$content</p>";
                    	echo "$date";
                    }





                    
                    ?>