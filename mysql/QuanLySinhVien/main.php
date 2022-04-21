<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    
      <form action="" method="post">
      <div class="container">
         <div class="input-form">
            <input type="text" required>
            <div class="underline"></div>
            <label>Mã Sinh Viên</label>
         </div>
      </div>

      <div class="container">
         <div class="input-form">
            <input type="text" required>
            <div class="underline"></div>
            <label>Họ Và Tên</label>
         </div>
      </div>

      <!-- <div class="container"> -->
         <div class="input-form">
            <input type="date" required>
            <div class="underline"></div>
            <label>Ngày Sinh</label>
         </div>
      <!-- </div> -->

      <div class="container">
         <div class="input-form">
            <input type="text" required>
            <div class="underline"></div>
            <label>Họ Và Tên</label>
         </div>
      </div>
      </form>
    

    <style>
      * {
        margin: 0;
        padding: 0;
        outline: none;
        box-sizing: border-box;
        font-family: "Roboto", sans-serif;
      }
      body {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: linear-gradient(to right, #ef629f, #eecda3);
      }
      .container {
        width: 450px;
        background: #fff;
        padding: 30px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      }
      .container .input-form {
        height: 40px;
        width: 100%;
        position: relative;
      }
      .container .input-form input {
        height: 100%;
        width: 100%;
        border: none;
        font-size: 17px;
        border-bottom: 2px solid silver;
      }
      .input-form input:focus ~ label,
      .input-form input:valid ~ label {
        transform: translateY(-20px);
        font-size: 15px;
        color: #4158d0;
      }
      .container .input-form label {
        position: absolute;
        bottom: 10px;
        left: 0;
        color: grey;
        pointer-events: none;
        transition: all 0.3s ease;
      }
      .input-form .underline {
        position: absolute;
        height: 2px;
        width: 100%;
        bottom: 0;
      }
      .input-form .underline:before {
        position: absolute;
        content: "";
        height: 100%;
        width: 100%;
        background: #4158d0;
        transform: scaleX(0);
        transform-origin: center;
        transition: transform 0.3s ease;
      }
      .input-form input:focus ~ .underline:before,
      .input-form input:valid ~ .underline:before {
        transform: scaleX(1);
      }
    </style>
  </body>
</html>
