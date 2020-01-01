<?php
  
    
@$college = $_POST['college'];
@$branch = $_POST['branch'];
@$roll_no = $_POST['roll_no'];
@$enroll_no = $_POST['enroll_no'];
@$date = $_POST['date'];
@$name = $_POST['sname'];
@$fname = $_POST['fname'];
@$mname = $_POST['mname'];

//end of basic info
//start of subjects
//english
@$engpt1 = $_POST['engpt1'];
@$engpt2 = $_POST['engpt2'];
@$engnb1 = $_POST['engnb1'];
@$engnb2 = $_POST['engnb2'];
@$engse1 = $_POST['engse1'];
@$engse2 = $_POST['engse2'];
@$eng1 = $_POST['eng1'];
@$eng2 = $_POST['eng2'];
//bengali
@$bengpt1 = $_POST['bengpt1'];
@$bengpt2 = $_POST['bengpt2'];
@$bengnb1 = $_POST['bengnb1'];
@$bengnb2 = $_POST['bengnb2'];
@$bengse1 = $_POST['bengse1'];
@$bengse2 = $_POST['bengse2'];
@$beng1 = $_POST['beng1'];
@$beng2 = $_POST['beng2'];

//rhymes
@$rhypt1 = $_POST['rhypt1'];
@$rhypt2 = $_POST['rhypt2'];
@$rhynb1 = $_POST['rhynb1'];
@$rhynb2 = $_POST['rhynb2'];
@$rhyse1 = $_POST['rhyse1'];
@$rhyse2 = $_POST['rhyse2'];
@$rhy1 = $_POST['rhy1'];
@$rhy2 = $_POST['rhy2'];
//dictation
@$dicpt1 = $_POST['dicpt1'];
@$dicpt2 = $_POST['dicpt2'];
@$dicnb1 = $_POST['dicnb1'];
@$dicnb2 = $_POST['dicnb2'];
@$dicse1 = $_POST['dicse1'];
@$dicse2 = $_POST['dicse2'];
@$dic1 = $_POST['dic1'];
@$dic2 = $_POST['dic2'];
//conversation
@$convpt1 = $_POST['convpt1'];
@$convpt2 = $_POST['convpt2'];
@$convnb1 = $_POST['convnb1'];
@$convnb2 = $_POST['convnb2'];
@$convse1 = $_POST['convse1'];
@$convse2 = $_POST['convse2'];
@$conv1 = $_POST['conv1'];
@$conv2 = $_POST['conv2'];
//drawing
@$drawpt1 = $_POST['drawpt1'];
@$drawpt2 = $_POST['drawpt2'];
@$drawnb1 = $_POST['drawnb1'];
@$drawnb2 = $_POST['drawnb2'];
@$drawse1 = $_POST['drawse1'];
@$drawse2 = $_POST['drawse2'];
@$draw1 = $_POST['draw1'];
@$draw2 = $_POST['draw2'];
//cursive

@$cur1 = $_POST['cur1'];
@$cur2 = $_POST['cur2'];
//last

//end of subjects
//start co-scholastic areas 
//work education

@$work1 = $_POST['work1'];
@$work2 = $_POST['work2'];
//art education
@$art1 = $_POST['art1'];
@$art2 = $_POST['art2'];
//health and physical education
@$health1 = $_POST['health1'];
@$health2 = $_POST['health2'];
//discipline
@$dis1 = $_POST['dis1'];
@$dis2 = $_POST['dis2'];
//sports
@$sport1 = $_POST['sport1'];
@$sport2 = $_POST['sport2'];
@$image = $_POST['image'];
@$image2 = $_POST['image2'];
//end of co-scholastic areas
//start of others
//working days
@$workdays1 = $_POST['workdays1'];
@$workdays2 = $_POST['workdays2'];
//present 
@$present1 = $_POST['present1'];
@$present2 = $_POST['present2'];
//students in the class
@$stuclass1 = $_POST['stuclass1'];
@$stuclass2 = $_POST['stuclass2'];
//start of grading and rank
//rank
@$rank = $_POST['rank'];

//overall grade
@$og = $_POST['og'];
//remark
@$remark = $_POST['remark'];

//end of grading and rank
//start of remarks

@$engrem = $_REQUEST['engrem'];

@$bengrem = $_REQUEST['bengrem'];
@$rhyrem = $_REQUEST['rhyrem'];
@$dicrem = $_REQUEST['dicrem'];
@$conrem = $_REQUEST['conrem'];
@$drawrem = $_REQUEST['drawrem'];
@$currem = $_REQUEST['currem'];




//end of remarks

//start of calculations
@$dis = $_REQUEST['dis'];
@$resultp = $_REQUEST["PASS"];
@$resultf = $_REQUEST["FAIL"];

//english total marks
$etm1 = $engpt1 + $engnb1 + $engse1 + $eng1;
$etm2 = $engpt2 + $engnb2 + $engse2 + $eng2;
//bengali total marks
$btm1 = $bengpt1 + $bengnb1 + $bengse1 + $beng1;
$btm2 = $bengpt2 + $bengnb2 + $bengse2 + $beng2;

//rhymes total marks
$rtm1 = $rhypt1 + $rhynb1 + $rhyse1 + $rhy1;
$rtm2 = $rhypt2 + $rhynb2 + $rhyse2 + $rhy2;
//dictation total marks
$ditm1 = $dic1;
$ditm2 =  $dic2;
//conversation total marks
$cotm1 = $conv1;
$cotm2 =  $conv2;
//drawing total marks
$dtm1 = $drawpt1 + $drawnb1 + $drawse1 + $draw1;
$dtm2 = $drawpt2 + $drawnb2 + $drawse2 + $draw2;
//cursive total marks
$ctm1 =  $cur1;
$ctm2 = $cur2;


$ot1 = $etm1 + $btm1 +  $rtm1 + $ditm1 + $cotm1 + $dtm1 + $ctm1;
$ot2 = $etm2 + $btm2 +  $rtm2 + $ditm2 + $cotm2 + $dtm2 + $ctm2;



//only subject
$ogt2 = $etm1 + $etm2 + $btm1 + $btm2 +  $rtm1 + $rtm2 + $ditm1 + $ditm2 + $cotm1 + $cotm2 + $dtm1 + $dtm2 + $ctm1 + $ctm2;

