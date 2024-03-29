<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user needs-validation" action="<?php echo base_url(). 'register/tambah'?>" method="post" novalidate>
                <div class="form-group">
                    <input type="text" name="nama" class="form-control form-control-user" id="Nama" placeholder="Nama" required>
                    <div class="invalid-feedback ml-2">Nama masih kosong</div>
                </div>
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-user" id="Username" placeholder="Username" required>
                  <div class="invalid-feedback ml-2">username masih kosong</div>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                    <div class="invalid-feedback ml-2">Password masih kosong</div>
                </div>
               <button type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?php echo base_url()?>auth/login">Sudah punya akun? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>