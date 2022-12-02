@extends('layout.lp')



@section('content')
<div class="home" id="home">
    <div class="smua">
        <div class="kiri ">
            <div class="jdl font-extrabold text-[50px] text-white w-[445px] mt-[85px] font-raleway ml-2"><h1>Welcome to the home cadbury</h1></div>
            <div class="teks w-[320px] font-light  text-[16px] ml-2"><p>We're sharing a doubt on our bars to help young people overcome theirs. Young people are so affected by doubt.</p></div>
        </div>

        <div class="kanan mt-7">
            <img src="https://images.sweetauthoring.com/product/58007.png" alt="" width="550px">
        </div>
    </div>

    <div class="adatiga">
        <div class="satu">
            <img src="https://images.sweetauthoring.com/product/100047.png" alt="" width="96px">
            <h5 class="font-bold text-sm">Our Creation</h5>
            <p>View Our recipes rounge of cadbury </p>
        </div>
        <div class="dua">
            <img src="https://images.sweetauthoring.com/product/97994.png" alt="" width="146px">
            <h5 class="font-bold text-sm mt-2" >Cadbury Gift</h5>
            <p>View Our recipes rounge of cadbury </p>
        </div>
        <div class="tiga">
            <img src="https://images.sweetauthoring.com/product/85547.png" alt="" width="46px">
            <h5 class="font-bold text-sm ">Our product</h5>
            <p>View Our recipes rounge of cadbury </p>
        </div>
    </div>
    <img src="img/glass.png" alt="" class="gelas" width="70px">
    <img src="img/wavewhite.png" alt="" width="1354px" class="yy">
</div>

 <div class="about" id="about">
    <div class="kiri">
        <p class="font-bold text-3xl mb-5 text-zinc-900">Our Story</p>
        <p class="font-light text-[14px]">We've been inventing, inspiring and investing in a nation of chocolate lovers for nearly 200 years. Delve into the company's fascinating history and you'll find a wealth of interesting facts and information on subjects including how the nation's favourite chocolate was born, the Cadbury family, packaging, and so much more! Just click on a time period and you'll be taken back in time - explore the general history of Cadbury or find out more about a particular aspect of the business.</p>
    </div>
    <div class="kanan">
        <img src="https://www.cadbury.co.uk/~/media/cadburydev/uk/images/primary/story/splash-bg.jpg" alt="" width="280px">
    </div>
</div>

<div class="product" id="product">
    <p class="font-bold text-[33px] ml-[540px] text-white mt-6 inline-block">Best Product</p>
    <div class="slider">
        <div class="slides">
         
          <input type="radio" name="radio-btn" id="radio1">
          <input type="radio" name="radio-btn" id="radio2">
          <input type="radio" name="radio-btn" id="radio3">
          <input type="radio" name="radio-btn" id="radio4">
         
          <div class="slide first">
            <img src="https://images.sweetauthoring.com/product/85564.png" alt="" width="260px" >
            <center><h2>Curlywurly</h2></center>
          </div>
          <div class="slide">
            <img src="https://images.sweetauthoring.com/product/80793.png" width="260px">
            <center><h2>Picnic Bites</h2></center>
          </div>
          <div class="slide">
            <img src="https://images.sweetauthoring.com/product/80795.png" width="260px">
            <center><h2>Cramel Ribble</h2></center>
          </div>
          <div class="slide">
            <img src="https://images.sweetauthoring.com/product/85557.png" width="260px">
            <center><h2>Twirl Bites</h2></center>
          </div>
         
          <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
          </div>
        
        </div>
       
        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
          <label for="radio4" class="manual-btn"></label>
        </div>
        
    </div>
   <a href="/product">all product</a>
</div>

<img src="img/waverecipes.png" alt="" width="1354px" class="rc">

<div class="recipes" id="recipes">
    <div class="text">
        <p class="font-bold text-[33px] ml-[530px] text-white">Our Creation</p >
    </div>

    <div class="recipesisi">
        <div class="ya">
            <img src="https://images.sweetauthoring.com/recipe/249776_1989.jpg" >
            <div class="layer">
                <h5>Creme Egg Tray Bake </h5>
                <p>175 g baking spread (Stork)
                    175 g caster sugar
                    3 eggs
                    150 g self raising flour </p>
            </div>
        </div>

        <div class="ya">
            <img src="https://images.sweetauthoring.com/recipe/356817_1989.jpg">
            <div class="layer">
                <h5>Mini Eggs Jolly Pops </h5>
                <p>16 Cadbury Mikado milk chocolate biscuit sticks (half a 75 g box)</p>
            </div>
        </div>

        <div class="ya">
            <img src="https://images.sweetauthoring.com/recipe/270443_1989.jpg">
            <div class="layer">
                <h5>Milk Tray Bake</h5>
                <p>1 piece Milk Tray box
                    1 piece Chocolate Cake Mix
                    3 pieces eggs </p>
            </div>
        </div>
    </div>

    <br><br><br><a href="/creation">all Creation</a>
    
</div>

@endsection