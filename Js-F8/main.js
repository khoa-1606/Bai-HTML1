//alert('Hi Javascript basic!') //hiển thị thông báo khi load trang

// 1. Tạo biến -> tên biến phân biệt in hoa và in thường
var fullName = 'Vo Huynh Khoa';
var age = 25;

//Gọi hàm thông báo
alert(fullName); //thông báo thứ nhất -> bấm OK
alert(age); // thông báo thứ 2

/* 2. Cú pháp cmt
- Ghi chú
- Vô hiệu hóa mã
- Cmt 1 dòng : //
- Cmt nhiều dòng : /*
- Ctrl + /
*/

/**Giới thiệu một số hàm built-in
 * alert : hiển thị thông báo trên màn hình
 * console : 
 * confirm : 
 * prompt : 
 * setTimeout : 
 * setInterval : 
 */

var fullName = 'Vo Huynh Khoa';
console.log('123')
console.log(fullName)
// trên trình duyệt -> F12 -> chọn tab Console(bảng điều khiển -> nội dung của console.log đc hiển thị)
console.warn(fullName)
// đưa ra cảnh báo trong tab console
console.error(fullName)
// đưa ra dấu X lỗi


confirm('Xác nhận bạn đủ tuổi');
// hiển thị hộp thoại xác nhận

prompt ('Xác nhận bạn đủ tuổi');
// hiển thị hộp thoại xác nhận và có vùng nhập trên thông báo

setTimeout(function() {
    alert('Thông báo 1')
}, 1000)
// 1000ms = 1s -> sẽ hiển thị thông báo
//chạy 1 đoạn code sau 1 khỏang thời gian xác dịnh

setInterval(function() {
    console.log('Đây là log' + Math.random())
}, 1000)
// chạy 1 đoạn code sau 1 khoảng thời gian xác định và lặp lại các log khác nhau

// Thuật ngữ Built-in là gì?