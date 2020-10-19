
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="<?= base_url('assets/css/admin/daftar_kandidat.css');?>">


    </head>
        <body>

<!-- admin sidebar -->
        <nav class="nav m-auto  fixed-top text-white" style="height: 70px; width:100% !important; background: #152238;">
            <h3 class="nav-link m-auto" style="line-height:50px;">SMEA-PILKETOS</h3>
             <a href=" <?= base_url('admin/logout'); ?>" class="mr-5 text-light" style="text-decoration:none; float: right; line-height: 70px;"> <i class="fas fa-sign-out-alt"></i> logout </a>
        </nav>
          
            <div class="row" >
                <div class="col-md-2">
            
                    <div class="wrapper">

                        <nav id="sidebar" style="  background: #192841;">
                            <!-- Sidebar Header -->
                            <div class="sidebar-header text-white text-center " style="width: 100%;">
                                <i class="fas fa-user-circle mt-4 " style="z-index : 8; font-size: 60px;"></i>
                                <h4 class="text-center " style="margin-left: -3px;"> Admin </h4>

                                <hr class="bg-white" style="width: 80%;">
                            </div>

                            <!-- Sidebar Links -->
                            <ul class="list-unstyled components">
                                <li class="item"><a href="<?= base_url(); ?>admin"> <i class="fas fa-chart-line mr-3"></i>Dashboard</a></li>
                                <li class="active item"><a href="<?= base_url(); ?>admin/daftar_kandidat" ><i class="fas fa-user-graduate mr-3"></i>Daftar Kandidat</a></li>
                                <!-- Link with dropdown items -->
                                
                                <li class="item"><a href="<?= base_url(); ?>admin/lihat_hasil" ><i class="fas fa-poll mr-3"></i>Lihat Hasil</a></li>
                               
                            </ul>
                        </nav>

                        <div id="content">
                            <button type="button" id="sidebarCollapse" class="navbar-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>

                    </div>
                </div>  
                

                <div class="col-md-10 ">
                    <div class="content-container ">
                        <h3 class="mt-5">Kandidat Ketua 1 </h3>
                   

                        <hr style="width: 80%; margin-left:0;">

                        <?php if( $this->session->flashdata('flash') ) :?>
                            <div class="alert alert-success" role="alert" style="width: 80%;">
                               data  <?= $this->session->flashdata('flash');?>
                            </div>
                        <?php endif;?>
                        <!-- card component -->
                        <div class="table_container mt-5 mb-5" style="background:#fff; max-width:1100px; min-width:600px; padding : 20px; position:relative;">
                            <table id="daftar_kandidat" class="table table-striped table-bordered" style="width:100%; ">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Visi & Misi</th>
                                        <th>Foto</th>
                                        <th>opsi</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                <?php foreach($ketua_1 as $daftar):?>
                                    <tr>
                                        <td><?= $daftar['nama'];?></td>
                                        <td><?= $daftar['kelas'];?></td>
                                        <td><?= $daftar['visi'];?></td>
                                        <td> <img src="<?= base_url()?>assets/resources/kandidat/<?= $daftar['foto']; ?>" alt="" srcset="" width="80px" height="100px">  </td>
                                        <th> <a href=" <?= base_url(); ?>admin/edit_ketua_1/<?= $daftar['id']; ?>" class="btn btn-primary"><i class="fas fa-edit text-white "></i></a><a href="<?= base_url(); ?>admin/hapus_ketua_1/<?= $daftar['id'];?>" class="mt-3 btn btn-danger"onclick="confirm('apkah yakin ingin dihapus?')"><i class="fas fa-trash-alt text-white "></i></a></th>
                                    </tr>
                                <?php endforeach; ?>
                                    
                                </tbody>
                        
                                
                            </table>

                            <a href="<?= base_url(); ?>/admin/tambah_ketua_1" class="btn btn-primary mt-4" id="tambah">Tambah Kandidat</a>
                        </div>

                        <!-- ketua 2 -->

                        <h3  style="margin-top: 100px;">Kandidat Ketua 2 </h3>
                   

                        <hr style="width: 80%; margin-left:0;">

                        <div class="table_container mt-5 mb-5" style="background:#fff; max-width:1100px; min-width:600px; padding : 20px; position:relative;">
                            <table id="daftar_kandidat_2" class="table table-striped table-bordered" style="width:100%; ">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Visi & Misi</th>
                                        <th>Foto</th>
                                        <th>opsi</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                <?php foreach($ketua_2 as $daftar):?>    
                                    <tr>
                                        <td><?= $daftar['nama'];?></td>
                                        <td><?= $daftar['kelas'];?></td>
                                        <td><?= $daftar['visi'];?></td>
                                        <td> <img src="<?= base_url()?>/assets/resources/kandidat/<?= $daftar['foto']; ?>" alt="" srcset="" width="80px" height="100px">  </td>
                                        <th> <a href="<?= base_url(); ?>admin/edit_ketua_2/<?= $daftar['id'] ?>" class="btn btn-primary"><i class="fas fa-edit text-white "></i></a><a href="<?= base_url(); ?>admin/hapus_ketua_2/<?= $daftar['id'];?>" class="mt-3 btn btn-danger"onclick="confirm('apkah yakin ingin dihapus?')"><i class="fas fa-trash-alt text-white "></i></a></th>
                                    </tr>
                                <?php endforeach; ?>
                                    
                                </tbody>
                        
                                
                            </table>

                            <a href="<?= base_url(); ?>/admin/tambah_ketua_2" class="btn btn-primary mt-4" id="tambah">Tambah Kandidat</a>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="footer" style="width: 100%;"> 
            <footer class=" justify-content-center   text-center mt-4" style="padding: 0px 0px 25px 0;">
                    <h6 cl><i class="far fa-copyright"></i> Komunitas <span style="color: #2ab7ca ;"> Teknik Informatika </span> </h6>
                    <div class="social-media">
                        <a href="http://facebook.com"><i class="fab fa-facebook-square text-dark mr-3"></i></a>
                        <a href="http://instagram.com"><i class="fab fa-instagram text-dark"></i></a>
                    </div>
            </footer>

          
          
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
            
            <script>
                $(document).ready(function(){
                    $('#daftar_kandidat').DataTable();
                    $('#daftar_kandidat_2').DataTable();
                })
            </script>
            <script src="<?= base_url('assets/js/admin/daftar_kandidat.js'); ?>">