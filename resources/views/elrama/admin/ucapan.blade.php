@extends('layout/user')

@section('title', 'Ucapan')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Ucapan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Ucapan</li>
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
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah" style="margin-bottom: 10px;">Tambah</button> -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>ucapan</th>
                        <th>kehadiran</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>paijo kuliah</td>
                        <td>Selamat menempuh hidup baru......</td>
                        <td>hadir</td>
                        <td>
                            <a href="#"><i class="fas fa-trash" style="color: red" data-toggle="modal" data-target="#hapus"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- <div class="card-footer">
            
        </div> -->

    </div>

</section>

<!-- tampil modal hapus -->
<div class="modal fade" id="hapus">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ucapan & Doa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <div class="modal-body">
            <p>Apkah anda yakin ingin menghapus data ini?</p>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>Paijo</td>
                </tr>
                <tr>
                    <td>ucapan</td>
                    <td>:</td>
                    <td>Selamat menempuh hidup baru......</td>
                </tr>
                <tr>
                    <td>kehadiran</td>
                    <td>:</td>
                    <td>hadir</td>
                </tr>
            </table>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger">Hapus</button>
        </div>
    </div>

</div>

</div>
@endsection()