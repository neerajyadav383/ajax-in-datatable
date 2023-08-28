<?php

$json = '{
    "data": [
      {
        "employee_id": "emp1",
        "name": "Teza",
        "designation": "Architect",
        "salary": "Rs.350,800",     
        "city": "Lucknow",
        "address": "54,komal street"
      },
      {
        "employee_id": "emp2",
        "name": "Garima",
        "designation": "Accountant",
        "salary": "Rs.180,050",    
        "city": "Hyderabad",
        "address": "Hitech city,kodapur"
      },
      {
        "employee_id": "emp3",
        "name": "Ashmita",
        "designation": "Technical Author",
        "salary": "Rs.186,000",    
        "city": "Kolkatta",
        "address": "156, new park,chowk"
      },
      {
        "employee_id": "emp4",
        "name": "Celina",
        "designation": "Javascript Developer",
        "salary": "Rs.450,000",     
        "city": "Itanagar",
        "address": "chandni chowk,new lane"
      },
      {
        "employee_id": "emp5",
        "name": "Asha",
        "designation": "Accountant",
        "salary": "Rs.542,700",   
        "city": "Tokyo",
        "address": "54,Japanese colony"
      },
      {
        "employee_id": "emp6",
        "name": "Baren Samal",
        "designation": "Integration Specialist",
        "salary": "Rs.370,000",    
        "city": "New Delhi",
        "address": "48,RK puram"
      },
      {
        "employee_id": "emp7",
        "name": "Hari Om",
        "designation": "Sales Manager",
        "salary": "Rs.437,500",     
        "city": "Raipur",
        "address": "Sector 6,bhilai"
      },
      {
        "employee_id": "emp8",
        "name": "Ranu",
        "designation": "Integration Specialist",
        "salary": "Rs.330,900",     
        "city": "Tokyo",
        "address": "64,indian colony"
      },
      {
        "employee_id": "emp9",
        "name": "Celly",
        "designation": "PHP Developer",
        "salary": "Rs.275,500",    
        "city": "Secunderabad",
        "address": "23,Sainikpuri"
      },
     {
        "employee_id": "emp55",
        "name": "Ama",
        "designation": "Director",
        "salary": "Rs.985,000",    
        "city": "kanpur",
        "address": "63,Narangi lane"
      },
      {
        "employee_id": "emp56",
        "name": "Michael Jackson",
        "designation": "C++ Developer",
        "salary": "Rs.783,000",    
        "city": "Singapore",
        "address": "53,Sweetpark"
      },
      {
        "employee_id": "emp57",
        "name": "Danny",
        "designation": "Customer Support",
        "salary": "Rs.345,000",    
        "city": "Ludhiana",
        "address": "456,Punjab"
      }
    ]
  }';
//   $json = json_decode($json, true);
//   $json = json_encode($json, true);

print_r($json);
return;
















// die();die();
// date_default_timezone_set("Asia/Kolkata");
// $date = date('Y-m-d H:i:s');
// $conn = mysqli_connect('localhost', 'root', '', 'database');
// $url3 = "https://api.telegram.org/bot6463224978:AAFP_ChPYGPclZlFXwuKQOvlkxbmMc6iIQI/getUpdates";
// $ch3 = curl_init();
// curl_setopt($ch3, CURLOPT_URL, $url3);
// curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);
// $contents3 = curl_exec($ch3);
// $result3 = json_decode($contents3);
// curl_close($ch3);

// // echo'<pre>';print_r($result3->result);die();

// foreach ($result3->result as $data) {
//     $chat_id = $data->message->from->id;
//     $username = $data->message->from->username ?? $data->message->from->first_name ?? $data->message->from->id;

//     $res = mysqli_query($conn, "SELECT * FROM `telegram_users` WHERE chat_id='$chat_id'");
//     $roCount = mysqli_num_rows($res);
//     if ($roCount == '0') {
//         mysqli_query($conn, "INSERT INTO `telegram_users`(`username`, `chat_id`, `created_at`, `updated_at`) VALUES ('$username', '$chat_id', '$date', '$date')");
//     }
// }
