

</head>
<?php 

    function kode($leng){
        $kode_kehadiran = '';

        $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        for($i = 0 ; $i <  $leng; $i++ ){
            $pos = rand( 0 , strlen($char)-1);
            $kode_kehadiran .= $char[$pos]; 
        }

        return $kode_kehadiran;
    }
       

?>




<body >
<div class="top-bar justify-content-left fixed-top text-white" style="display:flex; width: 100% ; height: 70px;  background: #081B33;">
                <div class="atas"><div class="image" ></div>    <h3 class="ml-2" style="line-height:70px;"> SMEA-PILKETOS</h3> </div>
</div>


    <div class="container ">
        <div class="content " >
            <h2><i class="far fa-check-circle mr-1 text-success"></i>Terima Kasih sudah memilih</h2>
            <p>ini kode kehadiran anda</p>

            <br>

            <h3 style="padding: 20px; width:300px; background:#ededed; margin:0 auto;"><?= kode(10); ?></h3>
             <br>
            <a href="<?= base_url(); ?>" >Kembali ke home</a>
        </div>


        
    </div>


    <footer class=" justify-content-center  text-center bg-0" style="padding: 20px; width:100%; position:fixed; ">
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
        font-family: 'poppins' , sans-serif;
    }

    h2{
        font-family: Arial, Helvetica, sans-serif;
        font-weight: normal;
    }

    .atas{
        margin-right:auto;
        margin-left: auto;
        display: flex;
        }

    .content{
        text-align: center;
        margin-top: 200px;
    }

    footer{
        bottom:30px;
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

    @media screen and ( max-width:780px){
        .content{
            /* text-align: left; */
            /* margin-left: 20px; */
            margin-top: 35%;
        }

        h2{
            font-size: 28px;
        }
        
        footer{
            bottom:0px;
        }
    }
</style>