
</head>

<body>
    

    <div class="container mt-5">
        <div class="card border-0">
        <div class="card-header text-center text-bold">
            Tambah Data
        </div>
        <div class="card-body">
            <?=  form_open_multipart('admin/tambah_ketua_2'); ?>
                <?php if(validation_errors()) :?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                    
                </div>

                <?php endif;?>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="nama" name="nama">
                </div>

                <div class="form-group">
                    <label for="nama">Kelas</label>
                    <input type="text" class="form-control" id="kelas" placeholder="kelas" name="kelas">
                </div>
                
                <div class="form-group">
                    <label for="visi">Visi dan Misi</label>
                    <textarea class="form-control" id="visi" name="visi" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <input type="file" name="foto" id="foto">
                </div>

            <button class="btn btn-primary mt-4" type="submit" name="submit"  id="submit">
                Tambah
            </button>

            <?= form_close();?>
        </div>
        </div>


        

    </div>



</body>

<style>
    body{
        background: #f0f8ff;
    }
</style>