@extends('layout.main')

@section('isi')
    
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="small-box bg-light" style="width: 200px auto">
            <div class="inner">
                    <h4 style="font-weight: bold">Profile</h4>
                    <hr>
                    <center>
                    <img src="dist/img/joms.jpg" alt="foto joms" style="width:500px; border-radius: 10px;"> <br><br> 
                    </center>
                    <br>
                    <div class="card-group">
                        <div class="card" style="background: linear-gradient(109.2deg, rgb(249, 174, 240) 6.5%, rgb(139, 144, 250) 97.1%);border-radius:10px">
                            <div class="card-body">
                                <h5 class="card-title"><b>Biodata {{ $rfull_name }}</b></h5><br>
                                <hr>
                                <p class="card-text">
                                    Nama Lengkap    : {{ $rfull_name }} <br>
                                    Nama Panggilan  : {{ $rname }} <br>
                                    NIM             : {{ $rnim }} <br>
                                    Absen           : {{ $rabsen }} <br>
                                    {{ $rbio }}
                                </p>
                            </div>
                        </div>             
                        <div class="card bg-" style="width:350px; background: radial-gradient(circle at 10% 20%, rgb(248, 219, 219) 0%, rgb(229, 248, 250) 90%);border-radius:10px">
                            <div class="card-body">
                                <h5 class="card-title"><b>Biodata {{ $sfull_name }}</b></h5><br>
                                <hr>
                                <p class="card-text">
                                    Nama Lengkap    : {{ $sfull_name }} <br>
                                    Nama Panggilan  : {{ $sname }} <br>
                                    NIM             : {{ $snim }} <br>
                                    Absen           : {{ $sabsen }} <br>
                                    {{ $sbio }}
                                </p>
                            </div>
                        </div>    
                        <div class="card" style="background: radial-gradient(848px at 10% 20%, rgba(174, 231, 165, 0.9) 0%, rgb(181, 205, 154) 90%);border-radius:10px">
                            <div class="card-body">
                                <h5 class="card-title"></b>Biodata {{ $zfull_name }}</b></h5><br>
                                <hr>
                                <p class="card-text">
                                    Nama Lengkap    : {{ $zfull_name }} <br>
                                    Nama Panggilan  : {{ $zname }} <br>
                                    NIM             : {{ $znim }} <br>
                                    Absen           : {{ $zabsen }} <br>
                                    {{ $zbio }}
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
            </div>

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
@endsection