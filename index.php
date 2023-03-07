<!DOCTYPE html>
<html>

    <!-- Phần đầu -->
    <head>
        <meta charset="utf-8"> <!--hỗ trợ trang web hiển thị Tiếng Việt-->
        <title>F8 - Shop</title>
        <!-- External - Sử dụng file css liên kết đến index - lien ket den file css -->
        <link rel="stylesheet" type="text/css" href="main.css"/>
        <!-- Internal - Bên trong
        <style>
            h1 {
                color: red;
                font-size: 30px;
            }
        </style>  -->
    </head>
        
    <!-- 
        1. h1 -> h6 - heading: tiêu đề. số càng lớn - chữ càng nhỏ
        2. p - paragraph: đoạn văn
        3. img - image: hình ảnh
        4. a - anchor: liên kết
        5. ul, li - unordered list, list item: in danh sách
        6. table: tạo bảng
        7. input
        8. button: nút
        9. div: tạo khối bao quanh phần tử
    -->

    <!-- 
        Attribute: thuộc tính của thẻ html
    -->

    <!-- Phần thân -->
    <body>
    <!-- <html>
        include("before.html");
    </html> -->
        <div>
            <div class="boxx" data-title="Hi, im Khoa"></div>
            <div class="boxx2"></div>
            <table width="100%" height="20%" cellspacing="0" border="1" bgcolor="#FFFFFF" height="500" align="center">
                <tr>
                    <!--<td colspan="3" height="200"><img src="https://scontent.fsgn6-1.fna.fbcdn.net/v/t1.6435-9/58895143_2272642402994116_2000361905507532800_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=e3f864&_nc_ohc=YMRbuSksPpcAX8GJDYC&_nc_ht=scontent.fsgn6-1.fna&oh=00_AfD0dfxDpti70NJBBn7x5Hsi5NHk5b66ROiNWhl3p6gD1g&oe=63C11E59" /></td>-->
                    <!-- 
                    <td align="right" size="5"><img src="110116036/hinhanh/rose.jpg"></td>
                 -->
                </tr>
            </table>
            <hr>
            <table id="DangNhap" border="1" align="center">
            <tr> 
                <td colspan="2"><b><h1 align="center"> ĐĂNG NHẬP </h1></b> </td>
            </tr>
            <tr> 
                <td> Tên dăng nhập: </td> <br>
                <td> <input type="text" name="tendn" size="20"/> </td>
            </tr>
            <br>
            <tr> 
                <td> Mật khẩu: </td> <br>
                <td> <input type="password" name="matkhau" size="20" maxlength="20" /> </td> 
            </tr>
            <tr>  <br>
                <td> <input type="submit" name="sbmDNhap" value="Ðăng nhập"  /> </td>
            </tr>
            </table>
            <hr>
            <h3>autofocus</h3>
            <input name="ip" autofocus />
            <hr>
            <h1><em>CHÀO MỪNG CÁC BẠN ĐÃ THAM GIA CỘNG ĐỒNG F8!</em></h1>
            <h2 title="Tên Tôi"> hi_imkhoa</h2>
            <hr>
            <input type="text">
            <input type="checkbox">
            <input type="radio">
            <input type="time">
            <hr> <!-- tạo đường gạch ngang -->
            <hr>
            <a href="https://mail.google.com/mail/u/0/#inbox"><button>Đăng kí</button></a>
            <a href="https://fullstack.edu.vn/learning/html-css?id=cfc79208-7c8c-4043-b83d-3708350a73b2"><button>Trang chủ F8</button></a>
            <hr>            
            <ul>
                <li>HTML, CSS là gì?</li>
                <li>Cài đặt môi trường</li>
                <li>Các hàm</li>
                
            </ul>
            <hr>
            <a href="https://www.facebook.com/liokhoa1606/">Trang cá nhân</a> <!-- dẫn đến liên kết khác -->
            <br>
            <h1>CSS in HTML</h1>
            <ul>
                <li>Internal</li>
                <li>External</li>
                <li>Inline</li>
            </ul>
            <hr>
            <ol>
                <li>Internal - Bên trong</li>
                <li>External - Sử dụng file css liên kết đến index </li>
                <li>
                    Inline - viết luôn css trog thẻ mở <br>
                </li>
            </ol>

            <h2 id="first-heading">CSS selectors?: h2{}</h2>
            <h2 class="second-heading">CSS selectors?: h2{}</h2>
            <pre> ID & class 
                * ID trong ví dụ: first-heading.
                    Trong file css - ID được kí hiệu đầu là #tênID
                * Class trong ví dụ: second-heading.
                    Trong file css - Class được kí hiệu đầu là .tênClass
            </pre>
            <hr>
            <h3 id="priority">Priority?</h3>
            <ol>
                <li>Internal, External?</li>
                <li>Inline - 1000</li>
                <li>#id - 100</li>
                <li>.class - 10</li>
                <li>tag - 1</li>
                <li>Equal specificity?</li>
                <li>Universal selector and inherited?</li>
            </ol>
            <hr>
            <h3> CSS Variable?</h3>
            <!--
                :root {
                    --text-color: green;
                }

                h3 {
                    color: var(--text-color)
                }
            -->

            <h3> CSS units?</h3>
            <ol>
                <li>Absolute units?</li>
                <ul>
                    <li> px - định nghĩa cho khối or chữ</li>
                    <li> pt </li>
                    <li> cm </li>
                    <li> mm </li>
                    <li> inch </li>
                    <li> pc </li>
                </ul>
                <li>Relative units?</li>
                <ul>
                    <li> % - phụ thuộc vào thẻ chứa nó</li>
                    <li> rem - phụ thuộc vào thẻ html</li>
                    <!-- 
                        <style>
                            html {
                                font-size: 20px;
                            }
                            h1 {
                                font-size: 2rem;
                            }
                        </style>
                        => kết quả: h1 = 40px
                    -->
                    <li> em - phụ thuộc vào phần tử gần nhất</li>
                    <li> vw : viewport width</li>
                    <li> vh : viewport height</li>
                    <li> vmin </li>
                    <li> vmax </li>
                    <li> ex </li>
                    <li> ch </li>
                </ul>
            </ol>
            <hr>
            <h1>MySQL?</h1>
            <pre>
                Câu lệnh SQL sau chọn tất cả các bản ghi trong bảng "customers":
                SELECT * FROM CUSTOMERS;
            </pre>
            <hr>
            <h2><i> Trong SQL từ khóa không phân biệt chữ hoa chữ thường</i></h2>
            <table border="1" id="table1" align="center">
                <tr>
                    <td> SELECT </td>
                    <td>trích xuất dữ liệu từ csdl</td>
                </tr>
                <tr>
                    <td>UPDATE</td>
                    <td>cập nhật dữ liệu trong csdl</td>
                </tr>
                <tr>
                    <td>DELETE</td>
                    <td>xóa dữ liệu khỏi csdl</td>
                </tr>
                <tr>
                    <td>INSERT INTO</td>
                    <td>chèn dữ liệu mới vào csdl</td>
                </tr>
                <tr>
                    <td>CREATE DATABASE</td>
                    <td>tạo csdl mới</td>
                </tr>
                <tr>
                    <td>ALTER DATABASE</td>
                    <td> sửa đổi csdl</td>
                </tr>
                <tr>
                    <td>CREATE TABLE</td>
                    <td> tạo bảng</td>
                </tr>
                <tr>
                    <td>ALTER TABLE</td>
                    <td>sửa đổi bảng</td>
                </tr>
                <tr>
                    <td>DROP TABLE</td>
                    <td>xóa một bảng</td>
                </tr>
                <tr>
                    <td>CREATE INDEX</td>
                    <td>tạo một chỉ mục (khóa tìm kiếm)</td>
                </tr>
                <tr>
                    <td>DROP INDEX</td>
                    <td>xóa một chỉ mục</td>
                </tr>
            </table>
            <hr>            
            <h3> CSS functions - hàm </h3>
            <table border="1" align="center">
                <tr>
                    <td>var()</td>
                </tr>
                <tr>
                    <td>linear-gradient()</td>
                </tr>
                <tr>
                    <td>rgba()</td>
                </tr>
                <tr>
                    <td>rgb()</td>
                    <td>E.x:rgb(171, 240, 241)</td>
                </tr>
                <tr>
                    <td>calc()</td>
                    <td>E.x:calc(120% + 12%)</td>
                </tr>
                <tr>
                    <td>attr()</td>
                    <td>- sử dụng chung với thuộc tính html <br>
                    E.x trên thẻ <a href="https://fullstack.edu.vn">Học lập trình</a><br>
                    <pre>
                    a::after{
                    content: "("attr(href)")";
                    }
                    </pre>
                    </td>
                </tr>
            </table>
            <hr>            
            <h3>CSS pseudo-classes - lớp giả</h3>
            <ul>
                <li>:root</li>
                <li>:hover - kích hoạt khi di chuột vào đối tượng đc chỉ định</li>
                <li>:active - kích hoạt khi bấm và giữu chuột vào đối tượng đc chỉ định</li>
                <li>:first-child - chọn con đầu tiên<br>
                    <pre>
                    li:first-child {
                        color: red;
                        font-size: 40px;
                    }</pre>
                </li>
                <li>:last-child - chọn con cuối cùng <br>
                    <pre>
                    li:last-child {
                        color: red;
                        font-size: 40px;
                    }</pre>
                </li>
            </ul>

            <hr>            
            <h3>Pseudo elements trong CSS - phần tử giả</h3>
            <ul>
                <li>::before</li>
                <li>::after</li>
                <li>::first-letter - phóng to kí tự đầu tiên E.x: kí tự đầu tiên của h1</li>
                <li>::first-line - chịu ảnh hưởng với đầu tiên E.x: dòng đầu tiên của h5</li>
                    <h5> Dòng 1 <br> Dòng 2</h5>
                <li>::selection - bôi đen kí tự sẽ hiển thị màu đc chỉ định</li>
                    <h4>Võ Huỳnh Yến Khoa</h4>
            </ul>
            <hr>
            <h3> Thuộc tính padding (đệm) - css:91-108</h3>
                <div class="box box1">Box 1</div>
                <div class="box box2">Box 2</div>
                <div class="box box3">Box 3</div>
            <p><b>Tăng kích thước của giá trị div được gán: padding-top: 10px;</b><br>
                float:left; -> 3 box nằm ngang hàng</p>
            <img src="Untitled.png"> <br>
            <img src="Untitled1.png">
            <hr>
            <h3> Thuộc tính border (đường viền) - css:104-106</h3>
            <img src="Untitled2.png"> <br>
            <img src="Untitled3.png">

            <h3> Edit file connect mysqli</h3>
            <p> Connect on mysql</p> <img src="KNmysql.png"> <br>
            <p> Connect on mysqli</p> <img src="KNmysqli.png">
            <hr>
            <h3> Thuộc tính margin (khoảng cách lề) - margin-top:20px;</h3>
            <p> Tăng khoảng cách từ lề vào so với box </p>
            <hr>
            <hr>
            <h3> Thuộc tính box-sizing - khoảng cách lề</h3>
            <h3> accesskey - Chỉ ra một phím tắt kích hoạt phần tử</h3>
            <a href="https://xuanthulab.net" accesskey="x">HTML</a>

            <h3>data-*</h3>
            <p>Thuộc tính thiết lập dữ liệu riêng cho phần tử, ký hiệu * là một tên tự đặt. data-* là chuẩn đặt tên thuộc tính dữ liệu dùng cho HTML5, Ví dụ phần tử đó có lưu một dữ liệu tên là abc, thì thuộc tính sẽ là data-abc. Sau này tại phần Javascript có thể đọc dữ liệu này theo tên abc, thông qua dataset của phần tử.</p>
            <p contenteditable="true">Nội dung này soạn thảo được</p>

            <h3>draggable</h3>
            <p>Thuộc tính draggable: Cho biết phần tử có thể kéo thả không (true, false, auto). Thuộc tính này liên quan đến sử dụng Javascript truy cập API kéo/thả</p>
            <p draggable="true">Ví dụ</p>
            <hr>
            <h3>hidden</h3>
            <p hidden> Diệu </p>
            <hr>
            <h3>spellcheck</h3>
            <p spellcheck="true"> Có kiểm tra ngữ pháp </p>
            <hr>
            <h3>title</h3>
            <p title="Thông tin thêm">Đây là đoạn văn</p>
            <hr>
            
            <a href="https://xuanthulab.net" target="_blank" >Học HTML XuanThulab</a>

            <table border="1">
                <caption style="caption-side: top">ĐƠN HÀNG</caption>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mặt hàng</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Ghi chú</th>
                    </tr>
                </thead>
                <tr>
                    <td>1</td>
                    <td>Mặt hàng A</td>
                    <td>1000</td>
                    <td>1</td>
                    <td>1000</td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mặt hàng B</td>
                    <td>2000</td>
                    <td>2</td>
                    <td>4000</td>
                    <td></td>
                </tr>
                <tfoot>
                    <tr>
                        <th colspan="4">Thành tiền đơn hàng</th>
                        <th colspan="2">4000</th>

                    </tr>
                </tfoot>
            </table>

            <h3>Thẻ div</h3>
            <p>Thẻ div(viết tắt của division - chia) là phần tử cấp độ block dùng để phân nội dung thành các phân đoạn, chứa các phần tử HTML khác. Thẻ div thường dùng CSS để thiết lập các đặc tính của nó (thông qua thiết lập class và id).</p>
            <style>
                .divparent {background: #0b5088; padding: 5px;}
                .div1 {height: 70px; background: green;}
                .div2 {height: 70px; background: yellowgreen; margin-top: 5px}
            </style>

            <div class="divparent">
                <div class="div1">
                    <p>Nội dung trong thẻ div 1</p>
                </div>
                <div class="div2">
                    <p>Nội dung trong thẻ div 2</p>
                </div>
            </div>

            <h3>Thẻ span</h3>
            <p>Thẻ span thì lại là loại thẻ cấp độ inline với mục đích dùng tổng quát, thường nó được dùng để chứa dữ liệu (văn bản), chứa phần tử inline khác. Tương tự div, span cũng thường dùng CSS để định dạng trình bày:</p>
            <h4>Học <span style="color:red">HTML</span> cơ bản</h4>
            <hr>
            <p>placeholder</p>
            <input type="text" placeholder="Gõ vào đây" />
            <hr>
            <p>disabled</p>
            <input disabled type="text" placeholder="Gõ vào đây" />
            <input disabled type="submit">
            <hr>
            <p>TextBox: Hộp nhập liệu một dòng</p>
            <form action="#" method="post">
                <label for="firstname">Họ:</label>
                <input type="text" name="firstname" id="firstname">
                <label for="lastname">Tên:</label>
                <input type="text" placeholder="Tên bạn?" name="lastname" id="lastname">
                <input type="submit" value="Gửi">
            </form>
            <hr>
            <p>Hộp nhập password</p>
            <form action="#" method="post">
                <label for="username">Tên:</label>
                <input type="text" name="username" id="username">
                <label for="psw">Mật khẩu:</label>
                <input type="password" name="psw" id="psw">
                <input type="submit" value="Gửi">
            </form> 
            <hr>
            <form action="#" method="post">
            <p><strong>Chọn giới tính</strong></p>
            <input type="radio" name="gioitinh" value="1"> Nam<br>
            <input type="radio" name="gioitinh" value="0" checked> Nữ<br>
            <input type="radio" name="gioitinh" value="2"> Khác

            <p><strong>Chọn nơi sinh</strong></p>
            <input type="radio" name="noisinh" value="HN"> Hà Nội<br>
            <input type="radio" name="noisinh" value="ND"> Nam Định<br>
            <input type="radio" name="noisinh" value="Khac"> Khác <br>
            <button type="submit">Gửi</button>
            </form>

            <hr>
            <form action="#" method="post">
            <input type="checkbox" name="love1" id="love1" value="LovePHP">
            <label for="love1">Tôi thích PHP</label><br>
            <input type="checkbox" name="love1" id="love2" value="LoveHTML">
            <label for="love2">Tôi thích HTML</label><br>
            <input type="checkbox" name="love1" id="love3" value="LoveCSS">
            <label for="love3">Tôi thích CSS</label><br>
            <button type="submit">Gửi</button>
            </form>

            <hr>
            <form class="p-1" action="#" method="post">
            <label for="color">Chọn màu yêu thích</label>
            <input type="color" name="color" id="color" value="#d400ff"><br>
            <button type="submit">Gửi</button>
            </form>

            <hr>
            <form class="p-1" action="#" method="post">
            <label for="ngaysinh">Ngày sinh</label>
            <input type="date" name="ngaysinh" id="ngaysinh" value="2000-11-20">
            <button type="submit">Gửi</button>
            </form>

            <hr>
            <form class="p-1" action="#" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Nhập email">
            <button type="submit">Gửi</button>
            </form>

            <hr>
            <form class="p-1" action="#" method="post">
            <input type="search" name="search" id="search">
            <button type="submit">Tìm kiếm</button>
            </form>

            <hr>
            <form class="p-1" action="#" method="post">
            <label for="tel">Số điện thoại</label>
            <input type="tel" name="tel" id="tel">
            <button type="submit">Gửi</button>
            </form>

            <hr>
            <form class="p-1" action="#" method="post">
            <label for="number">Nhập giá trị</label>
            <input type="number" name="number" id="number" max="100" value="10" min="10" step="2">
            <button type="submit">Gửi</button>
            </form>

            <hr>
            <form class="p-1" action="#" method="post">
            <label for="number">Lựa chọn khoảng</label>
            <input type="range" name="number" id="number" max="100" value="50" min="1" step="1">
            <button type="submit">Gửi</button>
            </form>

            <hr>
            <form  action="#" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="submit">Gửi</button>
            </form>

            <hr>
            <h3>Thẻ textarea</h3>
            <p>Thẻ textarea dùng để tạo ra phần tử HTML cho phép nhập nhiều dòng chữ (nhấn Enter xuống dòng). Sử dụng thẻ này, khi cần nhập dữ liệu dài như nhận các phản hồi, viết nội dung ...
            Thẻ textarea khác với input nó không có thuộc tính giá trị value, toàn bộ nội dung giữa đóng và mở thẻ textarea là dữ liệu của phần tử.
            Kể cả mã HTML trong thẻ textarea đều được coi là dữ liệu text của nó. Ví dụ trên, viết thẻ p trong nội dung
            </p> <br>
            <p>Thuộc tính:
            cols : Thuộc tính thiết lập độ rộng của control, theo độ rộng ký tự trung bình. Mặc định cols="20" 
            rows : Thuộc tính thiết lập số dòng của textarea Mặc định rows="2"</p><br>
            
            <form action="#" method="post">
            <label for="content">Nhập nội dung cần tư vấn:</label><br>
            <textarea id="content" name="content" rows="5" cols="20">
                TextArea là phần tử ...
                <p>Đây là thẻ P</p>
            </textarea><br>
            <input type="submit" value="Gửi">
            </form>

            <p>Thẻ select trong HTML</p>
            <form action="https://httpbin.org/anything" method="post">
            <label for="lang-select">Bạn yêu thích ngôn ngữ lập trình nào:</label>
            <select name="lang" id="lang-select">
                <option value="">--Hãy chọn một ngôn ngữ lập trình--</option>
                <option value="csharp">C#</option>
                <option value="cpp">C++</option>
                <option value="php">PHP</option>
                <option value="ruby">Ruby</option>
                <option value="js">Javascript</option>
                <option value="dart">Dart</option>
            </select>
            <button type="submit">Gửi</button>
            </form>
            
            <p>Giá trị trong option nếu mục đó được chọn thì là giá trị của phần tử select, trong danh sách các option mặc định sẽ chọn option đầu tiên. Hoặc nếu phần tử option có thuộc tính selected thì khởi đầu sẽ chọn option đó. Ví dụ sau, Dart ban đầu được chọn</p>
            <label for="lang-select">Bạn yêu thích ngôn ngữ lập trình nào nhất:</label>
            <select name="lang" id="lang-select">
                <option value="">--Hãy chọn một ngôn ngữ lập trình--</option>
                <option value="csharp">C#</option>
                <option value="cpp">C++</option>
                <option value="php">PHP</option>
                <option value="ruby">Ruby</option>
                <option value="js">Javascript</option>
                <option value="dart" selected>Dart</option>
            </select>

            <p>Thẻ optgroup trong HTML</p>
            <optgroup label="Tên nhóm">
                các <option> ...
            </optgroup>
            <p>Nếu optgroup có thuộc tính disabled thì nhóm đó không chọn được.</p>
            <label for="tinh-thanh">Chọn tỉnh thành:</label>
            <select id="tinh-thanh">
                <optgroup label="MIỀN BẮC">
                    <option value="hn">Hà Nội</option>
                    <option value="nd">Nam Định</option>
                </optgroup>
                <optgroup label="MIỀN NAM">
                    <option value="hcm">TP. Hồ Chí Minh</option>
                    <option value="bd">Bình Dương</option>
                    <option>Apatosaurus</option>
                </optgroup>    
                <optgroup label="MIỀN TRUNG" disabled>
                    <option>Thanh Hóa</option>
                    <option>Nghệ An</option>
                </optgroup>
            </select>

            <p>Chọn được nhiều mục trong select với thuộc tính multiple</p>
            <br>
            <p>Khi select bạn cho thêm thuộc tính multiple, lúc này bạn có thể chọn nhiều mục. Các trình duyệt trên Destop hầu hết hiện thị khi có tùy chọn này là một listbox, số mục hiện thị trong hộp listbox thiết lập thông qua thuộc tính size. Thao tác chọn / bỏ chọn bạn bấm chuột kết hợp với các phím CTRL, SHIFT. Khi form submit, nếu chọn nhiều thì tên select chứa mảng các giá trị chọn.</p>
            <form action="#" method="post">
            <label for="lang-select">Bạn yêu thích ngôn ngữ lập trình nào:</label>
            <select name="lang" id="lang-select" multiple size="6">
                <option value="">--Hãy chọn một ngôn ngữ lập trình--</option>
                <option value="csharp">C#</option>
                <option value="cpp">C++</option>
                <option value="php">PHP</option>
                <option value="ruby">Ruby</option>
                <option value="js">Javascript</option>
                <option value="dart">Dart</option>
            </select>
            <button type="submit">Gửi</button>
            </form>

            <nav>
            <ul>
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Dịch vụ</a></li>
                <li><a href="#">Giới thiệu</a></li>
            </ul>
            </nav>

            <article> 
                <h1>Tiêu đề bài viết</h1> 
                <p>Thẻ article trong HTML5 được dùng thay thế cho thẻ div của HTML4</p>
            </article>

            <article>
            <h1>Chào mừng</h1>
            <section>
                <h1>Tiêu đề</h1>
                <p>Thẻ section dùng để phân chia một cách logic một trang, một article. Vậy Thẻ section dùng để chia nội dung trong một article. Ví dụ như trang chủ có thể có một section chứa thông tin giới thiệu về công ty, section khác chứa mục tin tức, section khác chứa thông tin liên hệ ...
                    Mỗi section là một khối xác định, thường nó có chứa các tiêu đề (h1 - h6) để phân chia section</p>
            </section>
            </article>
            
            <article>
            <h1> Quà tặng cho mọi người </h1>
            <p> Trang web giúp bạn chọn và mua quà tặng </p>
            <aside>
                <p> Thẻ aside được hiểu như nội dung thứ cấp của phần nội dung chính của trang. aside thường dùng để biểu diễn sidebar. Khi một aside sử dụng trong article thì nội dung trong aside liên quan đến aside </p>
            </aside>
            </article>

            <audio src="audio.mp3" controls>
                Trình duyệt không hỗ trợ phát âm thanh
            </audio>
            <br>
            <video controls autoplay loop>
                <source src="Rose_Lisa.mp4" type="video/mp4">
                <source src="video.ogg" type="video/ogg">
                Trình duyệt của bạn không hỗ trợ video
            </video>
            <br>
            <p>Progress bar trong HTML5:</p>
            <progress min="0" max="100" value="12.3"></progress>
            <br>
            <p>Hàm callback nhận tọa độ định vị</p>
            <div id="toado"></div>
            <script>
                function showcoor(pos) {
                    var coord = pos.coords;
                    var long = coord.longitude;
                    var lat  = coord.latitude;
                    var boxhtml = document.getElementById("toado");
                    boxhtml.innerHTML = "Kinh độ: " + long + "<br>" + "Vĩ độ: " + lat;
                }
                //TEST
                navigator.geolocation.getCurrentPosition(showcoor);
            </script>

            <br>
            <h4>Hàm callback gọi khi có lỗi</h4>
            <pre>Tham số error ở hàm getCurrentPosition là một hàm callback, hàm này được gọi và nhận tham số là đối tượng PositionError nếu gọi hàm getCurrentPosition thất bại.
                Lấy mã lỗi bằng công thức: errcode = PositionError.code với các giá trị có ý nghĩa như sau:
                1 - người dùng không cho phép lấy vị trí
                2 - xác định vị trí có lỗi nào đó xảy ra
                3 - tạo độ quá thời gian không trả về
                Các thông báo lỗi được lấy qua công thức: message = PositionError.message</pre>
            <p>Ví dụ xây dựng hàm callback có tên errorgeo và hiện thị mã lỗi, thông báo lỗi ở phần tử HTML có id="toado"</p>
            <div id="toado"></div>
            <script>
                function errorgeo(err) {
                    var errcode = err.code;
                    var message = err.message;
                    var boxhtml = document.getElementById("toado");
                    boxhtml.innerHTML = "Mã lỗi: " + errcode + "<br>" + "Nội dung lỗi: " + message;
                }
                function showcoor(pos) {
                    var coord = pos.coords;
                    var long = coord.longitude;
                    var lat  = coord.latitude;
                    var boxhtml = document.getElementById("toado");
                    boxhtml.innerHTML = "Kinh độ: " + long + "<br>" + "Vĩ độ: " + lat;
                }
                //TEST
                navigator.geolocation.getCurrentPosition(showcoor, errorgeo);
            </script>

            <h3>Lấy ảnh bản đồ từ maps.googleapis.com</h3>
            <pre>Với kinh độ và vĩ độ lấy được từ hàm getCurrentPosition nghĩa là đã biết được vị trí cần định vị, từ thông tin này từ mục đích ứng dụng mà bạn sử dụng khác nhau. Ví dụ sử dụng dịch vụ maps.googleapis.com để lấy ảnh bản đồ vị trí.
Ví dụ đã có kinh độ lat và vĩ độ long bạn có thể lấy địa ảnh bằng cách URL:
https://maps.googleapis.com/maps/api/staticmap?center=lat,long&zoom=12&size=400x400
Ví dụ sau sửa đổi hàm showcoor ở trên để hiện thị ảnh bản đồ vị trí lấy được:</pre>
            <div id="toado"></div>
            <script>
                function errorgeo(err) {
                    var errcode = err.code;
                    var message = err.message;
                    var boxhtml = document.getElementById("toado");
                    boxhtml.innerHTML = "Mã lỗi: " + errcode + "<br>" + "Nội dung lỗi: " + message;
                }
                function showcoor(pos) {
                    var coord = pos.coords;
                    var long = coord.longitude;
                    var lat  = coord.latitude;
                    var boxhtml = document.getElementById("toado");
                    var urlmap = "https://maps.googleapis.com/maps/api/staticmap?center="+lat+","+long+"&zoom=12&size=400x400&markers=color:red%7Clabel:C%7C"+lat+","+long;
                    boxhtml.innerHTML = urlmap+'<img src="'+urlmap+'"/>';
                }
                //TEST
                navigator.geolocation.getCurrentPosition(showcoor, errorgeo);
            </script>
            <hr>
            <p draggable="true">Kéo và thả trong HTML5</p> <br>
            <img src="Kh.jpg" draggable="true" width="100%" height="50%">

            <h3>Kết hợp toàn bộ mã kéo thả</h3>
            <p> Có thể kéo thả logo vào box </p>
            <script>
            //Xây dựng hàm có tên allowDrop dùng để thiết lập cho phép phần tử chấp nhận phần tử khác thả vào:
                function allowDrop(ev) {
                    ev.preventDefault();
                }

                function drag(ev) {
                    ev.dataTransfer.setData("text", ev.target.id);
                }
                function drop(ev) {
                //Gọi hàm này để ngăn cản browser xử lý mặc định sự kiện drop (ví dụ mở link)
                    ev.preventDefault();
                //Lấy dữ liệu text thả vào - chính là ID phần tử kéo đã lưu ở trên
                    var data = ev.dataTransfer.getData("text");
                //Di chuyển phần tử kéo vào phần tử thả
                    ev.target.appendChild(document.getElementById(data));
                }
            </script>
<!--Sau khi có hàm allowDrop như trên thì phần tử nào muốn thiết lập cho phép thả vào thì thêm thuộc tính là ondragover="allowDrop(event)". 
Sau khi có hàm drop thiết lập phần tử với thuộc tính ondrop dạng như sau: ondrop="drop(event)"
Ví dụ, box sau cho phép thả vào: -->
            <div id="box4"
                ondrop="drop(event)"
                ondragover="allowDrop(event)"
                style="border:1px solid black; width:900px; height:300px">
            </div>
            <hr/>
            <div draggable="true" ondragstart="drag(event)" id="divdrag">
                <img  src="https://www.google.com.vn/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png" draggable="false"/>
                <p align="center">Logo Google</p>
            </div>

            <hr>
            <h3>Chèn ảnh SVG vào trang</h3>
            <p>Ảnh SVG có thể được lưu thành file riêng biệt với trang hoặc vẽ trực tiếp trên trang. Nếu lưu ra file riêng biệt ví dụ image.svg thì ảnh được chèn vào trang bằng cách sử dụng thẻ img</p>
            <p>Ví dụ tạo nội dung svg như sau và ghi lại thành file image.svg</p>
            
            <svg width="200" height="250" version="1.1" xmlns="http://www.w3.org/2000/svg">

            <rect x="10" y="10" width="30" height="30" stroke="black" fill="transparent" stroke-width="5"/>
            <rect x="60" y="10" rx="10" ry="10" width="30" height="30" stroke="black" fill="transparent" stroke-width="5"/>

            <circle cx="25" cy="75" r="20" stroke="red" fill="transparent" stroke-width="5"/>
            <ellipse cx="75" cy="75" rx="20" ry="5" stroke="red" fill="transparent" stroke-width="5"/>

            <line x1="10" x2="50" y1="110" y2="150" stroke="orange" stroke-width="5"/>
            <polyline points="60 110 65 120 70 115 75 130 80 125 85 140 90 135 95 150 100 145"
                stroke="orange" fill="transparent" stroke-width="5"/>

            <polygon points="50 160 55 180 70 180 60 190 65 205 50 195 35 205 40 190 30 180 45 180"
                stroke="green" fill="transparent" stroke-width="5"/>

            <path d="M20,230 Q40,205 50,230 T90,230" fill="none" stroke="blue" stroke-width="5"/>
            </svg>
            <img src="image.svg" alt="" height="300" />
        
            <br>
            <!--<h3>Tạo ảnh SVG</h3>
            <svg width="1000" height="1000">
                ....các thẻ vẽ, thiết lập ở đây
            </svg> -->
            <h3>Vẽ các hình trong SVG</h3>
            <p>Vẽ hình tròn: - sử dụng thẻ hình tròn circle</p>
            <svg width="180" height="180">
                <circle cx="80" cy="80" r="50" fill="green" stroke="yellow"/>
            </svg>
            <pre>Các thuộc tính trong circle là:
            - cx : vị trí tâm, tính từ mép trái của SVG
            - cy : vị trí tâm, tính từ mép trên
            - r : bán kính
            - fill : xác định màu tô
            - stroke : thêm đường biên</pre> <br>

            <p>Vẽ hình ellipse SVG: Dùng ellipse để vẽ ellipse</p>
            <svg height="100" width="200">
                <ellipse cx="100" cy="50" rx="100" ry="50" style="fill:red" />
            </svg>
            <br>
            <p>Vẽ hình vuông/chữ nhật: - Dùng rect để vẽ hình vuông/chữ nhật:</p>
            <svg width="340" height="120">
                <rect width="300" height="100"  x="20" y="20" fill="yellow" />
            </svg>
            <br>
            <p>Vẽ đoạn thẳng SVG: Dùng line để vẽ các đoạn thẳng</p>
            <svg width="220" height="60">
                <line x1="30" y1="10" x2="200" y2="50"
                    style="stroke: blue; stroke-linecap:round; stroke-width:20;"  />
            </svg>
            <br>
            <p>Vẽ các đường gấp khúc svg: Dùng polyline để vẽ đường gấp khúc, trong đó thuộc tính points theo tứ tự chỉ ra các tọa độ x,y của các điểm cần nối lại với nhau:</p>
            <svg width="130" height="160">
                <polyline
                    points="0,40 40,40 40,80 80,80 80,120 120,120 120,160"
                    fill="#F9F38C" stroke="black" stroke-width="6" />
            </svg>
            <br>
            <p>Vẽ hình đa giác trong svg: Dùng polygon đa giác, trong đó points xác định tọa độ x,y của các đỉnh đa giác</p>
            <svg width="320" height="220">
                <polygon points="100 100, 200 200, 300 10"
                    style="fill: grey; stroke:red;" stroke-width="5" />
            </svg>
            <br>
            <p>Vẽ theo đường dẫn path - svg</p>
            <pre>
            Sử dụng path để vẽ các hình phức tạp, đường dẫn để vẽ được định nghĩa trong thuộc tính d="cách - lệnh vẽ"
            Các lệnh sử dụng trong thuộc tính d là:
            M : di chuyển điểm vẽ đến tọa độ x, y (M x y)
            L : vẽ từ điểm hiện tại đến điểm x, y (L x y)
            H : vẽ đường ngang từ điểm hiện tại đến điểm có tọa độ x (H x)
            V : vẽ đường thẳng đứng đến điểm có tọa độ y (V y)
            C : vẽ đường cong cubic-bezier từ điểm hiện tại x0, y0 đến điểm x, y. điểm đầu đường cong tiếp tuyến với đường thẳng x0,y0, x1, y1 điểm thứ 2 của đường cong tiếp tuyến với tường x,y, x2, y2 C x1 y1, x2 y2, x, y
            S : vẽ đường cong trơn từ điểm hiện tại x0, y0 đến điểm x, y trong đó điểm đầu tiếp tuyến với đường x0,y0, x2, y2 S x2 y2, x y
            Q : vẽ đường cong cubic-bezier từ điểm hiện tại x0, y0 đến điểm x, y. điểm đầu đường cong tiếp tuyến với đường thẳng x0,y0, x1, y1 điểm thứ 2 của đường cong tiếp tuyến với tường x,y, x1, y1 C x1 y1, x y
            T : vẽ đường cong cubic-bezier, từ điểm hiện tại đến điểm x,y (T x y)
            A : vẽ cung tròn
            Z : đóng đường vẽ</pre>
            <svg width="100" height="100">
                <path d="M 0 0 C 100 0, 0 100, 100 100"
                    style="stroke:black; fill:green" />
            </svg>
            <br>
            <p>Ảnh động SVG: Sử dụng animate để tạo ảnh động</p>
            <svg width="500" height="30">
                <rect width="20" height="20" fill="black">
                    <animate attributeName="x" from="0" to="300"
                        dur="10s" fill="freeze" repeatCount="indefinite"/>
                </rect>
                <circle cx="0" cy="15" r="5" fill="green" stroke="red">
                    <animate attributeName="cx" from="0" to="300"
                        dur="5s" fill="freeze" repeatCount="indefinite"/>
                </circle>
            </svg>
            <br>
            <pre> Trong animate có các thuộc tính:
            - attributeName : chỉ ra thuộc tính sẽ bị tác động để tạo ảnh động.
            - from : giá trị thuộc tính nhận được ban đầu
            - to : giá trị thuộc tính nhận được ở điểm cuối của hoạt động
            - dur : thời gian ảnh động diễn ra
            - fill : cách thiết lập khởi tạo tạo khi bắt đầu động remove khởi tạo giá trị, freeze giữ giá trị ban đầu.
            - repeatCount : chỉ ra số lần lặp lại (indefinite lặp lại vô tận)</pre> <br>

            <p>Chèn chữ vào SVG:</p>
            <svg width="500" height="100" style="background: #ffc107">
                <text x="50" y="30" font-weight="bold">Hello World! 
                    <tspan font-weight="bold" fill="red">This is bold and red</tspan>
                </text>
            </svg><br>
            <p> Để thêm chữ vào SVG bắt đầu tại tọa độ (x,y) thì sử dụng text. <br>
            - tspan : định dạng thêm chữ trong text. <br>
            - textPath : chèn text theo một đường cho trước.</p>
            <h3>Canvas trong HTML5</h3>
            <canvas id="canvas1" width="200" height="100"></canvas>
            <p>Ví dụ sau tạo ra một canvas và sử dụng JavaScript để lấy context</p>
            <canvas id="canvas1" width="400" height="300"></canvas> 
            <script>
            var can = document.getElementById("canvas1");
            //Lấy context của canvas1
            var ctx = can.getContext("2d");
            </script>
            <p>Tọa độ trong canvas</p>
            <pre>Canvas sử dụng lưới tọa độ 2 chiều, với góc trái phía trên là tọa độ gốc (0,0)
            X : tọa độ theo phương ngang, tăng từ trái sang phải
            Y : tọa độ theo phương đứng, tăng từ trên xuống dưới</pre> <br>
            <p>Một số lệnh vẽ canvas</p>
            <p>- fillRect - Tô vẽ hình chữ nhật</p>
            <canvas id="canvasexample" width="300" height="200" 
                style="background: whitesmoke;">    
            </canvas>
            <script>
                var c=document.getElementById("canvasexample"); 
                //Lấy context
                var ctx=c.getContext("2d");
                ctx.fillRect(20,20,100,100);
            </script>
            <p>Ví dụ đổi màu tô với fillStyle</p>
            <canvas id="canvasexample1" width="300" height="200"
                    style="background: whitesmoke;">
            </canvas>
            <script>
                var c=document.getElementById("canvasexample1");
                var ctx=c.getContext("2d");
                ctx.fillStyle ="#4CAF50";
                ctx.fillRect(20,20,100,100);
            </script>
            <hr>
            <h3>Vẽ đường thẳng với lệnh moveTo và lineTo</h3>
            <pre>
            - moveTo(x1,y1) : Di chuyển tới điểm (x1,y1)
            - lineTo(x2,y2) : Kẻ đường tới điểm (x2,y2)
Thường để vẽ các đường đầu tiên gọi beginPath() để khởi tạo một path mới (nó chứa tập hợp các lệnh đường cần vẽ). Cuối cùng để thực hiện vẽ tập đó gọi hàm stroke</pre>
                <canvas id="linecanvas" width="500" height="200"></canvas>
                <script>
                    var canvas = document.getElementById('linecanvas');
                    var ctx = canvas.getContext('2d');

                    // Đường thứ nhất
                    ctx.beginPath();
                    ctx.strokeStyle = 'blue';
                    ctx.moveTo(20,20);
                    ctx.lineTo(200,20);
                    ctx.stroke();

                    // Đường thứ 2
                    ctx.beginPath();
                    ctx.strokeStyle = 'green';//Đặt màu đường
                    ctx.lineWidth = 5; //Độ rộng

                    ctx.moveTo(20,20);
                    ctx.lineTo(120, 120);
                    ctx.stroke();
                </script>
            <hr>
            <h3>Vẽ cung tròn - hình tròn với arc</h3>
            <pre>Lệnh vẽ cung tròn, hình tròn: arc(x,y,r,start,stop)
                - x, y : tọa độ tâm
                - r bán kính
                - start góc bắt đầu vẽ
                - stop góc kết thúc vẽ</pre>
                <canvas id="arcexmaple" 
                    width="600" height="110" 
                    style="background: whitesmoke;">  
                </canvas>
                <script>
                    var canvas = document.getElementById('arcexmaple');
                    var ctx = canvas.getContext('2d');

                    ctx.beginPath();
                    ctx.arc(100, 55, 50, 0, 2*Math.PI);
                    ctx.stroke();

                    ctx.beginPath();
                    ctx.arc(210, 55, 50, 0, Math.PI);
                    ctx.strokeStyle = 'green';
                    ctx.lineWidth = 5; //Độ rộng
                    ctx.stroke();

                    ctx.beginPath();
                    ctx.arc(320, 55, 50, Math.PI, 0);
                    ctx.strokeStyle = 'red';
                    ctx.lineWidth = 5; //Độ rộng
                    ctx.stroke();
                </script>
            <p> Địa chỉ IP: http://localhost:3000/ </p>









































            <hr>
            <br>
            <p><strong>Tôi đã thấy lúc em cười, cũng đã thấy lúc em khóc. Tôi thấy lúc em nghiêm túc, cũng thấy lúc em trẻ con, nhưng chưa bao giờ thấy em yêu tôi</strong></p>
            
            <img src="https://scontent.fsgn6-2.fna.fbcdn.net/v/t39.30808-6/316957045_550106883793376_687189166572790741_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_ohc=nAQpD-ZYUq0AX_HdQCK&_nc_ht=scontent.fsgn6-2.fna&oh=00_AfDVGfIHuv_YMxoixI5MGW2aH9tCbMZ825NO580nC9FhjQ&oe=63945401" alt="hinhcuatui"> <!--alt="" hiển thị nội dung ảnh nếu ảnh bị lỗi -->
            
            <br> <!-- xuống dòng-->
            <hr>
            <table width="50%" border="2"> <!-- khai bao do rong và do dam cua bang -->
                <thead>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Địa chỉ</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Khoa</td>
                        <td>Trà Vinh</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>02.07.2017</td>
                        <td>TràVinh</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>...</td>
                        <td>...</td>
                    </tr>
                </tbody>
            </table>

            
            
        </div>

    <!-- <html>
        include("after.html");
    </html> -->
    
    </body>
    <hr>
    <td colspan="2"><h6 align="center"> Số điện thoại: 0329818333 </h6></td>
</html>


