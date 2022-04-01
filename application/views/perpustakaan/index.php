<?php 

if(isset($_POST["btn"]))
{
    var_dump($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col text-end me-5 mt-4">
                <a href="" class="me-3" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#exampleModal"><i>Masuk</i></a>
                <a href="" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i>Daftar</i></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div class="text-center" style="margin-top: 190px; margin-left: 20px;">
                            <h1>Perpustakaan Kita</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates officiis iusto</p>
                            <div class="row">
                                <div class="col-12 mx-auto">
                                    <button class="btn btn-primary" style="margin-right: 20px;" data-bs-toggle="modal" data-bs-target="#exampleModal">Masuk</button>
                                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Daftar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <img src="asset/6607.jpg" alt="" style="width: 700px; margin-top: 100px">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-8">
                            <img src="asset/6263.jpg" alt="" style="width: 750px;">
                        </div>
                        <div class="col-4">
                            <h5 class="text-center" style="margin-top:100px;">Form Masuk Akun</h5>
                            <form method="post">
                                <label for="" class="form-label">Nama</label>
                                <input type="text" name="nama_masuk" class="form-control" placeholder="Masukan Nama Anda">
                                <label for="" class="form-label mt-2">Kata Sandi</label>
                                <input type="password" name="password_masuk" class="form-control mb-3" placeholder="Masukan Kata Sandi Anda">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-outline-secondary" data-bs-dismiss="modal" style="width: 100px;">Batal</button>
                                    <button type="submit" class="btn btn-primary" name="btn_masuk" style="width: 100px;">Masuk</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-8">
                            <img src="asset/6263.jpg" alt="" style="width: 750px;">
                        </div>
                        <div class="col-4">
                            <h5 class="text-center" style="margin-top:75px;">Form Pendaftaran Akun</h5>
                            <form method="post">
                                <label for="" class="form-label">Nama</label>
                                <input type="text" name="nama_daftar" class="form-control" placeholder="Masukan Nama Anda">
                                <label class="form-label mt-2">Email</label>
                                <input type="email" name="email_daftar" class="form-control" placeholder="Masukan Email Anda">
                                <label for="" class="form-label mt-2">Kata Sandi</label>
                                <input type="password" name="password_daftar" class="form-control mb-3" placeholder="Masukan Kata Sandi Anda">
                                <input type="hidden" name="tanggal_daftar" value="<?php echo date('d - M - Y') ?>">
                                <input type="hidden" name="role_daftar" value="2">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-outline-secondary" data-bs-dismiss="modal" style="width: 100px;">Batal</button>
                                    <button type="submit" class="btn btn-primary" name="btn_daftar" style="width: 100px;">Masuk</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>