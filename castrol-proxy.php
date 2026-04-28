<?php
// Báo cho trình duyệt biết đây là trang HTML
header('Content-Type: text/html; charset=utf-8');

// Đường dẫn trang Castrol bạn muốn lấy
$url = 'https://www.castrol.com/en_us/united-states/home/product-finder.html';

// Lấy toàn bộ nội dung mã nguồn của trang đó
$html = file_get_contents($url);

// (Tùy chọn nâng cao) Sửa các đường dẫn tương đối thành tuyệt đối để không bị lỗi hình ảnh/CSS
$html = str_replace('href="/', 'href="https://www.castrol.com/', $html);
$action = str_replace('src="/', 'src="https://www.castrol.com/', $html);

// In trang web ra
echo $html;
?>
