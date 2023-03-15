@extends('layout.main')
@section('isi')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
        <!-- Small boxes (Stat box) -->
            <div class="card-header">
                    <h4 style="font-weight: bold">Mata Kuliah</h4>
            </div>
            <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                                    <th>NO</th>
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
                            {!! $matkuls->withQueryString()->links('pagination::bootstrap-5') !!}
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection