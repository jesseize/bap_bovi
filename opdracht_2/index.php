<?php
$teachers = array("test","test1","test2","test3");

echo $teachers[1];

$teachers[1] = 'ed';

array_push($teachers,'test');
foreach($teachers as $teacher) {
  print '<pre>'.$teacher.'</pre>';
}

$subjects = array('test' => 'test2','test1' => 'test3','test4' => 'test5');
foreach ($subjects as $teacher => $subject) {
  print '<pre>'.$teacher.' teaches  '. $subject. '</pre>';
}

?>
