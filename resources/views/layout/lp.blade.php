<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    
    <!-- poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- quicksand -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- raleway -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;800&display=swap" rel="stylesheet"> 

    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              clifford: '#da373d',
            },

            fontFamily:{
              raleway:['Raleway'],
            },
          }
        }
      }
    </script>


    <title>cadbury</title>

    <link rel="shortcut icon" href="img/logo.png" />

    
    
</head>
<body >
    <img src="img/wavenav.png" alt="" width="1365px" class="wavenav" >
    <div class="nav">
        <span class="brand"><img src="img/logo.png" alt=""  width="130px" class="absolute mt-[-166px] ml-[20px]" ></span>
        <ul class="ml-[530px] mt-[-158px] absolute flex list-none gap-[30px] text-[17px] font-bold text-white font-poppins" >
          <li class="text-[#C4A977] font-semibold text-[20px] "> <a href="/">Home</a> </li>
          <li><a href="/" class="font-normal mt-1 inline-block">About</a></li>
          <li><a href="/" class="font-normal mt-1 inline-block">Product</a></li>
          <li><a href="/" class="font-normal mt-1 inline-block">Creation</a></li>
        </ul>
    </div>

    @yield('content')

    
    <div class="footer" >
        <img src="img/glass.png" alt=""  width="90px" class="gls">
        <img src="img/wavefooter.png" alt="" width="1354px" class="ftr">
        <div class="leftyh">
            <h1><a href="https://www.cadbury.co.uk/">sitemaps and legal link +</a></h1>
        </div>
        <div class="right">
            <ul>
                <li><i class="fab fa-facebook-f"></i></li>
                <li><i class="fab fa-twitter"></i></li>
                <li><i class="fab fa-instagram"></i></li>
                <li><i class="far fa-envelope"></i></li>
              </ul>
              <p>&copy; Copyright. hana's Community 2022. </p>
        </div>
    </div>


    <script>
        var counter = 1;
        setInterval(function(){
          document.getElementById('radio' + counter).checked = true;
          counter++;
          if(counter > 4){
            counter = 1;
          }
        }, 5000);
    </script> 
</body>
</html>