$ogtp2 = $ogt2 / 550 * 100;
//average marks of both term
$etmavg = $etm1 / 2 + $etm2 / 2;
$btmavg = $btm1 / 2 + $btm2 / 2;

$rtmavg = $rtm1 / 2 + $rtm2 / 2;
$ditmavg = $ditm1 / 2 + $ditm2 / 2;
$contmavg = $cotm1 / 2 + $cotm2 / 2;
$dtmavg = $dtm1 / 2 + $dtm2 / 2;
$ctmavg = $ctm1 / 2 + $ctm2 / 2;






if ($ogt2 < 140) {
  $resultf = "FAIL";
} else {
  $resultp = "PASS";
}
$conn = new mysqli('localhost', 'u286343678_erjupi', 'Rajnagar98@#', 'u286343678_erjupi');
if ($conn->connect_error) {
  die('Connection failed :' . $conn->connect_error);
} else {
  $stmt = $conn->prepare(
    "insert into stuinfo(college, branch, roll_no, enroll_no, date, sname, fname, mname,image)
  values(?,?,?,?,?,?,?,?,?)"
  );
  $stmt->bind_param("sssssssss",$college,$branch,$roll_no,$enroll_no,$date,$name,$fname,$mname,$image);
  $stmt->execute();
  $stmt->close();
  $conn->close();

}
?>


<?php
  
    
@$college = $_POST['college'];
@$branch = $_POST['branch'];
@$roll_no = $_POST['roll_no'];
@$enroll_no = $_POST['enroll_no'];
@$date = $_POST['date'];
@$name = $_POST['sname'];
@$fname = $_POST['fname'];
@$mname = $_POST['mname'];

//end of basic info
//start of subjects
//english
@$engpt1 = $_POST['engpt1'];
@$engpt2 = $_POST['engpt2'];
@$engnb1 = $_POST['engnb1'];
@$engnb2 = $_POST['engnb2'];
@$engse1 = $_POST['engse1'];
@$engse2 = $_POST['engse2'];
@$eng1 = $_POST['eng1'];
@$eng2 = $_POST['eng2'];
//bengali
@$bengpt1 = $_POST['bengpt1'];
@$bengpt2 = $_POST['bengpt2'];
@$bengnb1 = $_POST['bengnb1'];
@$bengnb2 = $_POST['bengnb2'];
@$bengse1 = $_POST['bengse1'];
@$bengse2 = $_POST['bengse2'];
@$beng1 = $_POST['beng1'];
@$beng2 = $_POST['beng2'];

//rhymes
@$rhypt1 = $_POST['rhypt1'];
@$rhypt2 = $_POST['rhypt2'];
@$rhynb1 = $_POST['rhynb1'];
@$rhynb2 = $_POST['rhynb2'];
@$rhyse1 = $_POST['rhyse1'];
@$rhyse2 = $_POST['rhyse2'];
@$rhy1 = $_POST['rhy1'];
@$rhy2 = $_POST['rhy2'];
//dictation
@$dicpt1 = $_POST['dicpt1'];
@$dicpt2 = $_POST['dicpt2'];
@$dicnb1 = $_POST['dicnb1'];
@$dicnb2 = $_POST['dicnb2'];
@$dicse1 = $_POST['dicse1'];
@$dicse2 = $_POST['dicse2'];
@$dic1 = $_POST['dic1'];
@$dic2 = $_POST['dic2'];
//conversation
@$convpt1 = $_POST['convpt1'];
@$convpt2 = $_POST['convpt2'];
@$convnb1 = $_POST['convnb1'];
@$convnb2 = $_POST['convnb2'];
@$convse1 = $_POST['convse1'];
@$convse2 = $_POST['convse2'];
@$conv1 = $_POST['conv1'];
@$conv2 = $_POST['conv2'];
//drawing
@$drawpt1 = $_POST['drawpt1'];
@$drawpt2 = $_POST['drawpt2'];
@$drawnb1 = $_POST['drawnb1'];
@$drawnb2 = $_POST['drawnb2'];
@$drawse1 = $_POST['drawse1'];
@$drawse2 = $_POST['drawse2'];
@$draw1 = $_POST['draw1'];
@$draw2 = $_POST['draw2'];
//cursive

@$cur1 = $_POST['cur1'];
@$cur2 = $_POST['cur2'];
//last

//end of subjects
//start co-scholastic areas 
//work education

@$work1 = $_POST['work1'];
@$work2 = $_POST['work2'];
//art education
@$art1 = $_POST['art1'];
@$art2 = $_POST['art2'];
//health and physical education
@$health1 = $_POST['health1'];
@$health2 = $_POST['health2'];
//discipline
@$dis1 = $_POST['dis1'];
@$dis2 = $_POST['dis2'];
//sports
@$sport1 = $_POST['sport1'];
@$sport2 = $_POST['sport2'];

//end of co-scholastic areas
//start of others
//working days
@$workdays1 = $_POST['workdays1'];
@$workdays2 = $_POST['workdays2'];
//present 
@$present1 = $_POST['present1'];
@$present2 = $_POST['present2'];
//students in the class
@$stuclass1 = $_POST['stuclass1'];
@$stuclass2 = $_POST['stuclass2'];
//start of grading and rank
//rank
@$rank = $_POST['rank'];

//overall grade
@$og = $_POST['og'];
//remark
@$remark = $_POST['remark'];

//end of grading and rank
//start of remarks

@$engrem = $_REQUEST['engrem'];

@$bengrem = $_REQUEST['bengrem'];
@$rhyrem = $_REQUEST['rhyrem'];
@$dicrem = $_REQUEST['dicrem'];
@$conrem = $_REQUEST['conrem'];
@$drawrem = $_REQUEST['drawrem'];
@$currem = $_REQUEST['currem'];




//end of remarks

//start of calculations
@$dis = $_REQUEST['dis'];
@$resultp = $_REQUEST["PASS"];
@$resultf = $_REQUEST["FAIL"];

//english total marks
$etm1 = $engpt1 + $engnb1 + $engse1 + $eng1;
$etm2 = $engpt2 + $engnb2 + $engse2 + $eng2;
//bengali total marks
$btm1 = $bengpt1 + $bengnb1 + $bengse1 + $beng1;
$btm2 = $bengpt2 + $bengnb2 + $bengse2 + $beng2;

