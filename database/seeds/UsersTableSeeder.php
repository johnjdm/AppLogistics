<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      //factory(App\User::class, 5)->create();

      Role::create([
        'name'      => 'Administrador',
        'slug' 	    => 'administrador',
        'special' 	=> 'all-access',
      ]);

      Role::create([
        'name'          => 'Gerente',
        'slug' 	        => 'gerente',
        'description' 	=> 'Gerente Comercial, Subgerente y Regional',
      ]);

      Role::create([
        'name'          => 'Ejecutivo',
        'slug' 	        => 'ejecutivo',
        'description' 	=> 'Ejecutivo Comercial',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '1',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '7',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '8',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '9',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '10',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '11',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '12',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '13',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '14',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '15',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '16',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '1',
        'role_id' => '3',
      ]);

      DB::table('users')->insert([
        'name' => 'John Jerry Daza Montero',
        'email' => 'johnjdm.ings@live.com',
        'password' 	=> bcrypt('123456'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '1',
        'user_id' => '1',
      ]);

      DB::table('users')->insert([
        'name' => 'Sebastián Uribarri Echandía',
        'email' => 'sebastian.uribarri@sulogistics.com',
        'password' 	=> bcrypt('suribarrie1981'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '2',
        'user_id' => '2',
      ]);

      DB::table('users')->insert([
        'name' => 'Joaquín Sarria Otoya',
        'email' => 'joaquin.sarria@sulogistics.com',
        'password' 	=> bcrypt('jsarriao1995'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '2',
        'user_id' => '3',
      ]);

      DB::table('users')->insert([
        'name' => 'María Victoria Arana',
        'email' => 'mariavictoria.arana@sulogistics.com',
        'password' 	=> bcrypt('maranae1979'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '2',
        'user_id' => '4',
      ]);

      DB::table('users')->insert([
        'name' => 'María Claudia Arizmendi',
        'email' => 'mariaclaudia.arizmendi@sulogistics.com',
        'password' 	=> bcrypt('marizmendiu1981'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '5',
      ]);

      DB::table('users')->insert([
        'name' => 'Eva Arrieta Samudio',
        'email' => 'eva.arrieta@sulogistics.com',
        'password' 	=> bcrypt('earrietas1970'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '6',
      ]);

      DB::table('users')->insert([
        'name' => 'Eduardo Arteta Ulloa',
        'email' => 'eduardo.arteta@sulogistics.com',
        'password' 	=> bcrypt('eartetau1974'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '7',
      ]);

      DB::table('users')->insert([
        'name' => 'Dolores Chavarro Lenis',
        'email' => 'dolores.chavarro@sulogistics.com',
        'password' 	=> bcrypt('dchavarrol2000'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '8',
      ]);

      DB::table('users')->insert([
        'name' => 'María Elisa Daza Echeverry',
        'email' => 'mariaelisa.daza@sulogistics.com',
        'password' 	=> bcrypt('mdazae1971'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '9',
      ]);

      DB::table('users')->insert([
        'name' => 'Fátima Dorronsoro Lenis',
        'email' => 'fatima.dorronsoro@sulogistics.com',
        'password' 	=> bcrypt('fdorronsorol1985'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '10',
      ]);

      DB::table('users')->insert([
        'name' => 'Beatriz Echaverría Maya',
        'email' => 'beatriz.echaverria@sulogistics.com',
        'password' 	=> bcrypt('bechaverriam1980'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '11',
      ]);

      DB::table('users')->insert([
        'name' => 'Rubén Esguerra Molano',
        'email' => 'ruben.esguerra@sulogistics.com',
        'password' 	=> bcrypt('resguerram1987'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '12',
      ]);

      DB::table('users')->insert([
        'name' => 'Jorge Iván Garavito Sarasti',
        'email' => 'jorgeivan.garavito@sulogistics.com',
        'password' 	=> bcrypt('jgaravitos1993'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '13',
      ]);

      DB::table('users')->insert([
        'name' => 'Mariana Loaiza Zuluaga',
        'email' => 'mariana.loaiza@sulogistics.com',
        'password' 	=> bcrypt('mloaizaz1991'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '2',
        'user_id' => '14',
      ]);

      DB::table('users')->insert([
        'name' => 'Carlos Marulanda Solórzano',
        'email' => 'carlos.marulanda@sulogistics.com',
        'password' 	=> bcrypt('cmarulandas1983'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '15',
      ]);

      DB::table('users')->insert([
        'name' => 'Irene Mazuera Lizarazo',
        'email' => 'irene.mazuera@sulogistics.com',
        'password' 	=> bcrypt('imazueral1971'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '16',
      ]);

      DB::table('users')->insert([
        'name' => 'Juan Fernando Oquendo Uzurriaga',
        'email' => 'juanfernando.oquendo@sulogistics.com',
        'password' 	=> bcrypt('joquendou1985'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '17',
      ]);

      DB::table('users')->insert([
        'name' => 'Elías Unzueta Maya',
        'email' => 'elias.unzueta@sulogistics.com',
        'password' 	=> bcrypt('eunzuetam1991'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '18',
      ]);

      DB::table('users')->insert([
        'name' => 'Carlota Unzueta Obando',
        'email' => 'carlota.unzueta@sulogistics.com',
        'password' 	=> bcrypt('cunzuetao1984'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '19',
      ]);

      DB::table('users')->insert([
        'name' => 'Elías Úzuga Gardeazábal',
        'email' => 'elias.uzuga@sulogistics.com',
        'password' 	=> bcrypt('euzugag1997'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '20',
      ]);

      DB::table('users')->insert([
        'name' => 'Simón Zea Olaya',
        'email' => 'simon.zea@sulogistics.com',
        'password' 	=> bcrypt('szeao1992'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '21',
      ]);

      DB::table('users')->insert([
        'name' => 'Félix Dorronsoro Londoño',
        'email' => 'felix.dorronsoro@sulogistics.com',
        'password' 	=> bcrypt('fdorronsorol1985'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '22',
      ]);

      DB::table('users')->insert([
        'name' => 'Sara Landázuri Azcárate',
        'email' => 'sara.landazuri@sulogistics.com',
        'password' 	=> bcrypt('slandazuria1985'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '23',
      ]);

      DB::table('users')->insert([
        'name' => 'María del Pilar Jáuregui Arana',
        'email' => 'mariadelpilar.jauregui@sulogistics.com',
        'password' 	=> bcrypt('mjaureguia2000'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '2',
        'user_id' => '24',
      ]);

      DB::table('users')->insert([
        'name' => 'Luis Felipe Úzuga Azcárate',
        'email' => 'luisfelipe.uzuga@sulogistics.com',
        'password' 	=> bcrypt('luzugaa1987'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '25',
      ]);

      DB::table('users')->insert([
        'name' => 'Carlos Zea Ochoa',
        'email' => 'carlos.zea@sulogistics.com',
        'password' 	=> bcrypt('czeao1993'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '26',
      ]);

      DB::table('users')->insert([
        'name' => 'María Victoria Atehortúa Ulloa',
        'email' => 'mariavictoria.atehortua@sulogistics.com',
        'password' 	=> bcrypt('matehortuau1971'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '27',
      ]);

      DB::table('users')->insert([
        'name' => 'Fabián Cortázar Loaiza',
        'email' => 'fabianrtazar@sulogistics.com',
        'password' 	=> bcrypt('fcortazarl1998'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '2',
        'user_id' => '28',
      ]);

      DB::table('users')->insert([
        'name' => 'Agustín Echaverría Londoño',
        'email' => 'agustin.echaverria@sulogistics.com',
        'password' 	=> bcrypt('aechaverrial1983'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '29',
      ]);

      DB::table('users')->insert([
        'name' => 'Gregorio Echeverría Ezguerra',
        'email' => 'gregorio.echeverria@sulogistics.com',
        'password' 	=> bcrypt('gecheverriae1974'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '30',
      ]);

      DB::table('users')->insert([
        'name' => 'María Claudia Otálora Mendieta',
        'email' => 'mariaclaudia.otalora@sulogistics.com',
        'password' 	=> bcrypt('motaloram1992'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '31',
      ]);

      DB::table('users')->insert([
        'name' => 'Hernando Cortázar Ezguerra',
        'email' => 'hernandortazar@sulogistics.com',
        'password' 	=> bcrypt('hcortazare1975'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '32',
      ]);

      DB::table('users')->insert([
        'name' => 'Tatiana Echavarría Montoya',
        'email' => 'tatiana.echavarria@sulogistics.com',
        'password' 	=> bcrypt('techavarriam1984'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '2',
        'user_id' => '33',
      ]);

      DB::table('users')->insert([
        'name' => 'Tatiana Larrahondo Chavarro',
        'email' => 'tatiana.larrahondo@sulogistics.com',
        'password' 	=> bcrypt('tlarrahondoc1986'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '34',
      ]);

      DB::table('users')->insert([
        'name' => 'Cecilia Oquendo Lezama',
        'email' => 'cecilia.oquendo@sulogistics.com',
        'password' 	=> bcrypt('coquendol1985'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '35',
      ]);

      DB::table('users')->insert([
        'name' => 'Juan Roberto UlloaLezama',
        'email' => 'juanroberto.ulloa@sulogistics.com',
        'password' 	=> bcrypt('julloal1976'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '36',
      ]);

      DB::table('users')->insert([
        'name' => 'Celia Alzate Bolívar',
        'email' => 'celia.alzate@sulogistics.com',
        'password' 	=> bcrypt('calzateb1999'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '2',
        'user_id' => '37',
      ]);

      DB::table('users')->insert([
        'name' => 'José Ulloa Otálora',
        'email' => 'jose.ulloa@sulogistics.com',
        'password' 	=> bcrypt('julloao1992'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '38',
      ]);

      DB::table('users')->insert([
        'name' => 'Cecilia Umaña Viscaya',
        'email' => 'cecilia.umaña@sulogistics.com',
        'password' 	=> bcrypt('cumañav1977'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '39',
      ]);

      DB::table('users')->insert([
        'name' => 'María Claudia Uribe Otoya',
        'email' => 'mariaclaudia.uribe@sulogistics.com',
        'password' 	=> bcrypt('muribeo1994'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '40',
      ]);

      DB::table('users')->insert([
        'name' => 'Valeria Anzola Zúñiga',
        'email' => 'valeria.anzola@sulogistics.com',
        'password' 	=> bcrypt('vanzolaz1988'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '2',
        'user_id' => '41',
      ]);

      DB::table('users')->insert([
        'name' => 'Alberto Zea Londoño',
        'email' => 'alberto.zea@sulogistics.com',
        'password' 	=> bcrypt('azeal1983'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '42',
      ]);

      DB::table('users')->insert([
        'name' => 'Magdalena Zuleta Larrahondo',
        'email' => 'magdalena.zuleta@sulogistics.com',
        'password' 	=> bcrypt('mzuletal1999'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '43',
      ]);

      DB::table('users')->insert([
        'name' => 'Miguel Antonio Uzurriaga Sarria',
        'email' => 'miguelantonio.uzurriaga@sulogistics.com',
        'password' 	=> bcrypt('muzurriagas1998'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '2',
        'user_id' => '44',
      ]);

      DB::table('users')->insert([
        'name' => 'María Angélica Argote Argote',
        'email' => 'mariaangelica.argote@sulogistics.com',
        'password' 	=> bcrypt('margotea1973'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '2',
        'user_id' => '45',
      ]);

      DB::table('users')->insert([
        'name' => 'Luis Alfonso Chavarríaga Upegui',
        'email' => 'luisalfonso.chavarriaga@sulogistics.com',
        'password' 	=> bcrypt('lchavarriagau1989'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '46',
      ]);

      DB::table('users')->insert([
        'name' => 'Claudia Esguerra Loaiza',
        'email' => 'claudia.esguerra@sulogistics.com',
        'password' 	=> bcrypt('cesguerral1997'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '47',
      ]);

      DB::table('users')->insert([
        'name' => 'Carlos Alberto Upegui Otálora',
        'email' => 'carlosalberto.upegui@sulogistics.com',
        'password' 	=> bcrypt('cupeguio1998'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '48',
      ]);

      DB::table('users')->insert([
        'name' => 'Paula Atehortúa Mendoza',
        'email' => 'paula.atehortua@sulogistics.com',
        'password' 	=> bcrypt('patehortuam1985'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '49',
      ]);

      DB::table('users')->insert([
        'name' => 'Esteban Mendiola Cortázar',
        'email' => 'esteban.mendiola@sulogistics.com',
        'password' 	=> bcrypt('emendiolac1996'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '50',
      ]);

      DB::table('users')->insert([
        'name' => 'Ricardo Zambrano Chavarríaga',
        'email' => 'ricardo.zambrano@sulogistics.com',
        'password' 	=> bcrypt('rzambranoc1980'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '51',
      ]);

      DB::table('users')->insert([
        'name' => 'Antonio Chavarríaga Erazo',
        'email' => 'antonio.chavarriaga@sulogistics.com',
        'password' 	=> bcrypt('achavarriagae1979'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '2',
        'user_id' => '52',
      ]);

      DB::table('users')->insert([
        'name' => 'Eduardo Echandía Anzola',
        'email' => 'eduardo.echandia@sulogistics.com',
        'password' 	=> bcrypt('eechandiaa1972'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '53',
      ]);

      DB::table('users')->insert([
        'name' => 'Virginia María Iragorri Ibargüen',
        'email' => 'virginiamaria.iragorri@sulogistics.com',
        'password' 	=> bcrypt('viragorrii1998'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '54',
      ]);

      DB::table('users')->insert([
        'name' => 'María Cecilia Maya Echeverría',
        'email' => 'mariacecilia.maya@sulogistics.com',
        'password' 	=> bcrypt('mmayae1973'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '55',
      ]);

      DB::table('users')->insert([
        'name' => 'Paloma Artistizábal Loaiza',
        'email' => 'paloma.artistizabal@sulogistics.com',
        'password' 	=> bcrypt('partistizaball1989'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '56',
      ]);

      DB::table('users')->insert([
        'name' => 'Gregorio Mazuera Gardeazábal',
        'email' => 'gregorio.mazuera@sulogistics.com',
        'password' 	=> bcrypt('gmazuerag1971'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '57',
      ]);

      DB::table('users')->insert([
        'name' => 'Marcela Mendoza Uzurriaga',
        'email' => 'marcela.mendoza@sulogistics.com',
        'password' 	=> bcrypt('mmendozau1999'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '58',
      ]);

      DB::table('users')->insert([
        'name' => 'Juan Fernando Arteaga Espitia',
        'email' => 'juanfernando.arteaga@sulogistics.com',
        'password' 	=> bcrypt('jarteagae1996'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '59',
      ]);

      DB::table('users')->insert([
        'name' => 'María Inés Gaviria Obando',
        'email' => 'mariaines.gaviria@sulogistics.com',
        'password' 	=> bcrypt('mgaviriao1983'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '2',
        'user_id' => '60',
      ]);

      DB::table('users')->insert([
        'name' => 'Ana Lucía Londoño Argote',
        'email' => 'analucia.londoño@sulogistics.com',
        'password' 	=> bcrypt('alondoñoa1999'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '2',
        'user_id' => '61',
      ]);

      DB::table('users')->insert([
        'name' => 'Gonzalo Obando Zambrano',
        'email' => 'gonzalo.obando@sulogistics.com',
        'password' 	=> bcrypt('gobandoz1986'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '62',
      ]);

      DB::table('users')->insert([
        'name' => 'José Miguel Arteaga Olózaga',
        'email' => 'josemiguel.arteaga@sulogistics.com',
        'password' 	=> bcrypt('jarteagao1981'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '63',
      ]);

      DB::table('users')->insert([
        'name' => 'Nicolás Espitia Argote',
        'email' => 'nicolas.espitia@sulogistics.com',
        'password' 	=> bcrypt('nespitiaa1982'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '64',
      ]);

      DB::table('users')->insert([
        'name' => 'María del Socorro Iragorri Bedoya',
        'email' => 'mariadelsocorro.iragorri@sulogistics.com',
        'password' 	=> bcrypt('miragorrib2000'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '65',
      ]);

      DB::table('users')->insert([
        'name' => 'Magdalena Montoya Oquendo',
        'email' => 'magdalena.montoya@sulogistics.com',
        'password' 	=> bcrypt('mmontoyao1980'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '66',
      ]);

      DB::table('users')->insert([
        'name' => 'Álvaro Urdanet Daza',
        'email' => 'alvaro.urdaneta@sulogistics.com',
        'password' 	=> bcrypt('aurdanetad1971'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '67',
      ]);

      DB::table('users')->insert([
        'name' => 'Beatriz Jáuregui Uribe',
        'email' => 'beatriz.jauregui@sulogistics.com',
        'password' 	=> bcrypt('bjaureguiu1995'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '68',
      ]);

      DB::table('users')->insert([
        'name' => 'Simón Samudio Arana',
        'email' => 'simon.samudio@sulogistics.com',
        'password' 	=> bcrypt('ssamudioa1993'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '69',
      ]);

      DB::table('users')->insert([
        'name' => 'Luis Ernesto Saldarriaga Solórzano',
        'email' => 'luisernesto.saldarriaga@sulogistics.com',
        'password' 	=> bcrypt('lsaldarriagas1975'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '2',
        'user_id' => '70',
      ]);

      DB::table('users')->insert([
        'name' => 'Rosalía Viscaya Ortiz',
        'email' => 'rosalia.viscaya@sulogistics.com',
        'password' 	=> bcrypt('rviscayao1985'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '71',
      ]);

      DB::table('users')->insert([
        'name' => 'Ana Lucía Zuleta Lizarazo',
        'email' => 'analucia.zuleta@sulogistics.com',
        'password' 	=> bcrypt('azuletal1981'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '72',
      ]);

      DB::table('users')->insert([
        'name' => 'José María Galarza Arrieta',
        'email' => 'josemaria.galarza@sulogistics.com',
        'password' 	=> bcrypt('jgalarzaa1995'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '73',
      ]);

      DB::table('users')->insert([
        'name' => 'Luis Enrique Lara Olaya',
        'email' => 'luisenrique.lara@sulogistics.com',
        'password' 	=> bcrypt('llarao1981'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '74',
      ]);

      DB::table('users')->insert([
        'name' => 'María Jimena Úzuga Alzate',
        'email' => 'mariajimena.uzuga@sulogistics.com',
        'password' 	=> bcrypt('muzugaa1998'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '75',
      ]);

      DB::table('users')->insert([
        'name' => 'Rebeca Esguerra Arana',
        'email' => 'rebeca.esguerra@sulogistics.com',
        'password' 	=> bcrypt('resguerraa1976'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '2',
        'user_id' => '76',
      ]);

      DB::table('users')->insert([
        'name' => 'Damián Daza Arizabaleta',
        'email' => 'damian.daza@sulogistics.com',
        'password' 	=> bcrypt('ddazaa1977'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '77',
      ]);

      DB::table('users')->insert([
        'name' => 'Fermín Lenis Ortiz',
        'email' => 'fermin.lenis@sulogistics.com',
        'password' 	=> bcrypt('fleniso1995'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '78',
      ]);

      DB::table('users')->insert([
        'name' => 'Félix Arrieta Alzate',
        'email' => 'felix.arrieta@sulogistics.com',
        'password' 	=> bcrypt('farrietaa1970'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '79',
      ]);

      DB::table('users')->insert([
        'name' => 'Benjamín Echandía Echeverría',
        'email' => 'benjamin.echandia@sulogistics.com',
        'password' 	=> bcrypt('bechandiae1997'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '80',
      ]);

      DB::table('users')->insert([
        'name' => 'Emilio Ortiz Otálora',
        'email' => 'emilio.ortiz@sulogistics.com',
        'password' 	=> bcrypt('eortizo1987'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '81',
      ]);

      DB::table('users')->insert([
        'name' => 'María Ángela Ortiz Upegui',
        'email' => 'mariaangela.ortiz@sulogistics.com',
        'password' 	=> bcrypt('mortizu1997'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '82',
      ]);

      DB::table('users')->insert([
        'name' => 'María Luisa Upegui Urdinola',
        'email' => 'marialuisa.upegui@sulogistics.com',
        'password' 	=> bcrypt('mupeguiu1997'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '3',
        'user_id' => '83',
      ]);
    }
}
