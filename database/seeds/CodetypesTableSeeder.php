<?php

use Illuminate\Database\Seeder;
use App\Codetype;


class CodetypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Codetype::create(['type'=>1,'name'=>'EAN, UPC','Desc'=>'Numeric values(0 to 9)only, 13 digits or 8 digits,']);
        Codetype::create(['type'=>2,'name'=>'ITF','Desc'=>'Numeric values(0 to 9)only, Even digits only']);
        Codetype::create(['type'=>3,'name'=>'Code39','Desc'=>'Numeric values(0 to 9)only, Alphabet,Symbol(-,.,space,$,/,+,%), Start/stop character(*:asterisk)']);
        Codetype::create(['type'=>4,'name'=>'Codabar','Desc'=>'Numeric values(0 to 9), Symbol(-,$,/,.,+), Start/stop character(a to d)']);
        Codetype::create(['type'=>5,'name'=>'Code128','Desc'=>'All ASCI codes, Numeric values(0 to 9), Alphabet, upper case/lower case Symbol, Control character, (［CR］［STX］etc.)']);

    }
}
