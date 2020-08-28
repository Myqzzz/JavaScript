<?php
header("Content-type: text/html; charset=gb2312");

//echo "<span style='color: red'>"."你好，".$_GET["fname"]." ".$_GET['lname']."今天过得怎么样？"."</span>";
echo "<span style='color: red'>"."你好，".$_POST["fname"]." ".$_POST['lname']."今天过得怎么样？"."</span>";