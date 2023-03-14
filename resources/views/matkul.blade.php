@extends('layout.main')

@section('isi')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="small-box bg-light" style="width: 200px auto">
            <div class="inner">
                    <h4 style="font-weight: bold">Mata Kuliah</h4>
                    <hr>
                    <table border="1">
                        <tr>
                            <th>ID</th>
                            <th>KODE MK</th>
                            <th>MATA KULIAH</th>
                            <th>SKS</th>
                            <th>JAM</th>
                            <th>SEMESTER</th>
                        </tr>

                        @foreach($matkuls as $m)
                        <tr>
                            <td>{{$m->id}}</td>
                            <td>{{$m->KODE_MK}}</td>
                            <td>{{$m->NAMA_MATA_KULIAH}}</td>
                            <td>{{$m->SKS}}</td>
                            <td>{{$m->JAM}}</td>
                            <td>{{$m->SEMESTER}}</td>
                        </tr>
                        @endforeach
                    </table>
            </div>
        </div>
    </div>
</section>

@endsection