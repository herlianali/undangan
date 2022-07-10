@extends('layout/user')

@section('title', 'Beranda')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Beranda</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Blank Page</li>
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah" style="margin-bottom: 10px;">Tambah</button>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                        <th>Bagikan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>putra Ramadan</td>
                        <td>dea</td>
                        <td>
                            <a href="#"><i class="fas fa-edit" data-toggle="modal" data-target="#ubah"></i></a>
                            /
                            <a href="#"><i class="fas fa-trash" style="color: red" data-toggle="modal" data-target="#hapus"></i></a>
                        </td>
                        <td><a href="whatsapp://send?text=Hai putra, datanglah di respesi pernikahanku. %0a https://deasinergi.id/"><button class="btn btn-success btn-xs">Whatsapp</button></a></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>paijo M</td>
                        <td>kuliah</td>
                        <td>
                            <a href="#"><i class="fas fa-edit" data-toggle="modal" data-target="#ubah"></i></a>
                            /
                            <a href="#"><i class="fas fa-trash" style="color: red" data-toggle="modal" data-target="#hapus"></i></a>
                        </td>
                        <td>
                            <a href="whatsapp://send?text=Hai paijo, datanglah di respesi pernikahanku. %0a https://deasinergi.id/"><button class="btn btn-success btn-xs">Whatsapp</button></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Martini</td>
                        <td>SMP</td>
                        <td>
                            <a href="#"><i class="fas fa-edit" data-toggle="modal" data-target="#ubah"></i></a>
                            /
                            <a href="#"><i class="fas fa-trash" style="color: red" data-toggle="modal" data-target="#hapus"></i></a>
                        </td>
                        <td><a href="whatsapp://send?text=Hai martini, datanglah di respesi pernikahanku. %0a https://deasinergi.id/"><button class="btn btn-success btn-xs">Whatsapp</button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- <div class="card-footer">
            
        </div> -->

    </div>

</section>

<!-- tampil modal tambah -->
<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Undangan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <div class="modal-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Keterangan tambahan</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Simpan</button>
        </div>
    </div>
    </div>
</div>

<!-- tampil modal edit -->
<div class="modal fade" id="ubah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Undangan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <div class="modal-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Keterangan tambahan</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</div>
</div>

<!-- tampil modal hapus -->
<div class="modal fade" id="hapus">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Undangan</h4>
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
                    <td>Keterangan</td>
                    <td>:</td>
                    <td>Kuliah</td>
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