<br>
<form action="modules/signup/send_sign_up.php" style="border:5px solid #ccc; width: 700px; margin: auto; color: white;">
  <div style="padding:16px">
    <h1>Đăng ký</h1>
    <p>Vui lòng điền đầy đủ thông tin vào phiếu</p>
    <hr>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Điền Email" name="email" required style="    width: 100%;
                                                                                  padding: 15px;
                                                                                  margin: 5px 0 22px 0;
                                                                                  display: inline-block;
                                                                                  border: none;
                                                                                  background: #f1f1f1;">

    <label for="username"><b>Tên Đăng Nhập</b></label>
    <input type="text" placeholder="Điền tên đăng nhập" name="username" required style="    width: 100%;
                                                                                  padding: 15px;
                                                                                  margin: 5px 0 22px 0;
                                                                                  display: inline-block;
                                                                                  border: none;
                                                                                  background: #f1f1f1;">

    <label for="psw"><b>Mật khẩu</b></label>
    <input type="password" placeholder="Điền mật khẩu" name="psw" required style="    width: 100%;
                                                                                  padding: 15px;
                                                                                  margin: 5px 0 22px 0;
                                                                                  display: inline-block;
                                                                                  border: none;
                                                                                  background: #f1f1f1;">

    <label for="psw-repeat"><b>Nhắc lại mật khẩu</b></label>
    <input type="password" placeholder="Nhắc lại mật khẩu" name="psw-repeat" required style="    width: 100%;
                                                                                  padding: 15px;
                                                                                  margin: 5px 0 22px 0;
                                                                                  display: inline-block;
                                                                                  border: none;
                                                                                  background: #f1f1f1;">

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Nhớ mật khẩu
    </label>

    <p> Khi đăng ký bạn đã đồng ý với <a href="#" style="color:dodgerblue">Chính sách và điều khoản cá nhân của chúng tôi</a>.</p>

    <div>
      <a href="index.php">
        <button type="button" style="     padding: 14px 20px;
                                          background-color: #f44336;">
        Bỏ qua
        </button>
      </a>

        <button  style="     padding: 14px 20px;
                             background-color: orange;">
        Đăng ký
        </button>
    </div>
  </div>
</form>
<br>