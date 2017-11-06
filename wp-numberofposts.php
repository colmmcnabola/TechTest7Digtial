<php>

include ('wp-connect.php');

$sql = "count id from wp-posts";
$result = mysqli_query($con,$sql);
$count = mysqli_num_rows();    

echo "Total ".$count." Players"; 

if $count > 10 {
   include 'wp-mail.php';
}else {
   echo "Still under limit."
}
</php>