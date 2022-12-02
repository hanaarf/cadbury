@extends('layout.lp')

@section('content')

<h1 class="text-white font-bold ml-[580px] text-3xl mb-24">Our Recipes</h1>

<div class="flex h-[200px] gap-12 ml-[60px] mb-72">
        <div  class="rounded-lg h-[200px] ml-7 " >
            <img src="{{ 'https://images.sweetauthoring.com/recipe/357008_1989.jpg' }}" alt="" width="220px" class="rounded-lg">
            <p class="text-white font-medium opacity-50 text-sm ml-11 mt-6 mb-4"> Prep time 40 MINS <br>
                Chill time 120 MINS <br>
            </p>
            <a href="" style="color: white ; border: 3px solid white; border-radius: 30px; padding: 10px 25px; margin-top: 10px; display: inline-block ;"  class="text-sm hover:bg-[#79667e]">Creme Egg Easter Hunt</a>
        </div>

        <div  class=" rounded-lg h-[200px] ml-7 " >
            <img src="{{ 'https://images.sweetauthoring.com/recipe/356880_1989.jpg' }}" alt="" width="220px" class="rounded-lg" >
            <p class="text-white font-medium opacity-50 text-sm ml-11 mt-6 mb-4">  Prep time 20 MINS <br>
                Chill time 30 MINS <br>
            </p>
            <a href="/" style="color: white ; border: 3px solid white; border-radius: 30px; padding: 10px 25px; margin-top: 10px; display: inline-block ;"  class="text-sm hover:bg-[#79667e]"> Mini Eggs Happy Nesters  </a>
        </div>

        <div  class="rounded-lg h-[250px] ml-7" >
            <img src="{{ 'https://images.sweetauthoring.com/recipe/356879_1989.jpg' }}" alt="" width="220px" class="rounded-lg">
            <p class="text-white font-medium opacity-50 text-sm ml-11 mt-6 mb-4">   Prep time 20 MINS <br>
                 Cook time 50 MINS <br>
            </p>
            <a href="" style="color: white ; border: 3px solid white; border-radius: 30px; padding: 10px 25px; margin-top: 10px; display: inline-block ; margin-left: 10px"  class="text-sm hover:bg-[#79667e]"> Creme Egg On Toast   </a>
        </div>

        <div  class="rounded-lg h-[250px] ml-7 " >
            <img src="{{ 'https://images.sweetauthoring.com/recipe/356878_1989.jpg' }}" alt="" width="220px" class="rounded-lg">
            <p class="text-white font-medium opacity-50 text-sm ml-11 mt-6 mb-4"> Prep time 20 MINS <br>
                Chill time 30 MINS <br>
            </p>
            <a href="" style="color: white ; border: 3px solid white; border-radius: 30px; padding: 10px 25px; margin-top: 10px; display: inline-block ;"  class="text-sm hover:bg-[#79667e]"> Mini Eggs Happy Nesters  </a>
        </div>
</div>

<div class="flex h-[200px] gap-12 ml-[60px] mb-[500px]">
    <div  class="rounded-lg h-[200px] ml-7 " >
        <img src="{{ 'https://images.sweetauthoring.com/recipe/356822_1989.jpg' }}" alt="" width="220px" class="rounded-lg">
        <p class="text-white font-medium opacity-50 text-sm ml-11 mt-6 mb-4">  Prep time 25 MINS <br>
            Freeze time 240 MINS <br>
        </p>
        <a href="" style="color: white ; border: 3px solid white; border-radius: 30px; padding: 10px 25px; margin-top: 10px; display: inline-block ; margin-left: 15px"  class="text-sm hover:bg-[#79667e]"> Ice Creme Cones </a>
    </div>

    <div  class=" rounded-lg h-[200px] ml-7 " >
        <img src="{{ 'https://images.sweetauthoring.com/recipe/356817_1989.jpg' }}" alt="" width="220px" class="rounded-lg" >
        <p class="text-white font-medium opacity-50 text-sm ml-11 mt-6 mb-4">  Prep time 20 MINS <br>
            Chill time 30 MINS <br>
        </p>
        <a href="/" style="color: white ; border: 3px solid white; border-radius: 30px; padding: 10px 25px; margin-top: 10px; display: inline-block ; ; margin-left: 15px"  class="text-sm hover:bg-[#79667e]"> Mini Eggs Jolly Pops   </a>
    </div>

    <div  class="rounded-lg h-[250px] ml-7" >
        <img src="{{ 'https://images.sweetauthoring.com/recipe/270443_1989.jpg' }}" alt="" width="220px" class="rounded-lg">
        <p class="text-white font-medium opacity-50 text-sm ml-11 mt-6 mb-4">   Prep time 10 MINS <br>
             Cook time 20 MINS <br>
        </p>
        <a href="" style="color: white ; border: 3px solid white; border-radius: 30px; padding: 10px 25px; margin-top: 10px; display: inline-block ; margin-left: 25px"  class="text-sm hover:bg-[#79667e]"> 
            Milk Tray Bake
              </a>
    </div>

    <div  class="rounded-lg h-[250px] ml-7 " >
        <img src="{{ 'https://images.sweetauthoring.com/recipe/249776_1989.jpg' }}" alt="" width="220px" class="rounded-lg">
        <p class="text-white font-medium opacity-50 text-sm ml-11 mt-6 mb-4"> Prep time 10 MINS<br>
            Cook time 30 MINS <br>
        </p>
        <a href="" style="color: white ; border: 3px solid white; border-radius: 30px; padding: 10px 25px; margin-top: 10px; display: inline-block ;  margin-left: 15px"  class="text-sm hover:bg-[#79667e]  "> 
            Creme Egg Tray Bake
              </a>
    </div>
</div>

  
@endsection