//rhymes total marks
$rtm1 = $rhypt1 + $rhynb1 + $rhyse1 + $rhy1;
$rtm2 = $rhypt2 + $rhynb2 + $rhyse2 + $rhy2;
//dictation total marks
$ditm1 = $dic1;
$ditm2 =  $dic2;
//conversation total marks
$cotm1 = $conv1;
$cotm2 =  $conv2;
//drawing total marks
$dtm1 = $drawpt1 + $drawnb1 + $drawse1 + $draw1;
$dtm2 = $drawpt2 + $drawnb2 + $drawse2 + $draw2;
//cursive total marks
$ctm1 =  $cur1;
$ctm2 = $cur2;


$ot1 = $etm1 + $btm1 +  $rtm1 + $ditm1 + $cotm1 + $dtm1 + $ctm1;
$ot2 = $etm2 + $btm2 +  $rtm2 + $ditm2 + $cotm2 + $dtm2 + $ctm2;



//only subject
$ogt2 = $etm1 + $etm2 + $btm1 + $btm2 +  $rtm1 + $rtm2 + $ditm1 + $ditm2 + $cotm1 + $cotm2 + $dtm1 + $dtm2 + $ctm1 + $ctm2;

$ogtp2 = $ogt2 / 550 * 100;
//average marks of both term
$etmavg = $etm1 / 2 + $etm2 / 2;
$btmavg = $btm1 / 2 + $btm2 / 2;

$rtmavg = $rtm1 / 2 + $rtm2 / 2;
$ditmavg = $ditm1 / 2 + $ditm2 / 2;
$contmavg = $cotm1 / 2 + $cotm2 / 2;
$dtmavg = $dtm1 / 2 + $dtm2 / 2;
$ctmavg = $ctm1 / 2 + $ctm2 / 2;




if ($ogt2 < 140) {
  $resultf = "FAIL";
} else {
  $resultp = "PASS";
}
$conn = new mysqli('localhost', 'u286343678_erjupi', 'Rajnagar98@#', 'u286343678_erjupi');
if ($conn->connect_error) {
  die('Connection failed :' . $conn->connect_error);
} else {
  $stmt = $conn->prepare(
    "insert into english(class, roll_no, name, engpt1, engpt2, engnb1, engnb2, engse1, engse2, eng1, eng2, engrem)
  values(?,?,?,?,?,?,?,?,?,?,?,?)"
  );
  $stmt->bind_param("ssssssssssss",$branch,$roll_no,$name,$engpt1,$engpt2,$engnb1,$engnb2,$engse1,$engse2,$eng1,$eng2,$engrem);
  $stmt->execute();
  $stmt->close();
  $conn->close();

}
?>


<?php
  
    
@$college = $_POST['college'];
@$branch = $_POST['branch'];
@$roll_no = $_POST['roll_no'];
@$enroll_no = $_POST['enroll_no'];
@$date = $_POST['date'];
@$name = $_POST['sname'];
@$fname = $_POST['fname'];
@$mname = $_POST['mname'];


//end of basic info
//start of subjects
//english
@$engpt1 = $_POST['engpt1'];
@$engpt2 = $_POST['engpt2'];
@$engnb1 = $_POST['engnb1'];
@$engnb2 = $_POST['engnb2'];
@$engse1 = $_POST['engse1'];
@$engse2 = $_POST['engse2'];
@$eng1 = $_POST['eng1'];
@$eng2 = $_POST['eng2'];
//bengali
@$bengpt1 = $_POST['bengpt1'];
@$bengpt2 = $_POST['bengpt2'];
@$bengnb1 = $_POST['bengnb1'];
@$bengnb2 = $_POST['bengnb2'];
@$bengse1 = $_POST['bengse1'];
@$bengse2 = $_POST['bengse2'];
@$beng1 = $_POST['beng1'];
@$beng2 = $_POST['beng2'];

//rhymes
@$rhypt1 = $_POST['rhypt1'];
@$rhypt2 = $_POST['rhypt2'];
@$rhynb1 = $_POST['rhynb1'];
@$rhynb2 = $_POST['rhynb2'];
@$rhyse1 = $_POST['rhyse1'];
@$rhyse2 = $_POST['rhyse2'];
@$rhy1 = $_POST['rhy1'];
@$rhy2 = $_POST['rhy2'];
//dictation
@$dicpt1 = $_POST['dicpt1'];
@$dicpt2 = $_POST['dicpt2'];
@$dicnb1 = $_POST['dicnb1'];
@$dicnb2 = $_POST['dicnb2'];
@$dicse1 = $_POST['dicse1'];
@$dicse2 = $_POST['dicse2'];
@$dic1 = $_POST['dic1'];
@$dic2 = $_POST['dic2'];
//conversation
@$convpt1 = $_POST['convpt1'];
@$convpt2 = $_POST['convpt2'];
@$convnb1 = $_POST['convnb1'];
@$convnb2 = $_POST['convnb2'];
@$convse1 = $_POST['convse1'];
@$convse2 = $_POST['convse2'];
@$conv1 = $_POST['conv1'];
@$conv2 = $_POST['conv2'];
//drawing
@$drawpt1 = $_POST['drawpt1'];
@$drawpt2 = $_POST['drawpt2'];
@$drawnb1 = $_POST['drawnb1'];
@$drawnb2 = $_POST['drawnb2'];
@$drawse1 = $_POST['drawse1'];
@$drawse2 = $_POST['drawse2'];
@$draw1 = $_POST['draw1'];
@$draw2 = $_POST['draw2'];
//cursive

@$cur1 = $_POST['cur1'];
@$cur2 = $_POST['cur2'];
//last

//end of subjects
//start co-scholastic areas 
//work education

@$work1 = $_POST['work1'];
@$work2 = $_POST['work2'];
//art education
@$art1 = $_POST['art1'];
@$art2 = $_POST['art2'];
//health and physical education
@$health1 = $_POST['health1'];
@$health2 = $_POST['health2'];
//discipline
@$dis1 = $_POST['dis1'];
@$dis2 = $_POST['dis2'];
//sports
@$sport1 = $_POST['sport1'];
@$sport2 = $_POST['sport2'];

