<script>
  setTimeout(() => {
    var config = <?php echo json_encode($alert); ?>;
    alert(JSON.stringify(config))
    }, 600);
</script>



@extends('layout.main')

@section('isi')
    
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="small-box bg-light" style="width: 200px auto">
            <div class="inner">
                <h4 style="font-weight: bold">Selamat Datang</h4>

                <h5 style="font-weight: bold">{!! $full_name !!}</h5>
            </div>
        </div>
        <!-- /.content -->
    </div>
</section>
  <!-- /.content-wrapper -->
@endsection