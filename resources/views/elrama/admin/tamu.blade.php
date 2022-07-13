@extends('layout/user')

@section('title', 'Tamu')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tamu</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Tamu</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Title</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
        
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah" style="margin-bottom: 10px;"><i class="fas fa-plus-circle"></i> Tambah</button>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tamus as $tamu)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $tamu->nama }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-success"><i class="fas fa-user-edit"></i> Edit</a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- <div class="card-footer">

        </div> -->

    </div>

</section>

    <div class="modal fade" id="tambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Tamu</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="form-group row">
                <label for="Nama Tamu" class="col-sm-3 col-form-label">Nama Tamu</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="namaTamu" placeholder="Masukkan tema agenda" name="nama">
                </div>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Kirim</button>
            </div>
        </div>
    </div>

</div>
@endsection()
