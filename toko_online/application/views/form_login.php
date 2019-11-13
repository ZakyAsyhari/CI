
<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <?php echo $this->session->flashdata('pesan'); ?>
                  <form method="post" action="<?php echo base_url('auth/login') ?>" class="user needs-validation" novalidate>
                    <div class="form-group has-feedback">
                      <input type="text" name="username" class="form-control form-control-user" aria-describedby="Username" placeholder="username" required>
                      <div class="invalid-feedback ml-2">username masih kosong</div>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                      <div class="invalid-feedback ml-2">password masih kosong</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url() ?>auth/register">Buat akun!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>