

<link rel="stylesheet" href="<?= base_url('assets/css/admin/lihat_hasil.css');?>">


    </head>
        <body>

<!-- admin sidebar -->
        <nav class="nav m-auto  fixed-top text-white" style="height: 70px; width:100% !important; background: #152238;;">
            <h3 class="nav-link m-auto" style="line-height:50px;">SMEA-PILKETOS</h3>
             <a href=" <?= base_url('admin/logout'); ?>" class="mr-5 text-light" style="text-decoration:none; float: right; line-height: 70px;"> <i class="fas fa-sign-out-alt"></i> logout </a>
        </nav>
          
            <div class="row" >
                <div class="col-md-2">
            
                    <div class="wrapper">

                        <nav id="sidebar" style="background: #192841;">
                            <!-- Sidebar Header -->
                            <div class="sidebar-header text-white text-center " style="width: 100%;">
                                <i class="fas fa-user-circle mt-4 " style="z-index : 8; font-size: 60px;"></i>
                                <h4 class="text-center " style="margin-left: -3px;"> Admin </h4>

                                <hr class="bg-white" style="width: 80%;">
                            </div>

                            <!-- Sidebar Links -->
                            <ul class="list-unstyled components">
                                <li class="item"><a href="<?= base_url(); ?>admin"> <i class="fas fa-chart-line mr-3"></i>Dashboard</a></li>
                                <li class=" item"><a href="<?= base_url(); ?>admin/daftar_kandidat" ><i class="fas fa-user-graduate mr-3"></i>Daftar Kandidat</a></li>
                                <!-- Link with dropdown items -->
                                
                                <li class="active item"><a href="<?= base_url(); ?>admin/lihat_hasil" ><i class="fas fa-poll mr-3"></i>Lihat Hasil</a></li>
                               
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
                    <div class="content-container" style="margin-top: 120px; margin-left: 100px;">

                    <h2>Ketua 1</h2>
                    <hr class="mb-5 bg-dark-10">

                    <div class="card-container ketua-1">
                        <!-- card -->
                        <?php foreach($ketua_1 as $daftar):?>
                        <div class="card" style="min-width:18rem; position: relative;">
                            <div class="img" bg-image="<?= base_url();?>assets/resources/kandidat/<?= $daftar['foto'] ?>" style="width:100%; height:300px;"></div>
                            <div class="card-body">
                                <h4 class="card-title text-center text-info p-2" ><?= $daftar['nama']; ?></h4>
                              
                                <p class="card-text "><h1 class="text-center"><?= $daftar['jumlah']; ?></h1></p>
                                <a href="<?= base_url(); ?>admin/detail_kandidat_1/<?= $daftar['id'] ?>" class="btn detail btn-success" style="width: 90%;">Lihat Detail</a>
                            </div>
                        
                        </div>
                    
                        <?php endforeach;?>
                    </div>

                    <h2 class="mt-5">Ketua 2</h2>
                    <hr class="mb-5 bg-dark-10">

                    <div class="card-container ketua-1">
                        <!-- card -->
                        <?php foreach($ketua_2 as $daftar):?>
                        <div class="card" style="min-width: 18rem; position: relative;">
                            <div class="img" bg-image="<?= base_url();?>assets/resources/kandidat/<?= $daftar['foto'] ?>" style="width:100%; height:300px;"></div>
                            <div class="card-body">
                                <h4 class="card-title text-center text-info p-2" ><?= $daftar['nama']; ?></h4>
                              
                                <p class="card-text "><h1 class="text-center"><?= $daftar['jumlah']; ?></h1></p>
                                <a href="<?= base_url(); ?>admin/detail_kandidat_2/<?= $daftar['id'] ?>" class="btn detail btn-success" style="width: 90%;">Lihat Detail</a>
                            </div>
                        
                        </div>
                    
                        <?php endforeach;?>
                    </div>


                    </div>
                </div>
            </div>

            <hr style="width: 100%; margin-top:200px;"> 
            <footer class=" justify-content-center   text-center mt-4" style="padding: 0px 0px 25px 0; ">
                    <h6 cl><i class="far fa-copyright"></i> Komunitas <span style="color: #2ab7ca ;"> Teknik Informatika </span> </h6>
                    <div class="social-media">
                        <a href="http://facebook.com"><i class="fab fa-facebook-square text-dark mr-3"></i></a>
                        <a href="http://instagram.com"><i class="fab fa-instagram text-dark"></i></a>
                    </div>
            </footer>

          
          
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <style>
                    .detail{
                        position: absolute;
                        left: 50%;
                        transform: translateX(-50%);
                        bottom: 30px;
                    }
                    .card{
                        padding-bottom: 50px;
                        margin-right: 20px;
                    }

                    .card-container{
                        display: flex;
                    }

                    @media only screen and ( max-width : 768px){
                        .card-container{
                            display: flex;
                            flex-direction: column;
                            width: 100%;
                            
                        }

                        .card{
                            margin-top: 50px;
                            
                        }
                    }


            </style>
            <script>
                window.onload = function(){
                    const render_image = () =>{
                        let image = document.querySelectorAll('.img')
                        image.forEach(img => {
                            let bg_img = img.getAttribute('bg-image');
                            img.style.backgroundImage = `url('${bg_img}')`;
                            img.style.backgroundSize = 'cover';
                            img.style.backgroundPosition = 'center 10%';
                        })
                    }

                    render_image();
                }
            </script>
            <script src="<?= base_url('assets/js/admin/lihat_hasil.js'); ?>">