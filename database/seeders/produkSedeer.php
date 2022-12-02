<?php

namespace Database\Seeders;

use App\Models\produk;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class produkSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['img'=>'single6.png', 'name'=>'cadbury caramilk', 'price'=>'Rp.20', 'stock'=>100, 'desc'=>'Rich dark chocolate ', 'cathegory'=>1],
            ['img'=>'single8.png', 'name'=>'cadbury crunchie', 'price'=>'Rp.20', 'stock'=>100, 'desc'=>'A chunky, gold bar ', 'cathegory'=>1],
            ['img'=>'single9.png', 'name'=>'cadbury curlywurly', 'price'=>'Rp.20', 'stock'=>100, 'desc'=>'Chewy and curly, wavy ', 'cathegory'=>1],
            ['img'=>'single10.png', 'name'=>'cadbury darkmilk', 'price'=>'Rp.20', 'stock'=>100, 'desc'=>'The richest chocolate ', 'cathegory'=>1],
            ['img'=>'single11.png', 'name'=>'doubledecker', 'price'=>'Rp.20', 'stock'=>100, 'desc'=>'combination crispy cereal ', 'cathegory'=>1],
            ['img'=>'single15.png', 'name'=>'cadbury wispa', 'price'=>'Rp.20', 'stock'=>100, 'desc'=>'yet intensely chocolatey ', 'cathegory'=>1],
            ['img'=>'single3.png', 'name'=>'cadbury boost', 'price'=>'Rp.20', 'stock'=>100, 'desc'=>'Everyones favourite finger ', 'cathegory'=>1],
            ['img'=>'single12.png', 'name'=>'cadbury picnic', 'price'=>'Rp.20', 'stock'=>100, 'desc'=>'creation of crispy wafer ', 'cathegory'=>1],
           
            ['img'=>'blok13.png', 'name'=>'dairlymilk medley', 'price'=>'Rp.40', 'stock'=>100, 'desc'=>'scrumptious fudge pieces ', 'cathegory'=>2],
            ['img'=>'blok18.png', 'name'=>'cadbury choped', 'price'=>'Rp.40', 'stock'=>100, 'desc'=>'filled with hazelnuts ', 'cathegory'=>2],
            ['img'=>'blok19.png', 'name'=>'cadbury doope', 'price'=>'Rp.40', 'stock'=>100, 'desc'=>'scattered with golden chunks ', 'cathegory'=>2],
            ['img'=>'blok1.png', 'name'=>'cadbury caramilk', 'price'=>'Rp.40', 'stock'=>100, 'desc'=>'crafted by golden chocolate ', 'cathegory'=>2],
            ['img'=>'blok4.png', 'name'=>'cadbury white', 'price'=>'Rp.40', 'stock'=>100, 'desc'=>'dreamiest white chocolate ', 'cathegory'=>2],
            ['img'=>'blok6.png', 'name'=>'cadbury whiteoreo', 'price'=>'Rp.40', 'stock'=>100, 'desc'=>'flavour filling Oreo pieces ', 'cathegory'=>2],
            ['img'=>'blok5.png', 'name'=>'cadbury less sugar', 'price'=>'Rp.40', 'stock'=>100, 'desc'=>'cadbury with 30% less sugar ', 'cathegory'=>2],
            ['img'=>'blok7.png', 'name'=>'cadbury big taste oreo', 'price'=>'Rp.40', 'stock'=>100, 'desc'=>'A big-taste chocolate bar ', 'cathegory'=>2],
           
            ['img'=>'bgbx15.png', 'name'=>'twirl bites', 'price'=>'Rp.35', 'stock'=>100, 'desc'=>'Terrifically twirlyscrumptiously', 'cathegory'=>3],
            ['img'=>'bgbx2.png', 'name'=>'boots bites', 'price'=>'Rp.35', 'stock'=>100, 'desc'=>'built to boost a night in', 'cathegory'=>3],
            ['img'=>'bgbx7.png', 'name'=>'curlywurly', 'price'=>'Rp.35', 'stock'=>100, 'desc'=>'Chewy wavy and wurly!', 'cathegory'=>3],
            ['img'=>'bgbx6.png', 'name'=>'crunchie rock', 'price'=>'Rp.35', 'stock'=>100, 'desc'=>'Chunky of crunchy golden', 'cathegory'=>3],
            ['img'=>'bgbx8.png', 'name'=>'dinkly deker', 'price'=>'Rp.35', 'stock'=>100, 'desc'=>'Shareable squares of crispy ', 'cathegory'=>3],
            ['img'=>'bgbx9.png', 'name'=>'eclairs velvet', 'price'=>'Rp.35', 'stock'=>100, 'desc'=>'indulgently chocolatey centre', 'cathegory'=>3],
            ['img'=>'bgbx12.png', 'name'=>'fudge minis', 'price'=>'Rp.35', 'stock'=>100, 'desc'=>'mini fudge, mega fun', 'cathegory'=>3],
            ['img'=>'bgbx14.png', 'name'=>'picnis bites', 'price'=>'Rp.35', 'stock'=>100, 'desc'=>'tasty treats by the bagful', 'cathegory'=>3],

            ['img'=>'d2.png', 'name'=>'Hot Chocolate', 'price'=>'Rp.10', 'stock'=>100, 'desc'=>'The favourite hot chocolate', 'cathegory'=>4],
            ['img'=>'d3.png', 'name'=>'Choc Shake', 'price'=>'Rp.10', 'stock'=>100, 'desc'=>'refreshingly smooth Milkshake', 'cathegory'=>4],
            ['img'=>'d6.png', 'name'=>'Dark Chocolate', 'price'=>'Rp.10', 'stock'=>100, 'desc'=>'The deliciously chocolate', 'cathegory'=>4],
            ['img'=>'d7.png', 'name'=>'Highlights Fudge', 'price'=>'Rp.10', 'stock'=>100, 'desc'=>'with only 38 calories per cup ', 'cathegory'=>4],
            ['img'=>'d1.png', 'name'=>'Bournville ', 'price'=>'Rp.10', 'stock'=>100, 'desc'=>'flavour from the beans', 'cathegory'=>4],
            ['img'=>'d8.png', 'name'=>'Milk Chocolate', 'price'=>'Rp.10', 'stock'=>100, 'desc'=>'milk-chocolatey Cadbury', 'cathegory'=>4],
            ['img'=>'d9.png', 'name'=>'coclate Instant', 'price'=>'Rp.10', 'stock'=>100, 'desc'=>'Hot Chocolate Instant Fairtrade', 'cathegory'=>4],
            ['img'=>'d10.png', 'name'=>'Wispa Drinking', 'price'=>'Rp.10', 'stock'=>100, 'desc'=>'delightfully velvety smooth', 'cathegory'=>4],

            ['img'=>'c12.png', 'name'=>'fabolous finger', 'price'=>'Rp.15', 'stock'=>100, 'desc'=>'Fabulously fingers of crispy biscuit', 'cathegory'=>5],
            ['img'=>'c18.png', 'name'=>'whitefinger', 'price'=>'Rp.15', 'stock'=>100, 'desc'=>'covered in white chocolate! ', 'cathegory'=>5],
            ['img'=>'c13.png', 'name'=>'orange finger', 'price'=>'Rp.15', 'stock'=>100, 'desc'=>'Crisp Orange flavoured', 'cathegory'=>5],
            ['img'=>'c2.png', 'name'=>'Bournville Fingers', 'price'=>'Rp.15', 'stock'=>100, 'desc'=>'Fantastically fun fingers of crispy biscuit', 'cathegory'=>5],
            ['img'=>'c10.png', 'name'=>'Cookies Choc Chip', 'price'=>'Rp.15', 'stock'=>100, 'desc'=>'Crunchy cookies with delicious Cadbury', 'cathegory'=>5],
            ['img'=>'c11.png', 'name'=>'Crunchy Melts Oreo', 'price'=>'Rp.15', 'stock'=>100, 'desc'=>'indulgent vanilla Oreo Creme ', 'cathegory'=>5],
            ['img'=>'c25.png', 'name'=>'Roundie Milk Chocolate', 'price'=>'Rp.15', 'stock'=>100, 'desc'=>'Delightfully crispy wafer layers ', 'cathegory'=>5],
            ['img'=>'c17.png', 'name'=>'Roundie White Chocolate', 'price'=>'Rp.15', 'stock'=>100, 'desc'=>'deliciously Cadbury white chocolate', 'cathegory'=>5],
            //contoh klau dtany banyak : ['nama'=>'xi pplg 1','alamat'=>'dpk'],
    ];
    
    foreach ($data as $item ) {
        produk::insert([
             // produk=nama model
            'img' => $item['img'],
            'name' => $item['name'],
            'price' => $item['price'],
            'stock' => $item['stock'],
            'desc' => $item['desc'],
            'cathegory_id' => $item['cathegory'],
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);                                      
    }
    }
}
