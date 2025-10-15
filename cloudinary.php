<?php
require __DIR__ . '/vendor/autoload.php';
use Cloudinary\Cloudinary;

$cloudinary = new Cloudinary([
  "cloud"=>[
        'cloud_name' =>'dsdsybieg',
        "api_key" => '967984257287141',
        "api-secret"=>'5JM3I'
    ],
    "url"=>['secure' => true],
    ]);
if(isset($_POST['upload'])){
    $file = $_FILES('image');
    print_r($file); 
    try{
        $result = $cloudinary->uploadApi()->upload($file('file'));
    if($result){
        echo 'result'; 
    }
}catch(\Throwable $th){
        echo 'Something went wrong';
    }
}
// $result = $cloudinary->uploadApi()->upload();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cloudinary.php" enctype="multipart/form-data">
        <input type="file" name="image">
        <button>Upload Image</button>
    </form>
</body>
</html>