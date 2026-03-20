<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Faker Demo</title>
</head>

<body>

<h1>🔥 Faker User Demo</h1>

<h2>Person (thông tin người)</h2>
<p>tên: <?php echo $faker->name() ?></p>
<p>tên riêng: <?php echo $faker->firstName() ?></p>
<p>họ: <?php echo $faker->lastName ?></p>
<p>danh xưng (Mr, Mrs…): <?php echo $faker->title() ?></p>
<p>hậu tố tên: <?php echo $faker->suffix() ?></p>

<h2>Contact (liên hệ): </h2>
<p>email: <?php echo $faker->email() ?></p>
<p>số điện thoại: <?php echo $faker->phoneNumber() ?></p>
<p>username: <?php echo $faker->userName() ?></p>

<h2>Address (địa chỉ): </h2>
<p>địa chỉ đầy đủ: <?php echo $faker->address() ?></p>
<p>địa chỉ đường: <?php echo $faker->streetAddress() ?></p>
<p>thành phố: <?php echo $faker->city() ?></p>
<p>mã bưu điện: <?php echo $faker->postcode() ?></p>
<p>quốc gia: <?php echo $faker->country() ?></p>

<h2>Internet</h2>
<p>website: <?php echo $faker->url() ?></p>
<p>tên domain: <?php echo $faker->domainName() ?></p>
<p>địa chỉ IP: <?php echo $faker->ipv4() ?></p>
<p>trình duyệt: <?php echo $faker->userAgent() ?></p>

<h2>Text / Content</h2>
<p>từ: <?php echo $faker->word() ?></p>
<p>câu: <?php echo $faker->sentence() ?></p>
<p>đoạn văn: <?php echo $faker->paragraph() ?></p>
<p>đoạn văn dài: <?php echo $faker->text() ?></p>

<h2>Number / Random</h2>
<p>số ngẫu nhiên: <?php echo $faker->randomNumber() ?></p>
<p>số trong khoảng: <?php echo $faker->numberBetween() ?></p>
<p>số thực: <?php echo $faker->randomFloat() ?></p>
<p>mã ID ngẫu nhiên: <?php echo $faker->uuid() ?></p>

<h2>Date / Time</h2>
<p>ngày: <?php echo $faker->date() ?></p>
<p>giờ: <?php echo $faker->time() ?></p>
<p>năm: <?php echo $faker->year() ?></p>
<p>tháng: <?php echo $faker->month() ?></p>

<h2>Company / Business</h2>
<p>tên công ty: <?php echo $faker->company() ?></p>
<p>chức vụ: <?php echo $faker->jobTitle() ?></p>
<p>email công ty: <?php echo $faker->companyEmail() ?></p>

<h2>Image / Color / File</h2>
<p>link ảnh: <?php echo $faker->imageUrl() ?></p>
<p>loại file: <?php echo $faker->mimeType() ?></p>
<p>đuôi file: <?php echo $faker->fileExtension() ?></p>
<p>tên màu: <?php echo $faker->colorName() ?></p>
<p>mã màu: <?php echo $faker->hexColor() ?></p>

<h2>Location / Map</h2>
<p>vĩ độ: <?php echo $faker->latitude() ?></p>
<p>kinh độ: <?php echo $faker->longitude() ?></p>

</body>
</html>