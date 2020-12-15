$ro2 = mysqli_fetch_assoc($res1);
$ro1= mysqli_fetch_assoc($res);


//sales
  if (isset($_POST['sale'])) {
  	$quer = "SELECT usersId FROM users WHERE usersName ='$name'";
  	$res = mysqli_query($db, $quer);
  	$ro1= mysqli_fetch_array($res);
  	$quer1 = "SELECT pid FROM products WHERE code='T1'";
  	$res1 = mysqli_query($db, $quer1);
  	$ro2 = mysqli_fetch_array($res1);
  	$sql1 = "INSERT INTO userprod (usersId,pid) VALUES ('$ro1[0]','$ro2[0]')";
  	mysqli_query($db, $sql1);
  }
  //sale data
  if (isset($_POST['sale'])) {
  	$userid = '$name';
  	$pid = '1';}
  $quer = "INSERT INTO userprod (usersId,pid) VALUES('$userid','$pid')";
  mysqli_query($db, $quer);
   if (isset($_POST['sale'])) {
  	$quer = "SELECT usersId FROM users WHERE usersName ='$name'";
  	$res = mysqli_query($db, $quer);
  	$ro1= mysqli_fetch_array($res);
  	if ($ro1 > 0) {
  		$sq = "INSERT INTO userprod (usersId) VALUES ('$ro1[0]')";
  		mysqli_query($db, $sq);
  } else{
  	echo "no";
  }
  	$quer1 = "SELECT pid FROM products WHERE code='T1'";
  	$res1 = mysqli_query($db, $quer1);
  	$ro2 = mysqli_fetch_array($res1);
    if ($ro2 > 0) {
  		$sq1 = "INSERT INTO userprod (pid) VALUES ('$ro2[0]')";
  		mysqli_query($db, $sq1);
  } else{
  	echo "no";
  }