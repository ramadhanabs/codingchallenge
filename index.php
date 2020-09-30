<?php
//Palindrome
function StringChallenge($str) {

  // code goes here
  $str = str_replace(" ","", $str);
  $str = preg_replace("/\p{P}/", "", $str);
  $str = preg_replace("/\d+/", "", $str);
  
  if(strrev($str) == $str){
    $str = "true";
  } else {
    $str = "false";
  }

  return $str;
  }
  
+++++++++++++++++++++++++++++++++++++++++++++++++++++++
  
//Largest Third
function ArrayChallenge($strArr) {

  // code goes here
  $numberArray=[];
  for($i = 0; $i < count($strArr); $i++){
    $numberArray[$i] = strlen($strArr[$i]);
  }

  usort($strArr, function($a, $b){
    return strlen($b) <=> strlen($a);
  });

  $indexlama = 0;
  $indexbaru = 0;
  $nlama = 0;
  $nbaru = 0;
  for($i = 0;$i < count($strArr)-1;$i++){
    if(strlen($strArr[$i]) == strlen($strArr[$i+1])){
      $nbaru++;
      $indexbaru = $i+1;
    }else{
      $nlama = $nbaru;
      $nbaru = 0;
    }
    if($nlama<$nbaru){
      $indexlama = $indexbaru;
    }
  }
  echo($strArr[$indexlama]);
  // var_dump($strArr);

}

+++++++++++++++++++++++++++++++++++++++++++++++++++++++

//Largest Four
function ArrayChallenge($arr) {

  // code goes here
  
  rsort($arr);
  $sum = $arr[0] + $arr[1] + $arr[2] + $arr[3];
  return $sum;

}

+++++++++++++++++++++++++++++++++++++++++++++++++++++++

//permutation step

function MathChallenge($num) {

  // code goes here
  $array = str_split($num);
  $a = (strlen($num)-1)/2;
  $b = strlen($num)-1;

  $splice = array_splice($array,$a,1);
  array_splice($array, $b, 0, $splice);
  $result = implode($array);

  if($num < $result){
    echo $result;
  } else if ($num == $result | $num > $result){
    return -1;
  }


}

+++++++++++++++++++++++++++++++++++++++++++++++++++++++

//Palindromic Substring

function SearchingChallenge($str) {
  $result ='a';
  for ($i = 0;$i<strlen($str);$i++){
    for ($j = strlen($str)-$i ; $j>=$i;$j--){
      $word = substr($str,$i,$j);
      if($word == strrev($word)){
        if(strlen($result)<strlen($word)){
          $result = $word;
        }
      }
    }
  }
  if(strlen($result)<=2){
    $result ='none';
  }
  return $result;
}

?>
