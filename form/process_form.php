<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $mobile = $_POST["input1"];
    $address = $_POST["input2"];
    $community_name = $_POST["input3"];
    $number_of_houses = $_POST["input4"];
    $number_of_children = $_POST["input7"];
    $number_of_elders = $_POST["input8"];
    $desired_scriptures = $_POST["input5"];
    $camp_duration = $_POST["input6"];

    $data = "नाम: $name\n";
    $data .= "मोबाइल नंबर: $mobile\n";
    $data .= "पता: $address\n";
    $data .= "समाज का नाम: $community_name\n";
    $data .= "कितने घर का समाज है: $number_of_houses\n";
    $data .= "बच्चों की संख्या: $number_of_children\n";
    $data .= "बड़ो की संख्या: $number_of_elders\n";
    $data .= "कोनसे ग्रंथ पढने के इच्छुक है: $desired_scriptures\n";
    $data .= "शिविर का अंतराल: $camp_duration\n";

    // Append the form data to a text file (e.g., form_data.txt)
    $file = fopen("form_data.txt", "a");
    fwrite($file, $data);
    fclose($file);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Submission Success</title>
<style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #F5FEFD;#f7f7f7;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.5);
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h1 {
    color: #333;
}

p {
    color: #666;
    margin-top: 20px;
}
.button-center {
         text-align: center;
      align-items: center;
      justify-content: center;
}
           .my-button {
      display: inline-block;
      padding: 15px 50px;
      background-color: rgba(127, 127, 127, 0.2);
      color: #000;
      text-decoration: none;
      font-size: 24px;
      border: 0.2px solid rgba(0, 0, 0, 1);
      border-radius: 0;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }       
    .my-button:hover {
      background-color: #2980b9;
    }  
.social-icons {
    display: flex;
    justify-content: center;
    margin-top: 50px;
    margin-bottom: 50px;
}

.social-icons img {
    width: 50px; /* Set the width of the images */
    height: 50px; /* Set the height of the images */
    margin: 0 20px; /* Add some spacing between the images */
}
</style>
</head>
<body>
<div class="container">
    <h1>Form Submitted Successfully!</h1>
    <p>Thank you for your submission. We will get back to you soon.</p>
</div>
    <h2 style="text-align: center;">हमसे संपर्क करें!</h2>
<div class="social-icons">
<a href="https://www.whatsapp.com"><img src="https://svgshare.com/i/13Gy.svg" alt="whatsapp"></a>
<a href="https://www.whatsapp.com"><img src="https://svgshare.com/i/13JK.svg" alt="Instagram"></a>
<a href="https://www.whatsapp.com"><img src="https://svgshare.com/i/13Gx.svg" alt="Facebook"></a>
<a href="https://www.whatsapp.com"><img src="https://svgshare.com/i/13Gz.svg" alt="Telegram"></a>
</div>
<div class="button-center">
<a href="/" class="my-button">Back</a>
</div>
</body>
</html>

