<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TbagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbags')->insert([
            'tbag_name' => 'PRAVO USNJE',
            'description' => 'Torbica je izdelana iz pravega usnja. Služi shranjevanju 30g tobaka v vrečki, papirčkov in filtrov. Mali žepek se prilega papirčkom in omogoča enostavno jemanje posamičnega pairčka. Torbica se zapre z dvojnim pripogibom in na koncu še z ježkom, ki omogoča prilagajanje debeline glede na vsebino. Izdelek je izdelan v Sloveniji.',
            'img_name' => 'tobak_torbica_tob_tobacnica_pravo_usnje',
            'tbag_price' => 22.70,
            'open_width' => 15,
            'open_heigth' =>21,
            'close_width' => 15,
            'close_heigth' => 7.5,
        ]);

        DB::table('tbags')->insert([
            'tbag_name' => 'COMIC',
            'description' => 'Torbica je izdelana iz blaga s potiskom stripa. Vzorec na blagu je raznolik, zato je vsaka torbica unikatna in se lahko razlikuje od te, ki je na prikazani sliki. Pred pošiljanjem vas bomo seznanili s torbicami, ki so na zalogi. Tobačnica služi shranjevanju 30g tobaka v vrečki, papirčkov in filtrov. Mali žepek se prilega papirčkom in omogoča enostavno jemanje posamičnega pairčka. Torbica se zapre z dvojnim pripogibom in na koncu še z ježkom, ki omogoča prilagajanje debeline glede na vsebino. Izdelek je izdelan v Sloveniji.',
            'img_name' => 'tobak_torbica_tob_tobacnica_comic',
            'tbag_price' => 16.50,
            'open_width' => 15,
            'open_heigth' =>21,
            'close_width' => 15,
            'close_heigth' => 7.5,
        ]);

        DB::table('tbags')->insert([
            'tbag_name' => 'PRAVO USNJE SVETLA',
            'description' => 'Torbica je izdelana iz pravega usnja. Služi shranjevanju 30g tobaka v vrečki, papirčkov in filtrov. Mali žepek se prilega papirčkom in omogoča enostavno jemanje posamičnega pairčka. Torbica se zapre z dvojnim pripogibom in na koncu še z ježkom, ki omogoča prilagajanje debeline glede na vsebino. Izdelek je izdelan v Sloveniji.',
            'img_name' => 'tobak_torbica_tob_tobacnica_usnje_svetla',
            'tbag_price' => 22.70,
            'open_width' => 15,
            'open_heigth' =>21,
            'close_width' => 15,
            'close_heigth' => 7.5,
        ]);

        DB::table('tbags')->insert([
            'tbag_name' => 'USNJE SIVA',
            'description' => 'Torbica je izdelana iz kvalitetnega umetnjega usnja. Služi shranjevanju 30g tobaka v vrečki, papirčkov in filtrov. Mali žepek se prilega papirčkom in omogoča enostavno jemanje posamičnega pairčka. Torbica se zapre z dvojnim pripogibom in na koncu še z ježkom, ki omogoča prilagajanje debeline glede na vsebino. Izdelek je izdelan v Sloveniji.',
            'img_name' => 'tobak_torbica_tob_tobacnica_usnje_siva',
            'tbag_price' => 15.50,
            'open_width' => 15,
            'open_heigth' =>21,
            'close_width' => 15,
            'close_heigth' => 7.5,
        ]);

        DB::table('tbags')->insert([
            'tbag_name' => 'KITTY',
            'description' => 'Torbica s prikupnim potiskom, je izdelana iz tekstila-bombaž. Služi shranjevanju 30g tobaka v vrečki, papirčkov in filtrov. Mali žepek se prilega papirčkom in omogoča enostavno jemanje posamičnega pairčka. Torbica se zapre z dvojnim pripogibom in na koncu še z ježkom, ki omogoča prilagajanje debeline glede na vsebino. Izdelek je izdelan v Sloveniji.',
            'img_name' => 'tobak_torbica_tob_tobacnica_kitty',
            'tbag_price' => 15.50,
            'open_width' => 15,
            'open_heigth' =>21,
            'close_width' => 15,
            'close_heigth' => 7.5,
        ]);

        DB::table('tbags')->insert([
            'tbag_name' => 'SUMMER',
            'description' =>'Torbica je izdelana iz blaga z živahnim potiskom. Vzorec na blagu je prikupno raznolik, zato je vsaka torbica unikatna in se lahko razlikuje od te, ki je na prikazani sliki. Pred pošiljanjem vas bomo seznanili s torbicami, ki so na zalogi. Tobačnica služi shranjevanju 30g tobaka v vrečki, papirčkov in filtrov. Mali žepek se prilega papirčkom in omogoča enostavno jemanje posamičnega pairčka. Torbica se zapre z dvojnim pripogibom in na koncu še z ježkom, ki omogoča prilagajanje debeline glede na vsebino. Izdelek je izdelan v Sloveniji.',
            'img_name' => 'tobak_torbica_tob_tobacnica_summer',
            'tbag_price' => 16.50,
            'open_width' => 15,
            'open_heigth' =>21,
            'close_width' => 15,
            'close_heigth' => 7.5,
        ]);

        DB::table('tbags')->insert([
            'tbag_name' => 'ČASOPIS',
            'description' => 'Vedno trendovska torbica s potiskom časopisa. Kakor časopis, je tudi vzorec na blagu pristno raznolik, zato je vsaka torbica unikatna in se lahko razlikuje od te, ki je na prikazani sliki. Tobačnica služi shranjevanju 30g tobaka v vrečki, papirčkov in filtrov. Mali žepek se prilega papirčkom in omogoča enostavno jemanje posamičnega pairčka. Torbica se zapre z dvojnim pripogibom in na koncu še z ježkom, ki omogoča prilagajanje debeline glede na vsebino. Izdelek je izdelan v Sloveniji.',
            'img_name' => 'tobak_torbica_tob_tobacnica_casopis',
            'tbag_price' => 15.50,
            'open_width' => 15,
            'open_heigth' =>21,
            'close_width' => 15,
            'close_heigth' => 7.5,
        ]);

        DB::table('tbags')->insert([
            'tbag_name' => 'PIKA',
            'description' => 'Torbica s potiskom pik, je izdelana iz blaga. Služi shranjevanju 30g tobaka v vrečki, papirčkov in filtrov. Mali žepek se prilega papirčkom in omogoča enostavno jemanje posamičnega pairčka. Torbica se zapre z dvojnim pripogibom in na koncu še z ježkom, ki omogoča prilagajanje debeline glede na vsebino. Izdelek je izdelan v Sloveniji.',
            'img_name' => 'tobak_torbica_tob_tobacnica_pika',
            'tbag_price' => 15.50,
            'open_width' => 15,
            'open_heigth' =>21,
            'close_width' => 15,
            'close_heigth' => 7.5,
        ]);

        DB::table('tbags')->insert([
            'tbag_name' => 'VINE',
            'description' => 'Tobačnica je potiskana na temo vin. Rahlo rustikalen vzorec na blagu je raznolik, zato je vsaka torbica unikatna in se lahko malo razlikuje od te, ki je na prikazani sliki. Tobačnica služi shranjevanju 30g tobaka v vrečki, papirčkov in filtrov. Mali žepek se prilega papirčkom in omogoča enostavno jemanje posamičnega pairčka. Torbica se zapre z dvojnim pripogibom in na koncu še z ježkom, ki omogoča prilagajanje debeline glede na vsebino. Izdelek je izdelan v Sloveniji.',
            'img_name' => 'tobak_torbica_tob_tobacnica_vine',
            'tbag_price' => 15.50,
            'open_width' => 15,
            'open_heigth' =>21,
            'close_width' => 15,
            'close_heigth' => 7.5,
        ]);

        DB::table('tbags')->insert([
            'tbag_name' => 'SPRING',
            'description' => 'Pisana torbica je izdelana iz blaga z živahnim potiskom. Vzorec na blagu je prikupno raznolik, zato je vsaka torbica unikatna in se lahko razlikuje od te, ki je na prikazani sliki. Pred pošiljanjem vas bomo seznanili s torbicami, ki so na zalogi. Tobačnica služi shranjevanju 30g tobaka v vrečki, papirčkov in filtrov. Mali žepek se prilega papirčkom in omogoča enostavno jemanje posamičnega pairčka. Torbica se zapre z dvojnim pripogibom in na koncu še z ježkom, ki omogoča prilagajanje debeline glede na vsebino. Izdelek je izdelan v Sloveniji.',
            'img_name' => 'tobak_torbica_tob_tobacnica_spring',
            'tbag_price' => 16.50,
            'open_width' => 15,
            'open_heigth' =>21,
            'close_width' => 15,
            'close_heigth' => 7.5,
        ]);

        DB::table('tbags')->insert([
            'tbag_name' => 'USNJE ČRNA',
            'description' => 'Ena izmed najbolj priljubljanih tobačnic je izdelana iz kvalitetnega umetnjega usnja. Služi shranjevanju 30g tobaka v vrečki, papirčkov in filtrov. Mali žepek se prilega papirčkom in omogoča enostavno jemanje posamičnega pairčka. Torbica se zapre z dvojnim pripogibom in na koncu še z ježkom, ki omogoča prilagajanje debeline glede na vsebino. Izdelek je izdelan v Sloveniji.',
            'img_name' => 'tobak_torbica_tob_tobacnica_usnje_crna',
            'tbag_price' => 15.50,
            'open_width' => 15,
            'open_heigth' =>21,
            'close_width' => 15,
            'close_heigth' => 7.5,
        ]);

        DB::table('tbags')->insert([
            'tbag_name' => 'FLOW',
            'description' => 'Tobačnica s trendovskim potiskom, je izdelana iz tekstila-bombaž. Služi shranjevanju 30g tobaka v vrečki, papirčkov in filtrov. Mali žepek se prilega papirčkom in omogoča enostavno jemanje posamičnega pairčka. Torbica se zapre z dvojnim pripogibom in na koncu še z ježkom, ki omogoča prilagajanje debeline glede na vsebino. Izdelek je izdelan v Sloveniji.',
            'img_name' => 'tobak_torbica_tob_tobacnica_flow',
            'tbag_price' => 15.50,
            'open_width' => 15,
            'open_heigth' =>21,
            'close_width' => 15,
            'close_heigth' => 7.5,
        ]);

        DB::table('tbags')->insert([
            'tbag_name' => 'INDI',
            'description' => 'Priljubljena tobačnica s potiskom indi slončov, je izdelana iz prikupnega blaga. Služi shranjevanju 30g tobaka v vrečki, papirčkov in filtrov. Mali žepek se prilega papirčkom in omogoča enostavno jemanje posamičnega pairčka. Torbica se zapre z dvojnim pripogibom in na koncu še z ježkom, ki omogoča prilagajanje debeline glede na vsebino. Izdelek je izdelan v Sloveniji.',
            'img_name' => 'tobak_torbica_tob_tobacnica_indi',
            'tbag_price' => 15.50,
            'open_width' => 15,
            'open_heigth' =>21,
            'close_width' => 15,
            'close_heigth' => 7.5,
        ]);

        DB::table('tbags')->insert([
            'tbag_name' => 'ARMY',
            'description' => 'Vojaška tobačnica, je izdelana iz kamuflažnega blaga. Služi shranjevanju 30g tobaka v vrečki, papirčkov in filtrov. Mali žepek se prilega papirčkom in omogoča enostavno jemanje posamičnega pairčka. Torbica se zapre z dvojnim pripogibom in na koncu še z ježkom, ki omogoča prilagajanje debeline glede na vsebino. Izdelek je izdelan v Sloveniji.',
            'img_name' => 'tobak_torbica_tob_tobacnica_army',
            'tbag_price' => 15.50,
            'open_width' => 15,
            'open_heigth' =>21,
            'close_width' => 15,
            'close_heigth' => 7.5,
        ]);

        DB::table('tbags')->insert([
            'tbag_name' => 'RUSTIK',
            'description' => 'Priljubljena rustikalna tobačnica, je izdelana iz kvalitetnega blaga. Služi shranjevanju 30g tobaka v vrečki, papirčkov in filtrov. Mali žepek se prilega papirčkom in omogoča enostavno jemanje posamičnega pairčka. Torbica se zapre z dvojnim pripogibom in na koncu še z ježkom, ki omogoča prilagajanje debeline glede na vsebino. Izdelek je izdelan v Sloveniji.',
            'img_name' => 'tobak_torbica_tob_tobacnica_rustik',
            'tbag_price' => 15.50,
            'open_width' => 15,
            'open_heigth' =>21,
            'close_width' => 15,
            'close_heigth' => 7.5,
        ]);

        DB::table('tbags')->insert([
            'tbag_name' => 'SKULL',
            'description' => 'Tobačnica z darkerskim potiskom, je izdelana iz kvalitetnega blaga. Služi shranjevanju 30g tobaka v vrečki, papirčkov in filtrov. Mali žepek se prilega papirčkom in omogoča enostavno jemanje posamičnega pairčka. Torbica se zapre z dvojnim pripogibom in na koncu še z ježkom, ki omogoča prilagajanje debeline glede na vsebino. Izdelek je izdelan v Sloveniji.',
            'img_name' => 'tobak_torbica_tob_tobacnica_skull',
            'tbag_price' => 15.50,
            'open_width' => 15,
            'open_heigth' =>21,
            'close_width' => 15,
            'close_heigth' => 7.5,
        ]);

        DB::table('tbags')->insert([
            'tbag_name' => 'USNJE VIJOLIČNA',
            'description' => 'Torbica je izdelana iz kvalitetnega umetnjega usnja. Služi shranjevanju 30g tobaka v vrečki, papirčkov in filtrov. Mali žepek se prilega papirčkom in omogoča enostavno jemanje posamičnega pairčka. Torbica se zapre z dvojnim pripogibom in na koncu še z ježkom, ki omogoča prilagajanje debeline glede na vsebino. Izdelek je izdelan v Sloveniji.',
            'img_name' => 'tobak_torbica_tob_tobacnica_usnje_vijolicna',
            'tbag_price' => 15.50,
            'open_width' => 15,
            'open_heigth' =>21,
            'close_width' => 15,
            'close_heigth' => 7.5,
        ]);
    }
}