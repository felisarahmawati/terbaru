@extends("layouts_admin.main")
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
                    <h2>Data Customer</h2>
                </div>
                
                <table class="table-borderless mt-3 w-auto">
                    <thead>
                        <tr>
                            <td>Nama</td>
                            <td>Username</td>
                            <td>Email</td>
                            <td>No Telpon</td>
                            <td>Alamat</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Rebbecca Abadi</td>
                            <td>rebbecca</td>
                            <td>beca@gmail.com</td>
                            <td>0895648980</td>
                            <td>Planet Mars</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection

