
</head>
<body>

<!-- dhuwur -->
<div class="top-bar justify-content-left fixed-top text-white" style="display:flex; width: 100% ; height: 70px;  background: #081B33;">
                <div class="atas"><div class="image" ></div>    <h3 class="ml-2" style="line-height:70px;"> SMEA-PILKETOS</h3> </div>
            </div>


<div class="container ">
    <form class="justify-content-center" method="post" action="<?= base_url(); ?>user/login" >

        <h2 class=" text-center" style="font-weight: 400;">Login User</h2>
            <p class="mb-4 text-center token" >silahkan masukkan token anda</p>
     
        <?php if( $this->session->flashdata('login_salah') ) :?>
            <div class="alert alert-danger" role="alert" style="width: 100%;">
                  <?= $this->session->flashdata('login_salah');?>
            </div>
         <?php endif;?>
        <div class="input-group mb-3">

            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
            </div>
  <input type="text" class="form-control" placeholder="masukkan token anda" name="token" id="token" aria-label="Username" aria-describedby="basic-addon1">
</div>



    <button class="btn btn-primary mx-auto" name="submit" id="submit" type="submit">Login</button>
    </form>

    
 </div>
 

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
         font-family: 'poppins', sans-serif;
     }
     
     input{
         width: 80%;
     }

     form{
         
         margin-top: 17%;
         margin-left: auto;
         margin-right: auto;
         background: #fff;
         width: 600px;
         padding: 40px;
         padding-top: 40px;
         padding-bottom: 50px;
     }

     button{
         
         width: 100%;
         margin-top: 0px;
         padding-top: 30px;
         height: 45px;
     }

     /* token paragraph */
     
     /* top nav */
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
            form{
                width: 80%;
                padding: 20px;
                padding-top: 40px;
                padding-bottom: 50px;
                margin-top: 30%;
                font-weight: normal;
            }
            button{
                position: static;
                transform: translate(0,0);
            }
    
            .token{
            font-size: 14px;
            }
        }
        
        </style>