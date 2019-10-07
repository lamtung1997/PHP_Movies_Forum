<br>
<form action="modules/login/log_in_process.php" style="border: 3px solid #f1f1f1; width: 700px; margin: auto;">
      <div style="padding: 16px;">
        <label for="username" style="color: white"><b>Tên đăng nhập</b></label>
        <input type="text" placeholder="Điền tên của bạn" name="username" required style="     width: 100%;
                                                                                            padding: 12px 20px;
                                                                                            margin: 8px 0;
                                                                                            display: inline-block;
                                                                                            border: 1px solid #ccc;
                                                                                            box-sizing: border-box;">

        <label for="psw" style="color: white"><b>Mật khẩu</b></label>
        <input type="password" placeholder="Mật khẩu" name="psw" required style="     width: 100%;
                                                                                      padding: 12px 20px;
                                                                                      margin: 8px 0;
                                                                                      display: inline-block;
                                                                                      border: 1px solid #ccc;
                                                                                      box-sizing: border-box;">

        <button style="     background-color: #4CAF50;
                                          color: white;
                                          padding: 14px 20px;
                                          margin: 8px 0;
                                          border: none;
                                          cursor: pointer;
                                          width: 100%;">
        Đăng nhập</button>

        <label style="color: white">
          <input type="checkbox" checked="checked" name="remember"> Ghi nhớ mật khẩu
        </label>
      </div>


      <div style="background-color:#f1f1f1;padding: 16px;">
        <a href="index.php">
          <button type="button" style="     width: auto;
                                            padding: 10px 18px;
                                            background-color: #f44336;">
          Bỏ qua</button>
        </a>
        <span style="float: right; padding-top: 10px;">Quên <a href="#">mật khẩu?</a></span>
      </div>
</form>
<br>