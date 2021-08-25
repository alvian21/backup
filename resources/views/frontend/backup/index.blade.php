@extends('frontend.master')

@section('title', 'Backup')

@section('backup', 'active')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Backup</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card card-dark">
                    <div class="card-header container-fluid d-flex justify-content-between">
                        <h4 class="text-dark"><i class="fas fa-list pr-2"></i> Backup</h4>

                    </div>
                    <div class="card-body">
                        @include('frontend.include.alert')
                        <div class="table-responsive">

                            <table class="table table-bordered display nowrap" id="table-anggota" cellspacing="0"
                                width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kode Lokasi</th>
                                        <th>Last Update</th>
                                        <th>Aksi</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @forelse ($backup as $item)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$item->Nama}}</td>
                                        <td>{{$item->KodeLokasi}}</td>
                                        <td>{{$item->LastUpdate}}</td>
                                        <td>
                                            <a href="{{route('backup.show',[$item->id])}}"
                                                class="btn btn-info">Download</a>
                                        </td>
                                    </tr>
                                    @empty

                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){

    var table = $("#table-anggota").DataTable({
        "scrollX": true,
    });

})
</script>
@endsection