//end of co-scholastic areas
//start of others
//working days
@$workdays1 = $_POST['workdays1'];
@$workdays2 = $_POST['workdays2'];
//present 
@$present1 = $_POST['present1'];
@$present2 = $_POST['present2'];
//students in the class
@$stuclass1 = $_POST['stuclass1'];
@$stuclass2 = $_POST['stuclass2'];
//start of grading and rank
//rank
@$rank = $_POST['rank'];

//overall grade
@$og = $_POST['og'];
//remark
@$remark = $_POST['remark'];

//end of grading and rank
//start of remarks

@$engrem = $_REQUEST['engrem'];

@$bengrem = $_REQUEST['bengrem'];
@$rhyrem = $_REQUEST['rhyrem'];
@$dicrem = $_REQUEST['dicrem'];
@$conrem = $_REQUEST['conrem'];
@$drawrem = $_REQUEST['drawrem'];
@$currem = $_REQUEST['currem'];




//end of remarks

//start of calculations
@$dis = $_REQUEST['dis'];
@$resultp = $_REQUEST["PASS"];
@$resultf = $_REQUEST["FAIL"];

//english total marks
$etm1 = $engpt1 + $engnb1 + $engse1 + $eng1;
$etm2 = $engpt2 + $engnb2 + $engse2 + $eng2;
//bengali total marks
$btm1 = $bengpt1 + $bengnb1 + $bengse1 + $beng1;
$btm2 = $bengpt2 + $bengnb2 + $bengse2 + $beng2;

//rhymes total marks
$rtm1 = $rhypt1 + $rhynb1 + $rhyse1 + $rhy1;
$rtm2 = $rhypt2 + $rhynb2 + $rhyse2 + $rhy2;
//dictation total marks
$ditm1 = $dic1;
$ditm2 =  $dic2;
//conversation total marks
$cotm1 = $conv1;
$cotm2 =  $conv2;
//drawing total marks
$dtm1 = $drawpt1 + $drawnb1 + $drawse1 + $draw1;
$dtm2 = $drawpt2 + $drawnb2 + $drawse2 + $draw2;
//cursive total marks
$ctm1 =  $cur1;
$ctm2 = $cur2;


$ot1 = $etm1 + $btm1 +  $rtm1 + $ditm1 + $cotm1 + $dtm1 + $ctm1;
$ot2 = $etm2 + $btm2 +  $rtm2 + $ditm2 + $cotm2 + $dtm2 + $ctm2;



//only subject
$ogt2 = $etm1 + $etm2 + $btm1 + $btm2 +  $rtm1 + $rtm2 + $ditm1 + $ditm2 + $cotm1 + $cotm2 + $dtm1 + $dtm2 + $ctm1 + $ctm2;

$ogtp = $ogt2 / 1100 * 100;
//average marks of both term
$etmavg = $etm1 / 2 + $etm2 / 2;
$btmavg = $btm1 / 2 + $btm2 / 2;

$rtmavg = $rtm1 / 2 + $rtm2 / 2;
$ditmavg = $ditm1 / 2 + $ditm2 / 2;
$contmavg = $cotm1 / 2 + $cotm2 / 2;
$dtmavg = $dtm1 / 2 + $dtm2 / 2;
$ctmavg = $ctm1 / 2 + $ctm2 / 2;




if ($ogt2 < 140) {
  $resultf = "FAIL";
} else {
  $resultp = "PASS";
}
$conn = new mysqli('localhost', 'u286343678_erjupi', 'Rajnagar98@#', 'u286343678_erjupi');
if ($conn->connect_error) {
  die('Connection failed :' . $conn->connect_error);
} else {
  $stmt = $conn->prepare(
    "insert into mathematics(class, roll_no, name, bengpt1, bengpt2, bengnb1, bengnb2, bengse1, bengse2, beng1, beng2, bengrem)
  values(?,?,?,?,?,?,?,?,?,?,?,?)"
  );
  $stmt->bind_param("ssssssssssss",$branch,$roll_no,$name,$bengpt1,$bengpt2,$bengnb1,$bengnb2,$bengse1,$bengse2,$beng1,$beng2,$bengrem);
  $stmt->execute();
  $stmt->close();
  $conn->close();

}
?>
<?php
  

@$branch = $_POST['branch'];
@$roll_no = $_POST['roll_no'];

@$name = $_POST['sname'];







@$dic1 = $_POST['dic1'];
@$dic2 = $_POST['dic2'];
//conversation



@$dicrem = $_REQUEST['dicrem'];






$conn = new mysqli('localhost', 'u286343678_erjupi', 'Rajnagar98@#', 'u286343678_erjupi');
if ($conn->connect_error) {
  die('Connection failed :' . $conn->connect_error);
} else {
  $stmt = $conn->prepare(
    "insert into dic(class, roll_no, name, dic1, dic2, dicrem)
  values(?,?,?,?,?,?)"
  );
  $stmt->bind_param("ssssss",$branch,$roll_no,$name,$dic1,$dic2,$dicrem);
  $stmt->execute();
  $stmt->close();
  $conn->close();

}
?>
<?php
  

@$branch = $_POST['branch'];
@$roll_no = $_POST['roll_no'];

@$name = $_POST['sname'];





//rhymes
@$rhypt1 = $_POST['rhypt1'];
@$rhypt2 = $_POST['rhypt2'];
@$rhynb1 = $_POST['rhynb1'];
@$rhynb2 = $_POST['rhynb2'];
@$rhyse1 = $_POST['rhyse1'];
@$rhyse2 = $_POST['rhyse2'];
@$rhy1 = $_POST['rhy1'];
@$rhy2 = $_POST['rhy2'];

@$engrem = $_REQUEST['engrem'];

@$bengrem = $_REQUEST['bengrem'];
@$rhyrem = $_REQUEST['rhyrem'];
@$dicrem = $_REQUEST['dicrem'];
@$conrem = $_REQUEST['conrem'];
@$drawrem = $_REQUEST['drawrem'];
@$currem = $_REQUEST['currem'];






