<?php
//    $data = [];
//
//    $data[0] = 10;
//    $data[1] = 20;
//    $data[3] = 30;
//
//    $data['name']='Moshiur';
//    $data['city']='Mirpur';
//    $data['country']='Bangladesh';
//
//    echo $data['name'].""$data['city'].$data['country'];


//
//Associate Array
//$data = [
//    'name' => 'Moshiur',
//    'city' => 'Mirpur',
//    'country' => 'Bangladesh',
//    'phone' => '01671565275',
//    'gender' => 'Male',
//];

//echo $data['name'];


//all value
//foreach ($data as $value){
//    echo $value.'<br>';
//}




//For showing with info
//echo '<pre>';
//print_r($data);




//For showing with length
//echo '<pre>';
//var_dump($data);




////Multi-dymansion Array//
//
//$data = [];
//
//$data [0][0] =10;
//$data [0][1] =20;
//$data [0][2] =30;
//
//$data [1][0] =40;
//$data [1][1] =50;
//$data [1][2] =60;
//
//$data [2][0] =70;
//$data [2][1] =80;
//$data [2][2] =90;
//
//$data [3][0] =100;
//$data [3][1] =110;
//$data [3][2] =120;
//
//foreach ($data as $value){
////    echo $value[0].' '.$value[1].' '.$value[2].'<br>';
//    foreach ($value as $v_value){
//        echo $v_value.' ';
//    }
//    echo '<br>';
//}




//function demo(){
//    $firstName = "Ahashan";
//    $lastName = "Imon";
//
//    $fullName = $firstName.' '.$lastName;
//    echo $fullName;
//}
//
//demo();




//function demo($firstName,$lastName){
////    $firstName = "Ahashan";
////    $lastName = "Imon";
//
//    $fullName = $firstName.' '.$lastName;
//    echo $fullName;
//}
//
//echo '<br>..........<br>';
//demo('Ahashan','Imon');
//
//echo '<br>..........<br>';
//demo('Ahashan','Imon');
//
//echo '<br>..........<br>';
//demo('Ahashan','Imon');


//function demo($firstName,$lastName=null){
//
//
//    $fullName = $firstName.' '.$lastName;
////    echo $fullName;
//    return $fullName;
//}
//
//echo '<br>..........<br>';
//echo demo('Ahashan');
//
//echo '<br>..........<br>';
//$res = demo('Ahashan','Imon');
//echo 'Full name is: '.$res;
//
//echo '<br>..........<br>';
//echo demo('Ahashan','Imon');
//





//CLASS
class DemoTwo {
    public $name = 'Ahashan';
    public $city = 'Tikatoli';

    function add(){
        echo 'In Add';
    }

    function hello(){
        echo 'In hello';
    }
}

$demo = new DemoTwo;

$demo->;

//echo $demo->name;