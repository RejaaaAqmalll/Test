<?php
//  deklarasi variabel awal
$string = 0;
$bool = 0;
$number = 0;
//  memanggil file json
$get_data = file_get_contents("data.json");
//  membaca data json ke object
$data = json_decode($get_data, true);

//  function untuk menghitung type data
function HitungTypeData($data){
    //  memanggil variabel diluar function
    global $string;
    global $bool;
    global $number;
    // echo $string;
    if (is_string($data)){
        $string++;
    }elseif(is_bool($data)){
        $bool++;
    } elseif(is_numeric($data)){
        $number++;
    } else {
        LoopPaksa($data);
    }
}
// memaksa looping type data diluar string, bool dan numeric
function LoopPaksa($obj) {
    foreach($obj as $key => $value) {
        HitungTypeData($value);
    }
}
// memanggil function agar bisa bekerja
HitungTypeData($data);
// output 
echo "string : ". $string."<br />";
echo "boolean : ". $bool."<br />";
echo "number : ". $number."<br />";

?>