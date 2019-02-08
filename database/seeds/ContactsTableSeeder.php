<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'first_name' => 'April',
                'last_name' => 'Austin',
                'contact_number' => '09171245678',
                'email' => 'april.austin@mail.com',
                'image_path' => 'images/avatar.jpg',
                'occupation' => 'Manager',
                'company' => 'AMC Corporation',
                'address' => '15 Greenfelder Courts, Hungduan 8910 Bulacan',
                'stage_id' => 1,
                'user_id' => 2,
                'created_at' => '2019-02-01 00:00:00',
                'updated_at' => '2019-02-01 00:00:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'first_name' => 'Belinda',
                'last_name' => 'Bruso',
                'contact_number' => '09177123456',
                'email' => 'belinda.bruso@mail.com',
                'image_path' => 'images/avatar.jpg',
                'occupation' => 'Assistant Director',
                'company' => 'Globex Corporation',
                'address' => '81A/97 Brakus Parks, Poblacion, Talisay 8313 Quirino',
                'stage_id' => 2,
                'user_id' => 2,
                'created_at' => '2019-02-01 00:00:00',
                'updated_at' => '2019-02-01 00:00:00',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'first_name' => 'Corrine',
                'last_name' => 'Callister',
                'contact_number' => '09750916255',
                'email' => 'corrine.callister@gmail.com',
                'image_path' => 'images/avatar.jpg',
                'occupation' => 'Executive VP',
                'company' => 'Magic Magazine',
                'address' => '57A/51 Reilly Keys, Poblacion, Palayan 8277 Biliran',
                'stage_id' => 3,
                'user_id' => 2,
                'created_at' => '2019-02-02 00:00:00',
                'updated_at' => '2019-02-02 00:00:00',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'first_name' => 'Albert',
                'last_name' => 'Amo',
                'contact_number' => '09841291874',
                'email' => 'albert.amo@gmail.com',
                'image_path' => 'images/avatar.jpg',
                'occupation' => 'Data Scientist',
                'company' => 'Innovitech',
                'address' => '38A/89 Willms Terrace, Alcala 3045 Samar',
                'stage_id' => 4,
                'user_id' => 2,
                'created_at' => '2019-02-02 00:00:00',
                'updated_at' => '2019-02-02 00:00:00',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'first_name' => 'Nicole',
                'last_name' => 'Negley',
                'contact_number' => '09282730513',
                'email' => 'nicole.negley@gmail.com',
                'image_path' => 'images/avatar.jpg',
                'occupation' => 'Supervisor',
                'company' => 'Blue Company',
                'address' => '66A Bernier Mountains Suite 420, Braulio E. Dujali 4083 Rizal',
                'stage_id' => 1,
                'user_id' => 3,
                'created_at' => '2019-02-02 00:00:00',
                'updated_at' => '2019-02-02 00:00:00',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'first_name' => 'Jean',
                'last_name' => 'Jorden',
                'contact_number' => '09440945688',
                'email' => 'jean.jorden@gmail.com',
                'image_path' => 'images/avatar.jpg',
                'occupation' => 'Product Manager',
                'company' => 'Penumbra Corporation',
                'address' => '51A/71 Rempel Wells Suite 864, Poblacion, Naga 4203 Cebu',
                'stage_id' => 1,
                'user_id' => 3,
                'created_at' => '2019-02-02 00:00:00',
                'updated_at' => '2019-02-02 00:00:00',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'first_name' => 'Carmen',
                'last_name' => 'Claxton',
                'contact_number' => '09269539041',
                'email' => 'carmen.claxton@gmail.com',
                'image_path' => 'images/avatar.jpg',
                'occupation' => 'Brand Manager',
                'company' => 'Montenegro Corp',
                'address' => '63 Grant Vista, Poblacion, Guihulngan 9054 South Cotabato',
                'stage_id' => 2,
                'user_id' => 3,
                'created_at' => '2019-02-02 00:00:00',
                'updated_at' => '2019-02-02 00:00:00',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'first_name' => 'Fern',
                'last_name' => 'Foston',
                'contact_number' => '09422461447',
                'email' => 'fern.foston@gmail.com',
                'image_path' => 'images/avatar.jpg',
                'occupation' => 'Risk Analyst',
                'company' => 'VC Capital Partners',
                'address' => '07A/82 Stracke Avenue, Carcar City 0305 Occidental Mindoro',
                'stage_id' => 3,
                'user_id' => 3,
                'created_at' => '2019-02-02 00:00:00',
                'updated_at' => '2019-02-02 00:00:00',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'first_name' => 'Modesto',
                'last_name' => 'Milton',
                'contact_number' => '09015845564',
                'email' => 'modesto.milton@gmail.com',
                'image_path' => 'images/avatar.jpg',
                'occupation' => 'COO',
                'company' => 'MassiveTech Dynamic',
                'address' => '95 Kub Key Suite 422, San Jose 8008 Batangas',
                'stage_id' => 4,
                'user_id' => 4,
                'created_at' => '2019-02-02 00:00:00',
                'updated_at' => '2019-02-02 00:00:00',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'first_name' => 'Fredricka',
                'last_name' => 'Frankum',
                'contact_number' => '09793328088',
                'email' => 'fredricka.frankum@gmail.com',
                'image_path' => 'images/avatar.jpg',
                'occupation' => 'Food Scientist',
                'company' => 'Wilkes Industries',
                'address' => '30/82 Conn Tunnel, Sitangkai 8202 Cavite',
                'stage_id' => 2,
                'user_id' => 4,
                'created_at' => '2019-02-02 00:00:00',
                'updated_at' => '2019-02-02 00:00:00',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'first_name' => 'Nigel',
                'last_name' => 'North',
                'contact_number' => '09907865222',
                'email' => 'nigel.north@gmail.com',
                'image_path' => 'images/avatar.jpg',
                'occupation' => 'CTO',
                'company' => 'Starling Industries',
                'address' => '51A Emmerich Walk Suite 993, Poblacion, Samal 7621 Mountain Province',
                'stage_id' => 1,
                'user_id' => 4,
                'created_at' => '2019-02-02 00:00:00',
                'updated_at' => '2019-02-02 00:00:00',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'first_name' => 'Bonnie',
                'last_name' => 'Brodbeck',
                'contact_number' => '09172142170',
                'email' => 'bonnie.brodbeck@gmail.com',
                'image_path' => 'images/avatar.jpg',
                'occupation' => 'HR Manager',
                'company' => 'Geeky & Co',
                'address' => '00 Reichert Wall, Flora 6345 Siquijor',
                'stage_id' => 2,
                'user_id' => 4,
                'created_at' => '2019-02-02 00:00:00',
                'updated_at' => '2019-02-02 00:00:00',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'first_name' => 'Brenna',
                'last_name' => 'Belton',
                'contact_number' => '09915296656',
                'email' => 'brenna.belton@gmail.com',
                'image_path' => 'images/avatar.jpg',
                'occupation' => 'Regional Director',
                'company' => 'Winston Enterprises',
                'address' => '47A/43 Little Gardens Apt. 637, Talipao 0713 Davao del Sur',
                'stage_id' => 3,
                'user_id' => 5,
                'created_at' => '2019-02-02 00:00:00',
                'updated_at' => '2019-02-02 00:00:00',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'first_name' => 'Eleonore',
                'last_name' => 'Elkington',
                'contact_number' => '09977879902',
                'email' => 'eleonore.elkington@gmail.com',
                'image_path' => 'images/avatar.jpg',
                'occupation' => 'Operations Manager',
                'company' => 'Birmingham Inc.',
                'address' => '18/84 Goodwin Extension Apt. 388, San Miguel 2259 Basilan',
                'stage_id' => 4,
                'user_id' => 5,
                'created_at' => '2019-02-02 00:00:00',
                'updated_at' => '2019-02-02 00:00:00',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'first_name' => 'Cherish',
                'last_name' => 'Curtis',
                'contact_number' => '09201560581',
                'email' => 'cherish.curtis@gmail.com',
                'image_path' => 'images/avatar.jpg',
                'occupation' => 'Senior VP',
                'company' => 'Cyberdyne Systems',
                'address' => '65 Padberg Island Apt. 524, Loon 6478 Camiguin',
                'stage_id' => 3,
                'user_id' => 5,
                'created_at' => '2019-02-02 00:00:00',
                'updated_at' => '2019-02-02 00:00:00',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'first_name' => 'Loise',
                'last_name' => 'Lillibridge',
                'contact_number' => '09385717846',
                'email' => 'loise.lillibridge@gmail.com',
                'image_path' => 'images/avatar.jpg',
                'occupation' => 'R&D Manager',
                'company' => 'Coco-Olive Oil Company',
                'address' => '50 Friesen Shoals, Palompon 7363 Tawi-Tawi',
                'stage_id' => 1,
                'user_id' => 5,
                'created_at' => '2019-02-02 00:00:00',
                'updated_at' => '2019-02-02 00:00:00',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'first_name' => 'Milda',
                'last_name' => 'Moretti',
                'contact_number' => '09645683173',
                'email' => 'milda.moretti@gmail.com',
                'image_path' => 'images/avatar.jpg',
                'occupation' => 'VP for Media',
                'company' => 'The Inquirer',
                'address' => '89A Yundt View, Poblacion, Surigao City 9779 Quirino',
                'stage_id' => 2,
                'user_id' => 6,
                'created_at' => '2019-02-02 00:00:00',
                'updated_at' => '2019-02-02 00:00:00',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'first_name' => 'Janel',
                'last_name' => 'Jones',
                'contact_number' => '09710305596',
                'email' => 'janel.jones@gmail.com',
                'image_path' => 'images/avatar.jpg',
                'occupation' => 'Territory Manager',
                'company' => 'DC Beer',
                'address' => '22/11 Reichert Path Suite 734, Malay 0698 Davao Oriental',
                'stage_id' => 3,
                'user_id' => 6,
                'created_at' => '2019-02-02 00:00:00',
                'updated_at' => '2019-02-02 00:00:00',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'first_name' => 'Alejandro',
                'last_name' => 'Alto',
                'contact_number' => '09853248514',
                'email' => 'alejandro.alto@gmail.com',
                'image_path' => 'images/avatar.jpg',
                'occupation' => 'Senior Partner',
                'company' => 'Oliver Pope & Associates',
                'address' => '72A Gutkowski Canyon Suite 857, Lumbatan 1084 Isabela',
                'stage_id' => 4,
                'user_id' => 6,
                'created_at' => '2019-02-02 00:00:00',
                'updated_at' => '2019-02-02 00:00:00',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'first_name' => 'Clifton',
                'last_name' => 'Cooper',
                'contact_number' => '09161235648',
                'email' => 'clifton.cooper@gmail.com',
                'image_path' => 'images/avatar.jpg',
                'occupation' => 'Owner/President',
                'company' => 'Cooper & Cooper',
                'address' => '73 Johnson Forges Apt. 696, Poblacion, Tagum 3724 Lanao del Norte',
                'stage_id' => 4,
                'user_id' => 6,
                'created_at' => '2019-02-02 00:00:00',
                'updated_at' => '2019-02-02 00:00:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}