<?php

use Illuminate\Database\Seeder;
use App\Code;


class CodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Code::create(['name'=>'EAN2', 'codetype_id'=>'1']);
        Code::create(['name'=>'EAN5', 'codetype_id'=>'2']);
        Code::create(['name'=>'EAN8', 'codetype_id'=>'3']);
        Code::create(['name'=>'EAN13', 'codetype_id'=>'4']);

        Code::create(['name'=>'C128', 'codetype_id'=>'5']);
        Code::create(['name'=>'C128A', 'codetype_id'=>'6']);
        Code::create(['name'=>'C128B', 'codetype_id'=>'7']);
        Code::create(['name'=>'C128C', 'codetype_id'=>'8']);

        Code::create(['name'=>'CODABAR', 'codetype_id'=>'9']);
        
        Code::create(['name'=>'C39', 'codetype_id'=>'10']);
        Code::create(['name'=>'C39+', 'codetype_id'=>'11']);
        Code::create(['name'=>'C39E', 'codetype_id'=>'12']);
        Code::create(['name'=>'C39E+', 'codetype_id'=>'13']);
        Code::create(['name'=>'C93', 'codetype_id'=>'14']);

        Code::create(['name'=>'S25', 'codetype_id'=>'16']);
        Code::create(['name'=>'S25+', 'codetype_id'=>'17']);

        Code::create(['name'=>'I25', 'codetype_id'=>'18']);
        Code::create(['name'=>'I25+', 'codetype_id'=>'19']);
        
        
        Code::create(['name'=>'UPCA', 'codetype_id'=>'20']);
        Code::create(['name'=>'UPCE', 'codetype_id'=>'21']);

        Code::create(['name'=>'MSI', 'codetype_id'=>'22']);
        Code::create(['name'=>'MSI+', 'codetype_id'=>'23']);

        Code::create(['name'=>'POSTNET', 'codetype_id'=>'24']);

        Code::create(['name'=>'PLANET', 'codetype_id'=>'25']);

        Code::create(['name'=>'RMS4CC', 'codetype_id'=>'26']);

        Code::create(['name'=>'KIX', 'codetype_id'=>'27']);

        Code::create(['name'=>'IMB', 'codetype_id'=>'28']);
        
        Code::create(['name'=>'CODE11', 'codetype_id'=>'29']);

        Code::create(['name'=>'PHARMA', 'codetype_id'=>'30']);

        Code::create(['name'=>'PHARMA2T', 'codetype_id'=>'31']);
    }
}
