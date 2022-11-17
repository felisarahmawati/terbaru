@extends('vendor.vendor.dashboard_vendor')

<!--hero section-->
@section('container')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="cardHeader-title">
                <h2>Kelola Barang</h2>
            </div>
        </div>
        <div class=" p-3">
            <div class="cardBox1">
                <div class="card1">
                    <div>
                        <a href="/vendor/vendor/Kelola-Kendaraan/setelah_input" style="text-decoration:none">
                            <div class="cardName1">Kendaraan
                            </div>
                        </a>
                    </div>
                </div>

                <div class="card1">
                    <div>
                        <a href="/vendor/vendor/Kelola-Bangunan/setelah_input" style="text-decoration:none">
                            <div class="cardName1">Bangunan
                            </div>
                        </a>
                    </div>
                </div>

                <div class="card2">
                    <div>
                        <a href="/vendor/vendor/Kelola_Barang/setelah_input" style="text-decoration:none">
                            <div class="cardName2">Barang
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card1">
                    <div>
                        <a href="/vendor/vendor/Kelola-Pickup/setelah_input" style="text-decoration:none">
                            <div class="cardName1">Pick Up
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="p-5 container card" style="width: 90%">
                <a href="/vendor/vendor/Kelola_Barang/layanan_step1 "><button class="btn btn-success p-2  " style="font-size: 20px"><i class="bi bi-plus"></i>Tambah layanan</button></a>
                <div class="details1 ">
                    <div class="recentOrders">
                        <div class="cardHeader">
                            <h2>Detail kelola Barang</h2>
                            <a href="#" class="btn btn-thema">View All</a>
                        </div>
                        <table class="table-borderless mt-3 w-auto">
                            <thead class="text-start col-md-4">
                                <tr>
                                    <td>Nama Layanan</td>
                                    <td>Luas Gudang</td>
                                    <td>Status</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody class="text-start">
                                <tr>
                                    <td>Barang</td>
                                    <td>25 x 25</td>
                                    <td style="color: rgb(205, 26, 26)">Ditolak</td>
                                    <td class="col-md-2 text-end">
                                        <a href="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="bi bi-info-circle p-1"></i>Detail</a>

                                    </td>
                                    <!-- <td><span class="status return">Return</span></td> -->
                                </tr>
                                <tr>
                                    <td>Barang</td>
                                    <td>25m x 25m</td>
                                    <td style="color: rgb(181, 181, 11)">Menunggu Verifikasi</td>
                                    <td class="col-md-2 text-end">
                                        <a href="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="bi bi-info-circle p-1"></i>Detail</a>

                                    </td>
                                    <!-- <td><span class="status return">Return</span></td> -->
                                </tr>
                                <tr>
                                    <td>Barang</td>
                                    <td>25 x 25</td>
                                    <td style="color: rgb(67, 195, 89)">Aktif</td>
                                    <td class="col-md-2 text-end">
                                        <a href="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="bi bi-info-circle p-1"></i>Detail</a>

                                    </td>
                                    <!-- <td><span class="status return">Return</span></td> -->
                                </tr>
                                <tr>
                                    <td>Barang</td>
                                    <td>25 x 25</td>
                                    <td style="color: rgb(131, 148, 134)">Tidak Aktif</td>
                                    <td class="col-md-2 text-end">
                                        <a href="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="bi bi-info-circle p-1"></i>Detail</a>
                                    </td>
                                    <!-- <td><span class="status return">Return</span></td> -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!--MODAL HAPUS-->
            <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><b>Anda yakin ingin menghapus data ini? </b></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--modal edit-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel" style="color:#27cd88">Form Edit</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-10 ">
                                    <label for="faq" class="form-label" style="font-size: 20px"><b>Status
                                            Layanan</b></label>
                                </div>
                                <div class="col-md-2 text-end pe-2">
                                    <label class="switch">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                        <label class="switch ps-2 mt-2" for="checkbox">
                                            <b>Aktif</b>
                                        </label>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <label for=""><b>Ubah foto gudang Anda</b></label>
                                <div class="col-md-3">
                                    <div class="file-upload">
                                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

                                        <div class="image-upload-wrap">
                                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                            <div class="drag-text">
                                                <h3>+</h3>
                                            </div>
                                        </div>
                                        <p class="text-center">Kanan</p>
                                        <div class="file-upload-content">
                                            <img class="file-upload-image" src="#" alt="your image" />
                                            <div class="image-title-wrap">
                                                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded
                                                        Image</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="file-upload">
                                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

                                        <div class="image-upload-wrap">
                                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                            <div class="drag-text">
                                                <h3>+</h3>
                                            </div>
                                        </div>
                                        <p class="text-center">Kiri</p>
                                        <div class="file-upload-content">
                                            <img class="file-upload-image" src="#" alt="your image" />
                                            <div class="image-title-wrap">
                                                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded
                                                        Image</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="file-upload">
                                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

                                        <div class="image-upload-wrap">
                                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                            <div class="drag-text">
                                                <h3>+</h3>
                                            </div>
                                        </div>
                                        <p class="text-center">Depan</p>
                                        <div class="file-upload-content">
                                            <img class="file-upload-image" src="#" alt="your image" />
                                            <div class="image-title-wrap">
                                                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded
                                                        Image</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="file-upload">
                                        <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>
                                        <div class="image-upload-wrap">
                                            <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                                            <div class="drag-text">
                                                <h3>+</h3>
                                            </div>
                                        </div>
                                        <p class="text-center">Dalam</p>
                                        <div class="file-upload-content">
                                            <img class="file-upload-image" src="#" alt="your image" />
                                            <div class="image-title-wrap">
                                                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded
                                                        Image</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="file-upload-content">
                                <img class="file-upload-image" src="#" alt="your image" />
                                <div class="image-title-wrap">
                                    <button type="button" onclick="removeUpload()" class="remove-image">Remove
                                        <span class="image-title">Uploaded Image</span></button>
                                </div>
                            </div>
                        </div>
                        <h5 style="color:  #999">Edit Alamat</h5>
                        <div class="container">
                            <div class="row row-cols-1 row-cols-md-12 g-4">
                                <form action="">
                                    <div class="col-sm-12">
                                        <label for="inputState" class="form-label">Provinsi</label>
                                        <select id="inputState" class="form-select" placeholder="DI Yogyakarta">
                                            <option selected>Pilih provinsi</option>
                                            <option>DKI Jakarta</option>
                                            <option>Jawa Barat</option>
                                            <option>Jawa Tengah</option>
                                            <option>DI Yogyakarta</option>
                                            <option>Jawa Timur</option>
                                            <option>Kalimantan Timur</option>

                                        </select>
                                    </div>

                                    <div class="col-sm-12">
                                        <label for="inputState" class="form-label">Kabupaten</label>
                                        <select id="inputState" class="form-select" placeholder="Bantul">
                                            <option selected>Pilih Kabupaten</option>
                                            <option>Bantul</option>
                                            <option>Sleman</option>
                                            <option>Kulon Progo</option>
                                            <option>Gunung Kidul</option>
                                            <option>Kota Yogyakarta</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-12">
                                        <label for="inputState" class="form-label">Kecamatan</label>
                                        <select id="inputState" class="form-select" placeholder="Banguntapan">
                                            <option selected>Pilih Kecamatan</option>
                                            <option>Baguntapan</option>
                                            <option>Bambanglipuro</option>
                                            <option>Bantul</option>
                                            <option>Dlingo</option>
                                            <option>Imogiri</option>
                                            <option>Jetis</option>
                                            <option>Kasihan</option>
                                            <option>Kretek</option>
                                            <option>Pajangan</option>
                                            <option>Pandak</option>
                                            <option>Piyungan</option>
                                            <option>Pundong</option>
                                            <option>Sanden</option>
                                            <option>Sedayu</option>
                                            <option>Sewon</option>
                                            <option>Srandakan</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Catatan</label>
                                        <p><small class="text-muted">Deskripsikan Alamat gudang Anda agar mudah
                                                ditemukan(opsional)</small></p>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Karangjambe, Gg Arjuna No.59, Jaranan"></textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="">Ubah berat barang per kg </label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="20 kg">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Ubah harga penitipan per kg</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Rp20.000">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="">Deskripsi Layanan</label>
                                            <textarea type="text" class="form-control" id="exampleFormControlInput1" placeholder=""></textarea>
                                        </div>

                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">luas
                                                    lahan</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="50m x 50m">
                                            </div>

                                        </div>

                                        <a href=" /Vendor/Kelola_Barang/setelah_input"><button type="button" class="btn btn-outline-success col-md-12 mt-3">Save</button></a>
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- modal detail --}}
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
            <div class="modal-content">
                <div class="container mt-4 mb-4">
                    <div class="">

                        <div class="container">
                            <div class=" mt-3 mb-3" style="max-width: 100%;">
                                <div class="row g-0">
                                    <div class="col-md-6 mt-3" style="padding-top:15px;">
                                        <img src="{{ asset('assets/img/barang1.jpeg') }}" class="img-fluid rounded-start" style="width:500px; height:400px" alt="...">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <p class="mb-2" style="font-size: 23px; margin-bottom: 10px">
                                                        <b>Barang</b>
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="text-success" style="font-size: 18px; margin-bottom: 10px">
                                                <b>Rp5.000 / HARI</b>
                                            </p>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label for="exampleFormControlInput1" class="form-label mb-2"><b>Luas Lahan</b></label>
                                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="100m">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <p class="text-success" style="font-size: 18px; margin-bottom: 10px">
                                                    <b>Deskripsi layanan</b>
                                                </p>
                                            </div>
                                            <div class="col-12 text-muted">
                                                <p>
                                                    Wijaya - titipsini menyediakan layanan penitipan kendaraan
                                                    kecil hingga kendaraan besar, dengan kapasitas lahan 250m x
                                                    250m. Mampu menampung kendaraan hingga 20 kendaraan kecil
                                                    dan besar. Wijaya - titipsini juga menyediakan layanan konsul untuk
                                                    semua jenis kendaraan
                                                </p>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-2">

                                                    <i class="bi bi-geo-alt-fill" style="font-size: 35px; color:#eab449; margin-bottom: 10px;"></i>

                                                </div>

                                                <div class="col-md-10">
                                                    <p class="mb-2 mt-2" style="font-size: 12px; margin-bottom: 10px">
                                                        Karangjambe, Gg Arjuna No.59, Jaranan,Banguntapan,
                                                        kec.Banguntapan, Bantul, Daerah Istimewa Yogyakarta 55198
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="footer">
                                                <button class="btn btn-success col-md-4 " data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="bi bi-pencil-square"></i>
                                                    EDIT</button>
                                                <button class="btn btn-danger col-md-4" data-bs-toggle="modal" data-bs-target="#Modal"><i class="bi bi-trash"></i>HAPUS</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
