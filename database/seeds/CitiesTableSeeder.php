<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            //abia state, 1
            ['Aba', 1],
            ['Arochukwu', 1],
            ['Umuahia', 1],

            //adamawa, 2
            ['Jimeta', 2],
            ['Mubi', 2],
            ['Numan', 2],
            ['Yola', 2],

            //akwa ibom, 3
            ['Ikot Abasi', 3],
            ['Ikot Ekpene', 3],
            ['Oron', 3],
            ['Uyo', 3],

            //anambra, 4
            ['Awka', 4],
            ['Onitsha', 4],
            ['Obosi', 4],

            //Bauchi (State) 5

            ['Azare', 5],
            ['Bauchi', 5],
            ['Jama′are', 5],
            ['Katagum', 5],
            ['Misau', 5],

            //Bayelsa, 6
            ['Brass', 6],
            ['Yenegoa', 6],
            ['Yenegwe', 6],
            ['Wilberforce Island', 6],

            //Benue, 7
            ['Makurdi', 7],

            //Borno (State), 8
            ['Biu', 8],
            ['Dikwa', 8],
            ['Maiduguri', 8],


            //Cross River (State), 9
            ['Calabar', 9],
            ['Ogoja', 9],


            //Delta (State), 10
            ['Asaba', 10],
            ['Burutu', 10],
            ['Koko', 10],
            ['Sapele', 10],
            ['Ughelli', 10],
            ['Warri', 10],


            //Ebonyi (State),11
            ['Abakaliki', 11],
            ['Iboko', 11],


            //Edo (State), 12
            ['Benin City', 12],


            //Ekiti (State), 13
            ['Ado-Ekiti', 13],
            ['Effon-Alaiye', 13],
            ['Ikere-Ekiti', 13],

            //Enugu (State)
            ['Enugu', 14],
            ['Nsukka', 14],



            //Gombe (State)
            ['Deba Habe', 15],
            ['Gombe', 15],
            ['Kumo', 15],

            //Imo (State)
            ['Owerri', 16],

            //Jigawa (State)
            ['Birnin Kudu', 17],
            ['Dutse', 17],
            ['Gumel', 17],
            ['Hadejia', 17],
            ['Kazaure', 17],

            //Kaduna (State)
            ['Jemaa', 18],
            ['Kaduna', 18],
            ['Zaria', 18],

            //Kano (State)
            ['Kano', 19],

            //Katsina (State)
            ['Daura', 20],
            ['Katsina', 20],

            //Kebbi (State)
            ['Argungu', 21],
            ['Birnin Kebbi', 21],
            ['Gwandu', 21],
            ['Yelwa', 21],

            //Kogi (State)
            ['Idah', 22],
            ['Kabba', 22],
            ['Lokoja', 22],
            ['Okene', 22],

            //Kwara (State)
            ['Ilorin', 23],
            ['Jebba', 23],
            ['Lafiagi', 23],
            ['Offa', 23],
            ['Pategi', 23],

            //Lagos (State)
            ['Badagry', 24],
            ['Epe', 24],
            ['Ikeja', 24],
            ['Ikorodu', 24],
            ['Lagos', 24],
            ['Mushin', 24],
            ['Shomolu', 24],

            //Nasarawa (State)
            ['Keffi', 25],
            ['Lafia', 25],
            ['Nasarawa', 25],

            //Niger (State)
            ['Agaie', 26],
            ['Baro', 26],
            ['Bida', 26],
            ['Kontagora', 26],
            ['Lapai', 26],
            ['Minna', 26],
            ['Suleja', 26],

            //Ogun (State)
            ['Abeokuta', 27],
            ['Ijebu-Ode', 27],
            ['Ilaro', 27],
            ['Shagamu', 27],

            //Ondo (State)
            ['Akure', 28],
            ['Ikare', 28],
            ['Oka-Akoko', 28],
            ['Ondo', 28],
            ['Owo', 28],

            //Osun (State)
            ['Ede', 29],
            ['Ikire', 29],
            ['Ikirun', 29],
            ['Ila', 29],
            ['Ile-Ife', 29],
            ['Ilesha', 29],
            ['Ilobu', 29],
            ['Inisa', 29],
            ['Iwo', 29],
            ['Oshogbo', 29],

            //Oyo (State)
            ['Ibadan', 30],
            ['Iseyin', 30],
            ['Ogbomosho', 30],
            ['Oyo', 30],
            ['Saki', 30],

            //Plateau (State)
            ['Bukuru', 31],
            ['Jos', 31],
            ['Vom', 31],
            ['Wase', 31],

            //Rivers (State)
            ['Bonny', 32],
            ['Degema', 32],
            ['Okrika', 32],
            ['Port Harcourt', 32],

            //Sokoto (State)
            ['Sokoto', 33],

            //Taraba (State)
            ['Ibi', 34],
            ['Jalingo', 34],
            ['Muri', 34],

            //Yobe (State)
            ['Damaturu', 35],
            ['Nguru', 35],

            //Zamfara (State)
            ['Gusau', 36],
            ['Kaura Namoda', 36],


            //Federal Capital Territory (Federal Territory)
            ['Bwari', 37],
            ['Dutse', 37],
            ['Gwagwalada', 37],
            ['Gwarimpa', 37],
            ['Lugbe', 37],
            ['wuse 1', 37],
            ['wuse 2', 37],





















        ];

        foreach ($cities as $city) {
            \App\Models\City::create(['name' => $city[0],
                                       'state'=>$city[1]
            ]);
        }
    }
}