$conn = new mysqli('localhost', 'u286343678_erjupi', 'Rajnagar98@#', 'u286343678_erjupi');
if ($conn->connect_error) {
  die('Connection failed :' . $conn->connect_error);
} else {
  $stmt = $conn->prepare(
    "insert into env(class, roll_no, name, rhypt1, rhypt2, rhynb1, rhynb2, rhyse1, rhyse2, rhy1, rhy2, rhyrem)
  values(?,?,?,?,?,?,?,?,?,?,?,?)"
  );
  $stmt->bind_param("ssssssssssss",$branch,$roll_no,$name,$rhypt1,$rhypt2,$rhynb1,$rhynb2,$rhyse1,$rhyse2,$rhy1,$rhy2,$rhyrem);
  $stmt->execute();
  $stmt->close();
  $conn->close();

}
?>
<?php
  

@$branch = $_POST['branch'];
@$roll_no = $_POST['roll_no'];

@$name = $_POST['sname'];


@$conv1 = $_POST['conv1'];
@$conv2 = $_POST['conv2'];







@$conrem = $_REQUEST['conrem'];






$conn = new mysqli('localhost', 'u286343678_erjupi', 'Rajnagar98@#', 'u286343678_erjupi');
if ($conn->connect_error) {
  die('Connection failed :' . $conn->connect_error);
} else {
  $stmt = $conn->prepare(
    "insert into conv(class, roll_no, name, conv1, conv2, convrem)
  values(?,?,?,?,?,?)"
  );
  $stmt->bind_param("ssssss",$branch,$roll_no,$name,$conv1,$conv2,$conrem);
  $stmt->execute();
  $stmt->close();
  $conn->close();

}
?>
<?php
  

@$branch = $_POST['branch'];
@$roll_no = $_POST['roll_no'];

@$name = $_POST['sname'];





//rhymes
@$drawpt1 = $_POST['drawpt1'];
@$drawpt2 = $_POST['drawpt2'];
@$drawnb1 = $_POST['drawnb1'];
@$drawnb2 = $_POST['drawnb2'];
@$drawse1 = $_POST['drawse1'];
@$drawse2 = $_POST['drawse2'];
@$draw1 = $_POST['draw1'];
@$draw2 = $_POST['draw2'];


@$drawrem = $_REQUEST['drawrem'];







$conn = new mysqli('localhost', 'u286343678_erjupi', 'Rajnagar98@#', 'u286343678_erjupi');
if ($conn->connect_error) {
  die('Connection failed :' . $conn->connect_error);
} else {
  $stmt = $conn->prepare(
    "insert into bengali(class, roll_no, name, drawpt1, drawpt2, drawnb1, drawnb2, drawse1, drawse2, draw1, draw2, drawrem)
  values(?,?,?,?,?,?,?,?,?,?,?,?)"
  );
  $stmt->bind_param("ssssssssssss",$branch,$roll_no,$name,$drawpt1,$drawpt2,$drawnb1,$drawnb2,$drawse1,$drawse2,$draw1,$draw2,$drawrem);
  $stmt->execute();
  $stmt->close();
  $conn->close();

}
?>
<?php
  

@$branch = $_POST['branch'];
@$roll_no = $_POST['roll_no'];

@$name = $_POST['sname'];


@$conv1 = $_POST['cur1'];
@$conv2 = $_POST['cur2'];







@$conrem = $_REQUEST['currem'];






$conn = new mysqli('localhost', 'u286343678_erjupi', 'Rajnagar98@#', 'u286343678_erjupi');
if ($conn->connect_error) {
  die('Connection failed :' . $conn->connect_error);
} else {
  $stmt = $conn->prepare(
    "insert into cur(class, roll_no, name, cur1, cur2, currem)
  values(?,?,?,?,?,?)"
  );
  $stmt->bind_param("ssssss",$branch,$roll_no,$name,$cur1,$cur2,$currem);
  $stmt->execute();
  $stmt->close();
  $conn->close();

}
?>


<?php
  
    

@$branch = $_POST['branch'];
@$roll_no = $_POST['roll_no'];

@$name = $_POST['sname'];




@$dis = $_REQUEST['dis'];
@$resultp = $_REQUEST["PASS"];
@$resultf = $_REQUEST["FAIL"];



$ot1 = $etm1 + $btm1 +  $rtm1 + $ditm1 + $cotm1 + $dtm1 + $ctm1;
$ot2 = $etm2 + $btm2 +  $rtm2 + $ditm2 + $cotm2 + $dtm2 + $ctm2;



//only subject
$ogt2 = $etm1 + $etm2 + $btm1 + $btm2 +  $rtm1 + $rtm2 + $ditm1 + $ditm2 + $cotm1 + $cotm2 + $dtm1 + $dtm2 + $ctm1 + $ctm2;

$ogtp = $ogt2 / 1100 * 100;




if ($ogt2 < 140) {
  $resultf = "FAIL";
} else {
  $resultp = "PASS";
}
$conn = new mysqli('localhost', 'u286343678_erjupi', 'Rajnagar98@#', 'u286343678_erjupi');
if ($conn->connect_error) {
  die('Connection failed :' . $conn->connect_error);
} else {
  $stmt = $conn->prepare(
    "insert into ot(class, roll_no, name, ot1, ot2, ogt2, ogtp)
  values(?,?,?,?,?,?,?)"
  );
  $stmt->bind_param("sssssss",$branch,$roll_no,$name,$ot1,$ot2,$ogt2,$ogtp);
  $stmt->execute();
  $stmt->close();
  $conn->close();

}
?>
<?php
  
    
@$branch = $_POST['branch'];
@$roll_no = $_POST['roll_no'];

@$name = $_POST['sname'];



//end of subjects
//start co-scholastic areas 
//work education

@$work1 = $_POST['work1'];
@$work2 = $_POST['work2'];
//art education
@$art1 = $_POST['art1'];
@$art2 = $_POST['art2'];
//health and physical education
@$health1 = $_POST['health1'];
@$health2 = $_POST['health2'];
//discipline
@$dis1 = $_POST['dis1'];
@$dis2 = $_POST['dis2'];
//sports
@$sport1 = $_POST['sport1'];
@$sport2 = $_POST['sport2'];

//end of co-scholastic areas
//start of others
//working days
@$workdays1 = $_POST['workdays1'];
@$workdays2 = $_POST['workdays2'];
//present 
@$present1 = $_POST['present1'];
@$present2 = $_POST['present2'];
//students in the class
@$stuclass1 = $_POST['stuclass1'];
@$stuclass2 = $_POST['stuclass2'];
//start of grading and rank
//rank
@$rank = $_POST['rank'];

//overall grade
@$og = $_POST['og'];
//remark
@$remark = $_POST['remark'];


