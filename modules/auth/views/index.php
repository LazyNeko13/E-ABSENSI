<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- swiper carousel css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/swiperjs-6.6.2/swiper-bundle.min.css">

    <!-- nouislider CSS -->
    <link href="<?= base_url(); ?>assets/vendor/nouislider/nouislider.min.css" rel="stylesheet">

    <title>
      
      <?php if (isset($title) || $title != NULL): ?>
            <?= 'GDS | '.$title; ?>
        <?php else: ?>
            <?= 'GDS'; ?>
        <?php endif ?>
    </title>

    <style type="text/css">
      /*.card-img-left {
        width: 50%;
        background: scroll center url('https://source.unsplash.com/WEQbe2jBg40/414x512');
        background-size: cover;
      }*/

      

      .btn-login {
        background-color: #2C88C0;
        color: #FFFFFF;
        font-size: 0.9rem;
        letter-spacing: 0.05rem;
        padding: 0.75rem 1rem;
        transition: 0.3s !important;
      }

      .btn-login:hover{
        background-color: transparent;
        border: 1px solid #2C88C0;
        color: #2C88C0;
      }

      p.deskripsi-login{
        color: #C0C0C0;
      }

      label.form-label{
        font-size: 13px;
        font-weight: 500;
        color: #727272;
      }

      .form-check input{
        margin-top: 7px;
      }

      label.form-check-label{
        font-size: 13px;
        color: #727272;
        font-weight: 500;
      }

      .lupa-password a{
        font-size: 13px;
        text-decoration: none;
        color: #2C88C0;
        font-weight: 400;
      }

      .input-group-text{
        background-color: transparent;
      }

      .col-6.col-xl-6.images{
        background: rgb(255,255,255);
        background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 0%, rgba(240,248,255,1) 66%);
      }

      .images-opening img{
        width: 435px;
      }

      input[type="text"]:focus {
      outline: none;
      }
      input:focus .form-control{
        outline: none;
      }
    </style>
  </head>
  <body>
      <?php 

    echo alert_show($this->session->flashdata('judul'), $this->session->flashdata('teks'), $this->session->flashdata('icon'), $this->session->flashdata('gambar') );

?>
     <div class="container mt-5">
        <div class="row d-flex justify-content-center position">
           <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden" style="max-width: 80%;">
              <div class="col-6 col-xl-6 mx-auto images">
                <div class="images-opening d-flex justify-content-center">
                    <img src="<?= base_url('assets/img/login.svg') ?>">
                </div>
              </div>

              <div class="col-lg-6 col-xl-6 mx-auto">
                <div class="card-body p-4 p-sm-5">   
                  <div class="mb-4">
                    <h5 class="card-title text-start fw-bolder fs-5 mb-0">Login</h5>
                    <p class="text-start fw-normal deskripsi-login">Isikan NISN dan Password untuk bisa masuk ke aplikasi</p>
                  </div>

                  <form method="POST" action="<?= base_url('auth'); ?>">

                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">NIS/NIP</label>
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-file-text-fill"></i></span>
                        <input type="text" class="form-control" placeholder="Masukkan NIS atau NIP" id="nis_nip" name="nis_nip" aria-label="NIS" aria-describedby="basic-addon1" style="font-size:14px" value="<?= $this->session->flashdata('nis_nip'); ?>" autocomplete="off">
                      </div>
                      <?= form_error('nis_nip','<small class="text-danger pl-3">','</small>'); ?>
                    </div>

                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Password</label>
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" class="form-control" placeholder="Masukkan Password" id="password" name="password" aria-label="Password" aria-describedby="basic-addon1" style="font-size:14px" autocomplete="off">
                      </div>
                      <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="form-check">
                        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Ingat Saya?
                        </label>
                      </div>
                      <div class="lupa-password">
                        <a>Lupa password?</a> 
                      </div>
                    </div>

                    <div class="d-grid mt-5">
                      <button class="btn btn-lg btn-login fw-bold text-uppercase" type="submit" disabled>Masuk</button>
                    </div>
                  </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/ajax/auth.js') ?>"></script>
    <script src="<?= base_url('assets/js/umum/alert/sweetalert2.all.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/umum/alert/scriptalert.js') ?>"></script>
  </body>
</html>