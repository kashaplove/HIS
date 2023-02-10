<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert(
            [
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "dashamulrishtaya", 'name_sinhala' => "1", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "draksharishtaya", 'name_sinhala' => "2", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "nimbarishtaya", 'name_sinhala' => "3", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "balarishtaya", 'name_sinhala' => "4", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "musthakarishtaya", 'name_sinhala' => "5", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "abhayarishtaya", 'name_sinhala' => "6", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "amurtharishtaya", 'name_sinhala' => "7", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "ashwagandharishtaya", 'name_sinhala' => "8", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "ashokarishtaya", 'name_sinhala' => "9", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "arjunarishtaya", 'name_sinhala' => "10", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'arishta',"type_sinhala"=>'අරිෂ්ඨ','name_english' => "badirarishtaya", 'name_sinhala' => "11", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'ආසව','name_english' => "aravindasawaya", 'name_sinhala' => "12", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'ආසව','name_english' => "chandanasawaya", 'name_sinhala' => "13", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'ආසව','name_english' => "kanakasawaya", 'name_sinhala' => "14", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'ආසව','name_english' => "lauhasawaya", 'name_sinhala' => "15", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'ආසව','name_english' => "pippalyadyasawaya", 'name_sinhala' => "16", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'ආසව','name_english' => "punarnawasawaya", 'name_sinhala' => "17", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'ආසව','name_english' => "sharibhadsawaya", 'name_sinhala' => "18", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'ආසව','name_english' => "ushirasawaya", 'name_sinhala' => "19", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'Āsava',"type_sinhala"=>'ආසව','name_english' => "chirabilwa kwathaya", 'name_sinhala' => "20", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cyrup',"type_sinhala"=>'සිරප්','name_english' => "wasaka sirap", 'name_sinhala' => "21", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cyrup',"type_sinhala"=>'සිරප්','name_english' => "maduka kassa paniya", 'name_sinhala' => "22", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cyrup',"type_sinhala"=>'සිරප්','name_english' => "sidhdhajiwa wartha", 'name_sinhala' => "23", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "bhashkara lawana churnaya", 'name_sinhala' => "24", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "dhathri churnaya", 'name_sinhala' => "25", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "dashangalepa churnaya", 'name_sinhala' => "26", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "katphaladi churnaya", 'name_sinhala' => "27", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "hinguwashtaka churnaya", 'name_sinhala' => "28", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "manibadhra churnaya", 'name_sinhala' => "29", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "manjanesruk (Toothpaste)", 'name_sinhala' => "30", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "pushyanunga churnaya", 'name_sinhala' => "31", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "sudarshana churnaya", 'name_sinhala' => "32", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "thalisadi churnaya", 'name_sinhala' => "33", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "awipaththikara churnaya", 'name_sinhala' => "34", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "sithophaladi churnaya", 'name_sinhala' => "35", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "wajrakshara churnaya", 'name_sinhala' => "36", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "thriphala churnaya", 'name_sinhala' => "37", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "sukumara churnaya", 'name_sinhala' => "38", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "chirabilwa churnaya", 'name_sinhala' => "39", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'cūrṇa',"type_sinhala"=>'චූර්ණ','name_english' => "ashwagandha churnaya", 'name_sinhala' => "40", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'වටී/ගුග්ගුළු','name_english' => "chandraprabha wati", 'name_sinhala' => "41", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'වටී/ගුග්ගුළු','name_english' => "gokshuradi guggulu", 'name_sinhala' => "42", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'වටී/ගුග්ගුළු','name_english' => "kaishoraka guggulu", 'name_sinhala' => "43", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'වටී/ගුග්ගුළු','name_english' => "yogaraja guggulu", 'name_sinhala' => "44" , 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'වටී/ගුග්ගුළු','name_english' => "jiwananda wati", 'name_sinhala' => "45", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'වටී/ගුග්ගුළු','name_english' => "sitharama wati", 'name_sinhala' => "46", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'වටී/ගුග්ගුළු','name_english' => "suranchidura wati", 'name_sinhala' => "47", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'වටී/ගුග්ගුළු','name_english' => "sarpagandha wati", 'name_sinhala' => "48", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'වටී/ගුග්ගුළු','name_english' => "krimghathani wati", 'name_sinhala' => "49", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'gugguḷu',"type_sinhala"=>'වටී/ගුග්ගුළු','name_english' => "arogya wardhana wati", 'name_sinhala' => "50", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'රස බෙහෙත්','name_english' => "mruthunjaya rasa", 'name_sinhala' => "51", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'රස බෙහෙත්','name_english' => "ramhana rasa", 'name_sinhala' => "52", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'රස බෙහෙත්','name_english' => "swasa kutara rasa", 'name_sinhala' => "53", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'රස බෙහෙත්','name_english' => "thribhuwana kirthi rasa", 'name_sinhala' => "54" , 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'රස බෙහෙත්','name_english' => "wathagajendrasinha rasa", 'name_sinhala' => "55", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'රස බෙහෙත්','name_english' => "somanatha rasa", 'name_sinhala' => "56", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'රස බෙහෙත්','name_english' => "punarnawadi wanpura rasa", 'name_sinhala' => "57", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'sweets',"type_sinhala"=>'රස බෙහෙත්','name_english' => "nithyananda rasa", 'name_sinhala' => "58", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'other',"type_sinhala"=>'වෙනත්','name_english' => "medaharani kwathaya", 'name_sinhala' => "59", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'other',"type_sinhala"=>'වෙනත්','name_english' => "deniba debatu", 'name_sinhala' => "60", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'other',"type_sinhala"=>'වෙනත්','name_english' => "madhumebha harani", 'name_sinhala' => "61", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "budhdharaja kalkaya", 'name_sinhala' => "62", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "desadun kalkaya", 'name_sinhala' => "63", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "nawarathna kalkaya", 'name_sinhala' => "64", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "sharkaradi kalkaya", 'name_sinhala' => "65", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "roganikash lepaya", 'name_sinhala' => "66", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "lakshadi lepaya", 'name_sinhala' => "67", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "wachanaprasawaya lepaya", 'name_sinhala' => "68", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "chandra kalkaya", 'name_sinhala' => "69", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "wasawa lepaya", 'name_sinhala' => "70", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "kushmanda kawa lepaya 400g", 'name_sinhala' => "71", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'pulp',"type_sinhala"=>'කල්ක','name_english' => "welwa chengayam 400g", 'name_sinhala' => "72", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "batu thailaya", 'name_sinhala' => "73", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "kolasheleshmadi", 'name_sinhala' => "74", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "bhrunga malaka", 'name_sinhala' => "75", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "narayana thailaya", 'name_sinhala' => "76", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "nilyadi thailaya", 'name_sinhala' => "77", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "nirgundyadi", 'name_sinhala' => "78", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "pata thailaya", 'name_sinhala' => "79", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "pinda thailaya", 'name_sinhala' => "80", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "pinas thailaya", 'name_sinhala' => "81", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "sarshapadi thailaya", 'name_sinhala' => "82", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "watha widuranga thailaya", 'name_sinhala' => "83", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "wisharpahara thailaya", 'name_sinhala' => "84", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "thriphala thailaya", 'name_sinhala' => "85", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "irimedadi thailaya", 'name_sinhala' => "86", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "bakuchi thailaya", 'name_sinhala' => "87", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "sithodaka thailaya", 'name_sinhala' => "88", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "sidhdhartha thailaya", 'name_sinhala' => "89", 'qty' => '1'],
                ["updated_at"=>Carbon::now()->toDateTimeString(),"created_at"=>Carbon::now()->toDateTimeString(),"type_english"=>'nostrum',"type_sinhala"=>'තෛල','name_english' => "sarwawishadi thailaya", 'name_sinhala' => "90", 'qty' => '1'],


        ]);
    }
}
