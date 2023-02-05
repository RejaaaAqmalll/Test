<?php
$string = 0;
$bool = 0;
$number = 0;
$get_data = file_get_contents("data.json");
// $data = (json_encode(json_decode($get_data, true)));
$data = json_decode($get_data, true);
// print_r($data);

// $awal = str_replace('{', '[', $data);
// $akhir = str_replace('}', ']', $awal);

// if (is_string($data)==true){
//     echo '<h3>ini adalah string</h3>';
// } else{
//     echo 'salah';
// }

function cekdata($data){
    // echo $string;
    if (is_string($data)){
        echo "string";
    }elseif(is_bool($data)){
        echo "boolean";
    } elseif(is_numeric($data)){
        echo "bilangan";
    }
    else{
        echo "bukan termasuk tipe data";
    }
}
// cekdata($data);


// $i = 0;
// while ($i <count(cekdata($data))){
//     echo $data[$i];
// }
// $dataset = $this->cekdata();
// cetak 1 array
foreach ($data as $key => $value){
    // echo cekdata($value);
    // echo "<br>";
    // return ($data as $key => $value);
    // return cekdata($data, $value)
    if (is_string($value)){
        $string++;
    } elseif (is_bool($value)){
        $bool++;
    } elseif (is_numeric($value)) {
        $number++;
    } else {
        foreach ($value as $kunci => $isi) {
            
        }
    }
}
echo "string : ". $string;
echo "boolean : ". $bool;
echo "number : ". $number;

// function ulang($data){
    
// }
// function cekarray($data) {
//     return $data;
// }


// for ($i=0; $i<count(); $i++){
// }

// print_r($akhir);
// count(json_encode($get_data, ));

// for ($i=0; $i <count($) ; $i++) { 
//     # code...
// }

// echo $ambil_data;


// echo $akhir;

// $jumlah = count($data);

// echo $jumlah;

// if (is_string($ambil_data)==true){
//     echo $jumlah;
// } elseif(is_bool($ambil_data)==true){
//     echo 'ini boolean';
// } else{
//     echo 'salah';
// }




// else {
//     echo "salah";
// }




// echo json_encode($data);
    // function cek($data){
        
    // }

?>