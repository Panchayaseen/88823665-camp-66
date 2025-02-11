@extends('layouts.default')

@section('content')
<div class="register-page">
<div class="register-box">
  <div class="card">
    <div class="regi">
    <div class="register-logo">
      <a href="../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.register-logo -->
    <div class="card">
      <div class="card-body register-card-body">
        <p class="register-box-msg">Register a new membership</p>
        <form action="{{ url('/register') }}" onsubmit="return myfunction();" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="text"name="name" class="form-control" placeholder="Full Name" />
            <div class="input-group-text"><span class="bi bi-person"></span></div>
            <div class="valid-feedback">
            OK
          </div>
          <div class="invalid-feedback" id="invalid-name">
            กรุณาระบุข้อมูล name
</div>
</div>

          <div class="input-group mb-3">
            <input type="email"name="email" class="form-control" placeholder="Email" />
            <div class="input-group-text"><span class="bi bi-envelope"></span></div>
          </div>
          <div class="input-group mb-3">
            <input type="password"name="password" class="form-control" placeholder="Password" />
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
          </div>
          <!--begin::Row-->
          <div class="row">
            <div class="col-8">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                <label class="form-check-label" for="flexCheckDefault">
                  I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Sign In</button>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!--end::Row-->
        </form>
        <button class="btn" onclick="myfunction()">Click Me</button>
        <!-- /.social-auth-links -->
        <p class="mb-0">
          <a href="{{ url('/login.html') }}" class="text-center"> I already have a membership </a>
        </p>
      </div>
      <!-- /.register-card-body -->
    </div>
  </div>
</div>
  @endsection
  @section('scripts')
  <script>
      let myval
      var myval2 = "value of myval2"
      const myval3 = ""
    console.log("Hello World!")
    //ALERT("Hello World")
    function myfunction(){
      console.log("in myfunction")
    }

    myfunction(){
    let name = document.getElementById('name')
    name = $('#name')
    let email = document.getElementById('email')
    let pass = document.getElementById('pass')
    let mycheckbox = document.getElementById('mycheckbox')
    // document.getElementsByClass()
    // name.value = "My Name Value"
    // name.val("My Name Value")
    console.log(name.value, email.value, 
                pass.value, mycheckbox.checked)
    if(name.val() == "My Name Value"){
      name.addClass('is-invalid');
      $('#invalid-name').html("<b><u>ใส่ name เป็นค่านี้ไม่ได้</u></b>")
      return false;
    }else{
      name.removeClass('is-invalid');
    }

    return true;
  }
 // myfunction()
    </script>
    <script>

      console.log(myval2)
      </script>
@endsection

