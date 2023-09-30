<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-success">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Masuk Akun</h3></div>
                                    <div class="card-body">
                                    <form class="row g-3 needs-validation" method="POST" action="dashboard.php">
                    <div class="col-12 has-validation">
                      <label for="nis" class="form-label">Nama Lengkap</label>
                      <input type="text" name="nis" class="form-control" id="nis" value="">
                      <div class="invalid-feedback">Please, enter your Nama Lengkap!</div>
                    </div>  
                    <div class="col-12">
                      <label for="yourName" class="form-label">Email</label>
                      <input type="text" name="name" class="form-control" id="yourName" value="">
                      <div class="invalid-feedback">Please, enter your email!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Username</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" value="">
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="token" class="form-label">Password</label>
                      <div class="input-group has-validation">
                        <input type="text" name="token" class="form-control" id="token" value="">
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Tempat lahir</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" value="">
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <label for="konfirpassword" class="form-label">Tanggal Lahir</label>
                      <input type="password" name="passwordconfirm" class="form-control" id="konfirpassword" value="">
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-success w-100" type="submit">Buat akun</button>
                    </div>
                    <div class="col-12">
    
                    </div>
                  </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">@iniiy.na &copy; STS_2023</div>
                            <div>
                                
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