if ($ogt2 < 140) {
  $resultf = "FAIL";
} else {
  $resultp = "PASS";
}
$conn = new mysqli('localhost', 'u286343678_erjupi', 'Rajnagar98@#', 'u286343678_erjupi');
if ($conn->connect_error) {
  die('Connection failed :' . $conn->connect_error);
} else {
  $stmt = $conn->prepare(
    "insert into others(branch, roll_no, name,  work1,  work2, art1, art2, health1, health2, dis1, dis2, sports1, sports2)
  values(?,?,?,?,?,?,?,?,?,?,?,?,?)"
  );
  $stmt->bind_param("sssssssssssss",$branch,$roll_no,$name,$work1,$work2,$art1,$art2,$health1,$health2,$dis1,$dis2,$sports1,$sports2 );
  $stmt->execute();
  $stmt->close();
  $conn->close();

}
?>
<?php
  
    
@$branch = $_POST['branch'];
@$roll_no = $_POST['roll_no'];

@$name = $_POST['sname'];



//end of subjects
//start co-scholastic areas 
//work education


//start of grading and rank
//rank
@$rank = $_POST['rank'];

//overall grade
@$og = $_POST['og'];
//remark
@$remark = $_POST['remark'];

@$workdays1 = $_POST['workdays1'];
@$workdays2 = $_POST['workdays2'];
//present 
@$present1 = $_POST['present1'];
@$present2 = $_POST['present2'];
//students in the class
@$stuclass1 = $_POST['stuclass1'];
@$stuclass2 = $_POST['stuclass2'];

$conn = new mysqli('localhost', 'u286343678_erjupi', 'Rajnagar98@#', 'u286343678_erjupi');
if ($conn->connect_error) {
  die('Connection failed :' . $conn->connect_error);
} else {
  $stmt = $conn->prepare(
    "insert into misc(branch, roll_no, name,  rank,  og,  remark, workdays1, workdays2, present1, present2, stuclass1, stuclass2)
  values(?,?,?,?,?,?,?,?,?,?,?,?)"
  );
  $stmt->bind_param("ssssssssssss",$branch,$roll_no,$name,$rank,$og,$remark,$workdays1,$workdays2,$present1,$present2,$stuclass1,$stuclass2);
  $stmt->execute();
  $stmt->close();
  $conn->close();

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Berean English Medium School</title>

  <style type="text/css">
    <!--
    .style1 {
      font-size: 24px;
      font-weight: bold;
      color: #0F65AF;
    }

    .style2 {
      font-size: 12px
    }

    .style3 {
      font-size: 12px;
      color: #0F65AF;
    }

    .style4 {
      color: #0F65AF
    }

    .style6 {
      color: #0F65AF;
      font-style: italic;
      writing-mode: tb-rl;
    }

    .style9 {
      font-size: 14px;
      color: #0F65AF;
    }

    @media print {
      #printPageButton {
        display: none;
      }
    }
    -->
    @import
    url('https://fonts.googleapis.com/css?family=Raleway+Dots');
    @font-face
    {
    font-family:
    myFirstFont;
    src:
    url(Dot_Matrix.ttf);
    }
    .style11
    {
    color:
    #000000;
    font-family:
    'Dot
    Matrix';
    font-weight:
    bold;
    }
    .style12
    {
    color:
    #0F65AF;
    font-weight:
    bold;
    }
    .style13
    {
    color:
    #006600;
    font-weight:
    bold;
    }
    .style14
    {
    color:
    #FF0000;
    font-weight:
    bold;
    }
    .style15
    {
    color:
    #000000
    }
    body
    {
    -webkit-user-select:
    none;
    /*
    Chrome,
    Opera,
    Safari
    */
    -moz-user-select:
    none;
    /*
    Firefox
    2+
    */
    -ms-user-select:
    none;
    /*
    IE
    10+
    */
    user-select:
    none;
    /*
    Standard
    syntax
    */
    }
  </style>


</head>

