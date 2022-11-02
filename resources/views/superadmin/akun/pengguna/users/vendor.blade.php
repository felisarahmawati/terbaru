@extends("layouts_super.main")
@section('content')
<section class="home-section">
    <div class="main">

        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="search" data-aos="fade-left" data-aos-duration="1000">
                <label>
                    <input type="text" placeholder="Cari Disini">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
        </div>

        <!-- top nav -->
       
        <!-- data list -->
        <div class="details1">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Data Vendor</h2>
                </div>
                
                <table class="table-borderless mt-3 w-auto">
                    <thead>
                        <tr>
                            <td>Nama</td>
                            <td>Username</td>
                            <td>Email</td>
                            <td>Alamat</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Rebbecca Abadi</td>
                            <td>rebbecca</td>
                            <td>beca@gmail.com</td>
                            <td>Planet Mars</td>
                        </tr>
                        <tr>
                            <td>Bently aja</td>
                            <td>bntly</td>
                            <td>ben@gmail.com</td>
                            <td>jl.diponegoro</td>
                        </tr>
                        <tr>
                            <td>Willian Fredy</td>
                            <td>will</td>
                            <td>will@gmail.com</td>
                            <td>Planet Mars</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection

