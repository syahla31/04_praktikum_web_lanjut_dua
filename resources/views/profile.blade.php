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
                                    Nama Lengkap : {{ $rfull_name }} <br>
                                    NIM : {{ $rnim }} <br>
                                    Absen : {{ $rabsen }} <br>
                                    {{ $rbio }}
                                </p>
                            </div>
                        </div>             
                        <div class="card bg-" style="width:350px; background: radial-gradient(328px at 2.9% 15%, rgb(191, 224, 251) 0%, rgb(232, 233, 251) 25.8%, rgb(252, 239, 250) 50.8%, rgb(234, 251, 251) 77.6%, rgb(240, 251, 244) 100.7%);border-radius:10px">
                            <div class="card-body">
                                <h5 class="card-title"><b>Biodata {{ $sfull_name }}</b></h5><br>
                                <hr>
                                <p class="card-text">
                                    Nama Lengkap : {{ $sfull_name }} <br>
                                    NIM : {{ $snim }} <br>
                                    Absen : {{ $sabsen }} <br>
                                    {{ $sbio }}
                                </p>
                            </div>
                        </div>    
                        <div class="card bg-primary" style="width:350px;border-radius:10px">
                            <div class="card-body">
                                <h5 class="card-title"></b>Biodata {{ $zfull_name }}</b></h5><br>
                                <hr>
                                <p class="card-text">
                                    Nama Lengkap : {{ $zfull_name }} <br>
                                    NIM : {{ $znim }} <br>
                                    Absen : {{ $zabsen }} <br>
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