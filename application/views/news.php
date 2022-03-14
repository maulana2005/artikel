   <!-- Begin Page Content -->
   <div class="container-fluid">

       <!-- Page Heading -->
       <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <div class="container-fluid">
               <center>
                   <h1 class="h3 mb-2 text-gray-800">DATA NEWS</h1>
               </center>

               <?= $this->session->flashdata('flash') ?>

               <button class="btn btn-sm btn-secondary mb-3" data-toggle="modal" data-target="#tambah_artikel"> <i class="fas fa-plus fa-sm"></i> Tambah Artikel</button>

               <table class="table table-bordered table-striped alert alert-dark">
                   <tr>
                       <th>No.</th>
                       <th>Gambar</th>
                       <th>Judul</th>
                       <th>Artikel</th>
                       <th>kategori</th>
                       <th>Nama Penulis</th>
                       <th>Tanggal</th>
                       <th>Aksi</th>
                   </tr>
                   <?php $nomor = 1; ?>
                   <?php foreach ($news as $arg) : ?>
                       <tr>
                           <td><?= $nomor++ ?></td>
                           <td> <img src="<?= base_url() . '/uploads/' . $arg->gambar ?>" width="100">
                           <td><?= $arg->judul ?></td>
                           <td><?= $arg->artikel ?></td>
                           <td><?= $arg->kategori ?></td>
                           <td><?= $arg->nama_penulis ?></td>
                           <td><?= $arg->tanggal ?></td>

                           <td>
                               <?= anchor('admin/dashboard_admin/edit/' . $arg->id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?>

                               <?= anchor('admin/dashboard_admin/hapus/' . $arg->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>
                           </td>
                       </tr>
                   <?php endforeach; ?>
               </table>

           </div>
       </div>

   </div>

   <!-- modal -->
   <div class="modal fade" id="tambah_artikel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">FORM INPUT ARTIKEL</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <form action="<?= base_url() . 'admin/dashboard_admin/tambah' ?>" method="post" enctype="multipart/form-data">

                       <div class="form-group">
                           <input type="text" name="judul" class="form-control" required placeholder="masukkan judul artikel">
                       </div>
                       <div class="form-group">
                           <textarea type="text" name="artikel" class="form-control" cols="5" rows="20" required placeholder="masukkan artikel"></textarea>
                       </div>

                       <div class="form-group">
                           <label>Kategori</label>
                           <select class="form-control" name="kategori">
                               <option>News</option>
                               <option>Hot</option>
                               <option>Inet</option>
                               <option>Sport</option>
                               <option>Oto</option>
                               <option>Food</option>
                               <option>Health</option>
                           </select>
                       </div>


                       <div class="form-group">
                           <input type="text" name="nama_penulis" class="form-control" required placeholder="masukkan nama penulis">
                       </div>
                       <div class="form-group">
                           <input type="date" name="tanggal" required>
                       </div>
                       <div class="form-group">
                           <input type="file" name="gambar" class="form-control">
                       </div>


               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                   <button type="submit" class="btn btn-primary">Simpan</button>
               </div>
               </form>
           </div>
       </div>
   </div>