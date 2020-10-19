
</head>

<body style="background: #f0f8ff;">
    

    <div class="container mt-5">
        <div class="card border-0">
        <div class="card-header text-center text-bold">
            edit Data
        </div>
        <div class="card-body">
                <?php foreach( $kandidat as $daftar ):

                ?>
            <form action="<?= base_url(); ?>admin/edit_ketua_1/<?= $daftar['id']; ?>" method="POST" enctype="multipart/form-data">
                <?php if(validation_errors()) :?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                    
                </div>

                <?php endif;?>


                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" value="<?= $daftar['nama']; ?>">
                </div>

                <div class="form-group">
                    <label for="nama">Kelas</label>
                    <input type="text" class="form-control" id="kelas" placeholder="kelas" name="kelas" value="<?= $daftar['kelas']; ?>">
                </div>
                
                <div class="form-group">
                    <label for="visi">Visi dan Misi</label>
                    <textarea class="form-control" id="visi" name="visi" rows="3" > <?= $daftar['visi']; ?> </textarea>
                </div>

                <div class="form-group">
                    <input type="file" value="pilih foto" name="foto" id="foto">
                </div>

            <button class="btn btn-primary mt-4" type="submit" name="submit"  id="submit">
                ubah data
            </button>
                <?php endforeach; ?>
            <?= form_close();?>
        </div>
        </div>