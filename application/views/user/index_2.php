<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<body>
<!-- dhuwur -->
<div class="top-bar justify-content-left fixed-top text-white" style="display:flex; width: 100% ; height: 70px;  background: #081B33;">
                <div class="atas"><div class="image" ></div>    <h3 class="ml-2" style="line-height:70px;"> SMEA-PILKETOS</h3> </div>
</div>


    <div class="container">
    <h2 style="margin-top: 100px;">Pilih Kandidat Ketua Kelas 10</h2>
            <hr>
        <div class="content-container">
           
            <?php foreach($ketua_1 as $daftar): ?>
                <div class="card  border-0 shadow-sm" style="width: 18rem;" data-aos='fade-right'>
                <div bg-img="<?= base_url();?>/assets/resources/kandidat/<?= $daftar['foto'];?>" class="card-img-top img" > </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $daftar['nama']; ?></h5>
                    <p class="card-text"><?= $daftar['kelas'];?></p>

                    <div id="collapse" style="display: none;">
                        <p ><?= $daftar['visi']?></p>
                    </div>

                    <a href="<?= base_url();?>user/detail_ketua_2/<?= $daftar['id']; ?>" class="btn btn-success">pilih</a>
                </div>
                </div>
            <?php endforeach;?>

        </div>
    </div>

<!-- footer -->
<footer class=" justify-content-center text-center " style="padding: 20px; width:100%; background: #f0f8ff;">
    <div class="footer-container" >
        <div class="social-media">
        <h6 class="text-body mt-4" ><i class="far fa-copyright"></i> Komunitas <span style="color: #2ab7ca ;"> Teknik Informatika </span> </h6>
            <a href="http://facebook.com"><i class="fab fa-facebook-square text-dark mr-3"></i></a>
            <a href="http://instagram.com"><i class="fab fa-instagram text-dark"></i></a>
        </div>
    </div>
</footer>

<style>
    body{
        background: #f0f8ff;
        font-family: 'poppins' , sans-serif;
    }

    .content-container{
        margin-top: 70px;
        display: flex;
    }

    .img{
        width: 100%;
        height: 270px;
    }
    .card{
        position: relative;
        padding-bottom: 40px;
        margin-left: 20px;
    }

    .btn{
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 90%;
        bottom: 20px;
    }

    /* style untuk atas */
    .atas{
        margin-right:auto;
        margin-left: auto;
        display: flex;
        }

    .image{
        height: 30px;
        width: 30px;
        background-image: url('<?= base_url(); ?>assets/resources/home/smk.png');
        background-position: center center;
        background-size: cover;
        margin-top: auto;
        margin-bottom: auto;
    
                
            }

    @media only screen and ( max-width : 768px){
        .content-container{
            display: flex;
            flex-direction: column;
            margin: auto;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .card{
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: auto !important;
            margin-right: auto !important;
        }
    }
</style>

    <script>

        AOS.init({
            duration : 600,
            once : true,
            delay: 200
        });
        window.onload = function(){
            const render_image = () => {
                let image = document.querySelectorAll('.img');
                image.forEach( img => {
                    let bg_img = img.getAttribute('bg-img');
                    img.style.backgroundImage = `url('${bg_img}')`;
                    img.style.backgroundPosition = 'center 10%';
                    img.style.backgroundSize = 'cover';
                } )
            }

            render_image();
        }
    </script>

