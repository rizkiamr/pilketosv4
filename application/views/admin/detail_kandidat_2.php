</head>

<body>

    <div class="container">
    <?php foreach($ketua_1 as $daftar):?>

        <div class="row ">
            <div class="col-md-4">
                <div class="img"  bg-image="<?= base_url();?>assets/resources/kandidat/<?= $daftar['foto']; ?>" ></div> 
                <p><h3><?= $daftar['nama']; ?></h3></p>
                <p><h4 class="text-info"><?= $daftar['kelas']; ?></h4></p>
                </div>

                <div class="col-md-6 visi">
                <p><?= nl2br($daftar['visi']);?></p>
                <a href="<?= base_url(); ?>user/pilih_ketua_1/<?= $daftar['id']; ?>" class="btn btn-success mt-3 pilih"> Pilih </a>
                <a href="<?= base_url(); ?>user/index" class="btn btn-primary back" >  </a>
                </div>
            </div>
    <?php endforeach;?>
    </div>

    <style>
        body{
            background:  #f0f8ff;
            font-family: 'poppins' ,sans-serif;
        }

        .row{
            margin-top: 40px;
            background: #fff;
            padding: 40px;
            padding-bottom: 80px;
        }
        .visi{
            position: relative;

        }

        .btn{
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            margin-top: 20px;
            border-radius: 0;
            height: 80px;
            width: 95%;
            line-height: 65px;
            font-size: 30px;
           
        }

        .img{
            width: 300px;
            height: 340px;
        }

        .back{
                margin-top: 120px;
            }

        @media only screen and ( max-width : 768px){
            .img{
                width: 100%;
                height: 500px;
            }
            
            .pilih{
                width: 95%;
                margin-bottom: 40px;
                height: 40px;
                bottom: -80px;
                font-size: 18px;
                line-height: normal;
                
            }

            
            .back{
                margin-top: 60px;
                width: 95%;
                margin-bottom: 50px;
                height: 40px;
                font-size: 18px;
                line-height: normal;
            }

            .row{
                margin-top: 0;
                padding:10px;
                padding-bottom: 180px;
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
                            img.style.backgroundPosition = 'center center'
                        })
                    }

                    render_image();
                }
    </script>