<body>
    
  <form action="" method="post">
    <table width="1041" border="0" align="center">

      <tr>
        <td height="54" colspan="2"><img src="images/logo.jpg" width="120" height="160"></td>
        </td>
        <td colspan="9" style=" border-top: thin solid; border-bottom: thin solid;">
          <h4 align="center"><span class="style4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Affiliation No</span>:<span class="style4"></span> 2030037 </h4>
          <p align="center" class="style1">BEREAN ENGLISH MEDIUM SCHOOL</p>
          <p align="center" class="style3">Mandwi, West Tripura</p>
          <p align="center" class="style3">(A CBSE Affiliated Secondary Co-Educational English Medium School) </p>
          <p align="center"><span class="style4">Website:</span>www.bereanschooltripura.org</p>
          <h1 align="center" class="style4"><u>Report Card</u> </h1>

          <p align="center" color="#000000">(Class: I-III)</p>
        </td>
        <td colspan="4">
          <p><span class="style4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="style4"></span> </p>
          <p><span class="style4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Session: 2019-2020)</span></p>
        </td>
      </tr>
      <tr>
        <td colspan="12">
        <td width="50" height="77" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9"><img src="<?php echo $image ?>" height="42" width="42">  </span></td>


        </span>
        </td>

      </tr>
    
      <tr>
        <td colspan="6" style=" border-top: thin solid; "><span class=" style4">Roll No.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style15"><?php echo $roll_no ?></span></span></td>
        <td colspan="7" style=" border-top: thin solid; ><span class=" style4">Class:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style15"><?php echo $branch ?></span></td>
      </tr>
      <td colspan="7"><span class="style4">Address: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style15"><?php echo $enroll_no ?> </span></span></td>
      </tr>
      <tr>

        <td colspan="6" style=""><span class="style4">Name of Candidate:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style15"><?php echo $name ?></span></span></td>

      </tr>
      <tr>
        <td colspan="13" style=""><span class="style4">Father's Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style15"><?php echo $fname ?> </span></span></td>
      </tr>
      <tr>
        <td colspan="13" style=" "><span class="style4">Mother's Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style15"><?php echo $mname ?></span></span></td>
      </tr>
      <tr>
        <td colspan="13" style=" border-bottom: thin solid;"><span class="style4">Name of School: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style15"><?php echo $college ?></span></span></td>
      </tr>

      <tr border="1">
        <td colspan="3" rowspan="2" background="images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;">
          <div align="center"><span class="style4">Subjects </span></div>
        </td>

        <td colspan="5" background="images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;">
          <div align="center"><span class="style4">Term-I </span></div>
        </td>

        <td colspan="5" background="images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;">
          <div align="center"><span class="style4">Term-II </span></div>
        </td>

        <td colspan="2" background="images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;">
          <div align="center"><span class="style4">Final </span></div>
        </td>


      </tr>
      <tr>
        <td width="30" height="77" background="images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9">
            PT
            1(OUT
            OF 10) </span></td>


        <td width="50" height="77" background="images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9">NOTE
            BOOK 1
            (OUT OF 5) </span></td>

        <td width="50" height="77" background="images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9">S.
            ENRICH
            MENT
            (OUT OF 5) </span></td>

        <td width="50" height="77" background="images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9">HALF
            YEARLY
            EXAM(OUT OF 80) </span></td>

        <td width="50" height="77" background="images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9">TOTAL </span></td>

        <td width="50" height="77" background="images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9">PT 2(OUT OF 10)</span></td>

        <td width="50" height="77" background="images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9">NOTE BOOK 2(OUT OF 5)</span></td>

        <td width="50" height="77" background="images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9">S.
            ENRICH
            MENT
            (OUT OF 5) </span></td>

        <td width="30" height="77" background="images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9">YEARLY
            EXAM
            (OUT OF 80)</span></td>
        <td width="30" height="77" background="images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9">TOTAL </span></td>
        <td width="50" height="77" background="images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9">GRAND TOTAL
            (TERM I+
            II/2) </span></td>
        <td width="50" height="77" background="images/bgu.png" style="border-left: thin solid; border-top: thin solid; border-bottom: thin solid;border-right: thin solid;"><span class="style9">GRADE </span></td>
      </tr>
      <tr>
        <td colspan="3" background="images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><span class="style11"><strong>THEORY PAPERS-------></strong> </span></td>

        <td background="images/bgu.png" style="border-right:thin solid">&nbsp;</td>
        <td background="images/bgu.png" style="border-right:thin solid">&nbsp;</td>
        <td background="images/bgu.png" style="border-right:thin solid">&nbsp;</td>
        <td background="images/bgu.png" style="border-right:thin solid">&nbsp;</td>
        <td background="images/bgu.png" style="border-right:thin solid">&nbsp;</td>
        <td background="images/bgu.png" style="border-right:thin solid">&nbsp;</td>
        <td background="images/bgu.png" style="border-right:thin solid">&nbsp;</td>
        <td background="images/bgu.png" style="border-right:thin solid">&nbsp;</td>
        <td background="images/bgu.png" style="border-right:thin solid">&nbsp;</td>
        <td background="images/bgu.png" style="border-right:thin solid">&nbsp;</td>
        <td background="images/bgu.png" style="border-right:thin solid">&nbsp;</td>
        <td background="images/bgu.png" style="border-right:thin solid">&nbsp;</td>
      </tr>

      <tr>
        <td colspan="3" background="images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">01&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ENGLISH<span></label></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $engpt1 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $engnb1 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $engse1 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $eng1 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $etm1 ?></td>

        </td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $engpt2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $engnb2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $engse2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $eng2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $etm2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $etmavg ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $engrem ?></td>
      </tr>



      <tr>
        <td colspan="3" background="images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">02 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MATHEMATICS <span></label></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $bengpt1 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $bengnb1 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $bengse1 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $beng1 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $btm1 ?></td>

        </td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $bengpt2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $bengnb2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $bengse2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $beng2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $btm2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $btmavg ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $bengrem ?></td>
      </tr>

      <tr>
        <td colspan="3" background="images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">03&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ENVIRONMENTAL STUDIES<span></label></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $rhypt1 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $rhynb1 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $rhyse1 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $rhy1 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $rtm1 ?></td>

        </td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $rhypt2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $rhynb2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $rhyse2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $rhy2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $rtm2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $rtmavg ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $rhyrem ?></td>
      </tr>

      <tr>
        <td colspan="3" background="images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">04 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMPUTER(OUT OF 50)<span></label></td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">xxxx</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">xxxx</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">xxxx</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $dic1 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $ditm1 ?></td>

        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">xxxx</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">xxxx</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">xxxx</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $dic2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $ditm2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $ditmavg ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $dicrem ?></td>
      </tr>

      <tr>
        <td colspan="3" background="images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">05&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HINDI(OUT OF 50)<span></label></td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">xxxx</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">xxxx</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">xxxx</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $conv1 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $cotm1 ?></td>

        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">xxxx</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">xxxx</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">xxxx</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $conv2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $cotm2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $contmavg ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $conrem ?></td>
      </tr>

      <tr>
        <td colspan="3" background="images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">06 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BENGALI<span></label></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $drawpt1 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $drawnb1 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $drawse1 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $draw1 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $dtm1 ?></td>

        </td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $drawpt2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $drawnb2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $drawse2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $draw2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $dtm2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $dtmavg ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;"><?php echo $drawrem ?></td>
      </tr>


      <tr>
        <td colspan="3" background="images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">07 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MORAL SCIENCE(OUT OF 50)<span></label></td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">xxxx</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">xxxx</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">xxxx</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;"><?php echo $cur1 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;"><?php echo $ctm1 ?></td>

        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">xxxx</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">xxxx</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">xxxx</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;"><?php echo $cur2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;"><?php echo $ctm2 ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;"><?php echo $ctmavg ?></td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;"><?php echo $currem ?></td>
      </tr>
      <tr>
        <td colspan="3" background="images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><span class="style11"><strong>CO-SCHOLASTIC AREAS---------></strong> </span></td>

        <td background="images/bgu.png">&nbsp;</td>
        <td background="images/bgu.png">&nbsp;</td>
        <td background="images/bgu.png" style="border-right:thin solid">&nbsp;</td>
        <td background="images/bgu.png">&nbsp;</td>
        <td background="images/bgu.png">&nbsp;</td>
        <td background="images/bgu.png" style="border-right:thin solid">&nbsp;</td>
        <td background="images/bgu.png">&nbsp;</td>
        <td background="images/bgu.png">&nbsp;</td>
        <td background="images/bgu.png">&nbsp;</td>
      </tr>

      <tr>
        <td colspan="3" background="images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">01--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; WORK EDUCATION<span></label></td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <?php echo $work1  ?>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <?php echo $work2 ?>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <div align="center">------</div>
        </td>
      </tr>

      <tr>
        <td colspan="3" background="images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">02-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ART EDUCATION<span></label></td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <?php echo $art1  ?>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <?php echo $art2 ?>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>

      </tr>

      <tr>
        <td colspan="3" background="images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">03-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HEALTH AND PHYSICAL EDUCATION <span></label></td>

        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <?php echo $health1  ?>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <?php echo $health2 ?>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>

      <tr>
        <td colspan="3" background="images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><span class="style11">04-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DISCIPLINE<span></td>

        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <?php echo $dis1  ?>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <?php echo $dis2 ?>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
      </tr>
      <tr>
        <td colspan="3" background="images/bgu.png" style="border-left: thin solid; border-right: thin solid; border-bottom: thin solid"><span class="style11">05----&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SPORTS <span></td>

        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <?php echo $sport1  ?>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <?php echo $sport2 ?>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">------</div>
        </td>
      </tr>
      <tr>
        <td colspan="3" background="images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><span class="style11"><strong>OTHERS---------></strong> </span></td>

        <td background="images/bgu.png">&nbsp;</td>
        <td background="images/bgu.png">&nbsp;</td>
        <td background="images/bgu.png" style="border-right:thin solid">&nbsp;</td>
        <td background="images/bgu.png">&nbsp;</td>
        <td background="images/bgu.png">&nbsp;</td>
        <td background="images/bgu.png" style="border-right:thin solid">&nbsp;</td>
        <td background="images/bgu.png">&nbsp;</td>
        <td background="images/bgu.png">&nbsp;</td>
        <td background="images/bgu.png">&nbsp;</td>
      </tr>

      <tr>
        <td colspan="3" background="images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">01--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NO. OF WORKING DAYS<span></label></td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <?php echo $workdays1  ?>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <?php echo $workdays2 ?>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-top: thin solid;">
          <div align="center">------</div>
        </td>
      </tr>

      <tr>
        <td colspan="3" background="images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">02-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NO. OF PRESENT<span></label></td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <?php echo $present1  ?>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <?php echo $present2 ?>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>

      </tr>

      <tr>
        <td colspan="3" background="images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><label><span class="style11">03-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NO OF STUDENTS IN THE CLASS <span></label></td>

        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <?php echo $stuclass1  ?>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <?php echo $stuclass2 ?>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>

      <tr>
        <td colspan="3" background="images/bgu.png" style="border-left: thin solid; border-right: thin solid;"><span class="style11">04-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIGNATURE OF CLASS TEACHER<span></td>

        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          .....
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          .....
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;">
          <div align="center">------</div>
        </td>
      </tr>
      <tr>
        <td colspan="3" background="images/bgu.png" style="border-left: thin solid; border-right: thin solid; border-bottom: thin solid"><span class="style11">05----&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIGNATURE OF PARENTS/GUARDIAN <span></td>

        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          .....
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          .....
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">------</div>
        </td>
        <td background="images/bgu.png" style="border-right: thin solid;border-bottom: thin solid;">
          <div align="center">------</div>
        </td>
      </tr>
      <tr>
        <td colspan="2"><span class="style11"><strong>8 points
              grading system:</strong> </span></td>

        <td background="images/bgu.png">A1(91%-100%),
          A2(81%-91%)</td>
        <td background="images/bgu.png">B1(72%-80%),
          B2(61%-70%)</td>
        <td background="images/bgu.png">C1(51%-60%),
          C2(41%-50%)</td>
        <td background="images/bgu.png">D(35%-40%)</td>
        <td background="images/bgu.png">E(32%-BELOW)</td>
      </tr>
      <tr>
        <td width="263" rowspan="2" background="images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid ">
          <div align="center" class="style4">Marks and Percentage </div>
        </td>

        <td width="224" background="images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid ">
          <div align="center" class="style12">Overall Marks Term I</div>
        </td>
        <td width="224" background="images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid ">
          <div align="center" class="style12">Overall Marks Term II </div>
        </td>


        <td width="224" background="images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid ">
          <div align="center" class="style4"><strong>Rank </strong></div>
        </td>

        <td width="224" background="images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid ">
          <div align="center" class="style4"><strong>Overall Grade <br />
            </strong></div>
        </td>



        <td colspan="4" background="images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid ">
          <div align="center" class="style4"><strong>Grand Total </strong></div>
        </td>
      </tr>
      <tr>

        <td background="images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid ">
          <div align="center"><?php echo $ot1  ?>/550</div>
        </td>
        <td background="images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid ">
          <div align="center"><?php echo $ot2  ?>/550</div>
        </td>

        <td background="images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid ">
          <div align="center"><?php echo $rank ?></div>
        </td>

        <td width="224" background="images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid ">
          <div align="center"><?php echo $og ?></div>
        </td>


        <td colspan="4" background="images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid ">
          <div align="center"><?php echo $ogt2 ?></div>
        </td>
      </tr>
      <tr>
        <td background="images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid "><span class="style4">Percentage of Marks </span></td>

        <td background="images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid ">
          <div align="center"><strong><?php echo round($ogtp, 2) ?>%</strong></div>
        </td>

      </tr>
      <tr>
        <td colspan="5" background="images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid "><span class="style4">Result :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style13"><?php echo $resultp ?></span> <span class="style14"><?php echo $resultf ?></span> </td>
      </tr>
      <tr>
        <td colspan="5" background="images/bgu.png" style="border-right:thin solid; border-top:thin solid ;border-bottom:thin solid;border-left:thin solid "><span class="style4">REMARKS :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style13"><?php echo $remark ?></span> </td>
      </tr>
      <tr>


        </p>
        </ol>
        </td>
      </tr>
      <tr>
        <td height="107" colspan="13">
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/logo--hindinew.png" width="52"></p>
          <p><span class="style4"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style4"> RESULT DECLARED ON: &nbsp;&nbsp;&nbsp;<?php echo $date ?> </span></p>
          <p class="style4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINCIPAL </p>
        </td>
        </td>
      </tr>
      <tr>
        <td height="107" colspan="13">





        </td>
      </tr>
    </table>
  </form>



</body>

</html>
