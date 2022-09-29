<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('villes')->delete();
        $villes = array(
            array('id' => 1, 'libelle' => 'Douala', 'code1' => '', 'code2' => '', 'description' => "Douala"),
            array('id' => 2, 'libelle' => 'Yaoundé', 'code1' => '', 'code2' => '', 'description' => "Yaoundé"),
            array('id' => 3, 'libelle' => 'Garoua', 'code1' => '', 'code2' => '', 'description' => "Garoua"),
            array('id' => 4, 'libelle' => 'Bamenda', 'code1' => '', 'code2' => '', 'description' => "Bamenda"),
            array('id' => 5, 'libelle' => 'Maroua', 'code1' => '', 'code2' => '', 'description' => "Maroua"),
            array('id' => 6, 'libelle' => 'Nkongsamba', 'code1' => '', 'code2' => '', 'description' => "Nkongsamba"),
            array('id' => 7, 'libelle' => 'Bafoussam', 'code1' => '', 'code2' => '', 'description' => "Bafoussam"),
            array('id' => 8, 'libelle' => 'Ngaoundéré', 'code1' => '', 'code2' => '', 'description' => "Ngaoundéré"),
            array('id' => 9, 'libelle' => 'Bertoua', 'code1' => '', 'code2' => '', 'description' => "Bertoua"),
            array('id' => 10, 'libelle' => 'Loum', 'code1' => '', 'code2' => '', 'description' => "Loum"),
            array('id' => 11, 'libelle' => 'Kumba', 'code1' => '', 'code2' => '', 'description' => "Kumba"),
            array('id' => 12, 'libelle' => 'Edéa', 'code1' => '', 'code2' => '', 'description' => "Edéa"),
            array('id' => 13, 'libelle' => 'Kumbo', 'code1' => '', 'code2' => '', 'description' => "Kumbo"),
            array('id' => 14, 'libelle' => 'Foumban', 'code1' => '', 'code2' => '', 'description' => "Foumban"),
            array('id' => 15, 'libelle' => 'Mbouda', 'code1' => '', 'code2' => '', 'description' => "Mbouda"),
            array('id' => 16, 'libelle' => 'Dschang', 'code1' => '', 'code2' => '', 'description' => "Dschang"),
            array('id' => 17, 'libelle' => 'Limbé', 'code1' => '', 'code2' => '', 'description' => "Limbé"),
            array('id' => 18, 'libelle' => 'Ebolowa', 'code1' => '', 'code2' => '', 'description' => "Ebolowa"),
            array('id' => 19, 'libelle' => 'Kousséri', 'code1' => '', 'code2' => '', 'description' => "Kousséri"),
            array('id' => 20, 'libelle' => 'Guider', 'code1' => '', 'code2' => '', 'description' => "Guider"),
            array('id' => 21, 'libelle' => 'Meiganga', 'code1' => '', 'code2' => '', 'description' => "Meiganga"),
            array('id' => 22, 'libelle' => 'Yagoua', 'code1' => '', 'code2' => '', 'description' => "Yagoua"),
            array('id' => 23, 'libelle' => 'Mbalmayo', 'code1' => '', 'code2' => '', 'description' => "Mbalmayo"),
            array('id' => 24, 'libelle' => 'Bafang', 'code1' => '', 'code2' => '', 'description' => "Bafang"),
            array('id' => 25, 'libelle' => 'Tiko', 'code1' => '', 'code2' => '', 'description' => "Tiko"),
            array('id' => 26, 'libelle' => 'Bafia', 'code1' => '', 'code2' => '', 'description' => "Bafia"),
            array('id' => 27, 'libelle' => 'Wum', 'code1' => '', 'code2' => '', 'description' => "Wum"),
            array('id' => 28, 'libelle' => 'Kribi', 'code1' => '', 'code2' => '', 'description' => "Kribi"),
            array('id' => 29, 'libelle' => 'Buea', 'code1' => '', 'code2' => '', 'description' => "Buea"),
            array('id' => 30, 'libelle' => 'Sangmélima', 'code1' => '', 'code2' => '', 'description' => "Sangmélima"),
            array('id' => 31, 'libelle' => 'Foumbot', 'code1' => '', 'code2' => '', 'description' => "Foumbot"),
            array('id' => 32, 'libelle' => 'Bangangté', 'code1' => '', 'code2' => '', 'description' => "Bangangté"),
            array('id' => 33, 'libelle' => 'Batouri', 'code1' => '', 'code2' => '', 'description' => "Batouri"),
            array('id' => 34, 'libelle' => 'Banyo', 'code1' => '', 'code2' => '', 'description' => "Banyo"),
            array('id' => 35, 'libelle' => 'Nkambé', 'code1' => '', 'code2' => '', 'description' => "Nkambé"),
            array('id' => 36, 'libelle' => 'Bali', 'code1' => '', 'code2' => '', 'description' => "Bali"),
            array('id' => 37, 'libelle' => 'Mbanga', 'code1' => '', 'code2' => '', 'description' => "Mbanga"),
            array('id' => 38, 'libelle' => 'Mokolo', 'code1' => '', 'code2' => '', 'description' => "Mokolo"),
            array('id' => 39, 'libelle' => 'Melong', 'code1' => '', 'code2' => '', 'description' => "Melong"),
            array('id' => 40, 'libelle' => 'Manjo', 'code1' => '', 'code2' => '', 'description' => "Manjo"),
            array('id' => 41, 'libelle' => 'Garoua-Boulaï', 'code1' => '', 'code2' => '', 'description' => "Garoua-Boulaï"),
            array('id' => 42, 'libelle' => 'Mora', 'code1' => '', 'code2' => '', 'description' => "Mora"),
            array('id' => 43, 'libelle' => 'Kaélé', 'code1' => '', 'code2' => '', 'description' => "Kaélé"),
            array('id' => 44, 'libelle' => 'Pitoa', 'code1' => '', 'code2' => '', 'description' => "Pitoa"),
            array('id' => 45, 'libelle' => 'Tibati', 'code1' => '', 'code2' => '', 'description' => "Tibati"),
            array('id' => 46, 'libelle' => 'Ndop', 'code1' => '', 'code2' => '', 'description' => "Ndop"),
            array('id' => 47, 'libelle' => 'Akonolinga', 'code1' => '', 'code2' => '', 'description' => "Akonolinga"),
            array('id' => 48, 'libelle' => 'Eséka', 'code1' => '', 'code2' => '', 'description' => "Eséka"),
            array('id' => 49, 'libelle' => 'Mamfé', 'code1' => '', 'code2' => '', 'description' => "Mamfé"),
            array('id' => 50, 'libelle' => 'Obala', 'code1' => '', 'code2' => '', 'description' => "Obala"),
            array('id' => 51, 'libelle' => 'Muyuka', 'code1' => '', 'code2' => '', 'description' => "Muyuka"),
            array('id' => 52, 'libelle' => 'Nanga-Eboko', 'code1' => '', 'code2' => '', 'description' => "Nanga-Eboko"),
            array('id' => 53, 'libelle' => 'Abong-Mbang', 'code1' => '', 'code2' => '', 'description' => "Abong-Mbang"),
            array('id' => 54, 'libelle' => 'Fundong', 'code1' => '', 'code2' => '', 'description' => "Fundong"),
            array('id' => 55, 'libelle' => 'Nkoteng', 'code1' => '', 'code2' => '', 'description' => "Nkoteng"),
            array('id' => 56, 'libelle' => 'Fontem', 'code1' => '', 'code2' => '', 'description' => "Fontem"),
            array('id' => 57, 'libelle' => 'Mbandjock', 'code1' => '', 'code2' => '', 'description' => "Mbandjock"),
            array('id' => 58, 'libelle' => 'Touboro', 'code1' => '', 'code2' => '', 'description' => "Touboro"),
            array('id' => 59, 'libelle' => 'Ngaoundal', 'code1' => '', 'code2' => '', 'description' => "Ngaoundal"),
            array('id' => 60, 'libelle' => 'Kékem', 'code1' => '', 'code2' => '', 'description' => "Kékem"),
            array('id' => 61, 'libelle' => 'Magba', 'code1' => '', 'code2' => '', 'description' => "Magba"),
            array('id' => 62, 'libelle' => 'Bélabo', 'code1' => '', 'code2' => '', 'description' => "Bélabo"),
            array('id' => 63, 'libelle' => 'Tonga', 'code1' => '', 'code2' => '', 'description' => "Tonga"),
            array('id' => 64, 'libelle' => 'Maga', 'code1' => '', 'code2' => '', 'description' => "Maga"),
            array('id' => 65, 'libelle' => 'Koutaba', 'code1' => '', 'code2' => '', 'description' => "Koutaba"),
            array('id' => 66, 'libelle' => 'Blangoua', 'code1' => '', 'code2' => '', 'description' => "Blangoua"),
            array('id' => 67, 'libelle' => 'Guidiguis', 'code1' => '', 'code2' => '', 'description' => "Guidiguis"),
            array('id' => 68, 'libelle' => 'Bogo', 'code1' => '', 'code2' => '', 'description' => "Bogo"),
            array('id' => 69, 'libelle' => 'Batibo', 'code1' => '', 'code2' => '', 'description' => "Batibo"),
            array('id' => 70, 'libelle' => 'Yabassi', 'code1' => '', 'code2' => '', 'description' => "Yabassi"),
            array('id' => 71, 'libelle' => 'Figuil', 'code1' => '', 'code2' => '', 'description' => "Figuil"),
            array('id' => 72, 'libelle' => 'Makénéné', 'code1' => '', 'code2' => '', 'description' => "Makénéné"),
            array('id' => 73, 'libelle' => 'Gazawa', 'code1' => '', 'code2' => '', 'description' => "Gazawa"),
            array('id' => 74, 'libelle' => 'Tcholliré', 'code1' => '', 'code2' => '', 'description' => "Tcholliré"),
        );
        DB::table('villes')->insert($villes);
    }
}
