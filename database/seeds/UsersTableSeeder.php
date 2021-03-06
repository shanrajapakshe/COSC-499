<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        // // TEST USERS
        // DB::table('users')->insert([
        //     'id' => 44,
        //     'firstName' => 'User',
        //     'lastName' => 'test',
        //     'email' =>'user@test.com',
        //     'password'=>bcrypt('password'),
        //     'admin'=>0,
        // ]);
        //
        // DB::table('users')->insert([
        //     'id' => 45,
        //     'firstName' => 'Admin',
        //     'lastName' => 'test',
        //     'email' =>'admin@test.com',
        //     'password'=>bcrypt('password'),
        //     'admin'=>1,
        // ]);




        DB::table('users')->insert([
            'id' => 1,
            'firstName' => 'Bowen',
            'lastName' => 'Hui',
            'email' =>'bowen.hui@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>1,
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'firstName' => 'John',
            'lastName' => 'Hopkinson',
            'email' =>'john.hopkinson@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>1,
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'firstName' => 'Jeff',
            'lastName' => 'Andrews',
            'email' =>'jeff.andrews@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 4,
            'firstName' => 'Heinz',
            'lastName' => 'Bauschke',
            'email' =>'heinz.bauschke@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 5,
            'firstName' => 'Thor',
            'lastName' => 'Bjarnason',
            'email' =>'thor.bjarnason@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 6,
            'firstName' => 'Jake',
            'lastName' => 'Bobowski',
            'email' =>'jake.bobowski@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 7,
            'firstName' => 'John',
            'lastName' => 'Braun',
            'email' =>'john.braun@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 8,
            'firstName' => 'Wayne',
            'lastName' => 'Broughton',
            'email' =>'wayne.broughton@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>1,
        ]);

        DB::table('users')->insert([
            'id' => 9,
            'firstName' => 'Edward',
            'lastName' => 'Butz',
            'email' =>'edward.butz@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 10,
            'firstName' => 'Kendra',
            'lastName' => 'Cooper',
            'email' =>'kendra.cooper@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 11,
            'firstName' => 'Sylvie',
            'lastName' => 'Desjardins',
            'email' =>'sylvie.desjardins@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 12,
            'firstName' => 'Scott',
            'lastName' => 'Fazackerley',
            'email' =>'scott.fazackerley@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 13,
            'firstName' => 'Yong',
            'lastName' => 'Gao',
            'email' =>'yong.gao@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 14,
            'firstName' => 'Paramjit',
            'lastName' => 'Gill',
            'email' =>'paramjit.gill@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 15,
            'firstName' => 'Emelie',
            'lastName' => 'Gustafsson',
            'email' =>'emelie.gustafsson@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 16,
            'firstName' => 'Donovan',
            'lastName' => 'Hare',
            'email' =>'donovan.hare@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 17,
            'firstName' => 'Warren',
            'lastName' => 'Hare',
            'email' =>'warren.hare@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 18,
            'firstName' => 'Christina',
            'lastName' => 'Haston',
            'email' =>'christina.haston@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 19,
            'firstName' => 'Andrew',
            'lastName' => 'Jirasek',
            'email' =>'andrew.jirasek@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 20,
            'firstName' => 'Patricia',
            'lastName' => 'Lasserre',
            'email' =>'patricia.lasserre@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 21,
            'firstName' => 'Ramon',
            'lastName' => 'Lawrence',
            'email' =>'ramon.lawrence@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 22,
            'firstName' => 'Jason',
            'lastName' => 'Loeppky',
            'email' =>'jason.loeppky@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 23,
            'firstName' => 'Yves',
            'lastName' => 'Lucet',
            'email' =>'yves.lucet@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 24,
            'firstName' => 'Abdallah',
            'lastName' => 'Mohamed',
            'email' =>'abdallah.mohamed@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 25,
            'firstName' => 'Murray',
            'lastName' => 'Neuman',
            'email' =>'murray.neuman@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 26,
            'firstName' => 'Rasika',
            'lastName' => 'Rajapakshe',
            'email' =>'rasika.rajapakshe@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 27,
            'firstName' => 'Blair',
            'lastName' => 'Spearman',
            'email' =>'blair.spearman@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 28,
            'firstName' => 'Jesse',
            'lastName' => 'Tanguay',
            'email' =>'jesse.tanguay@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 29,
            'firstName' => 'Javad',
            'lastName' => 'Tavakoli',
            'email' =>'javad.tavakoli@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 30,
            'firstName' => 'Miles',
            'lastName' => 'Thorogood',
            'email' =>'miles.thorogood@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 31,
            'firstName' => 'Ben',
            'lastName' => 'Tippet',
            'email' =>'ben.tippet@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 32,
            'firstName' => 'Rebecca',
            'lastName' => 'Tyson',
            'email' =>'rebecca.tyson@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 33,
            'firstName' => 'Daniel',
            'lastName' => 'Vollick',
            'email' =>'daniel.vollick@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 34,
            'firstName' => 'Shawn',
            'lastName' => 'Wang',
            'email' =>'shawn.wang@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 35,
            'firstName' => 'Jia',
            'lastName' => 'Xu',
            'email' =>'jia.xu@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 36,
            'firstName' => 'Yas',
            'lastName' => 'Yamin',
            'email' =>'yas.yamin@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 37,
            'firstName' => 'Qiduan',
            'lastName' => 'Yang',
            'email' =>'qiduan.yamin@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 38,
            'firstName' => 'James',
            'lastName' => 'Yu',
            'email' =>'james.yu@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 39,
            'firstName' => 'Jocelyn',
            'lastName' => 'Smith',
            'email' =>'jocelyn.smith@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 40,
            'firstName' => 'Sedi',
            'lastName' => 'Bartz',
            'email' =>'sedi.bartz@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 41,
            'firstName' => 'Chayne',
            'lastName' => 'Planiden',
            'email' =>'chayne.planiden@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 42,
            'firstName' => 'Lindsey',
            'lastName' => 'Reinholz',
            'email' =>'lindsey.reinholz@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 43,
            'firstName' => 'Marie-Pierre',
            'lastName' => 'Milette',
            'email' =>'marie-pierre.milette@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>0,
        ]);

        DB::table('users')->insert([
            'id' => 44,
            'firstName' => 'Hilda',
            'lastName' => 'Patzer',
            'email' =>'hilda.patzer@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>1,
        ]);

        DB::table('users')->insert([
            'id' => 45,
            'firstName' => 'Hiroko',
            'lastName' => 'Nakahara',
            'email' =>'hiroko.nakahara@ubc.ca',
            'password'=>bcrypt('password'),
            'admin'=>1,
        ]);


    }
}
