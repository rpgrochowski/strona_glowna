<?php

use Illuminate\Database\Seeder;

class SeedKlienciTabela extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++)
        {
            $user = new \App\User();
            $user->name = 'test_' . $i ;
            $user->email = 'user' . $i . '@user';
            $user->password = bcrypt('123');
            $user->save();
        }

        $kliencis = new \App\klienci(); $kliencis->firstName = 'Cain'; $kliencis->lastName = 'Huff'; $kliencis->town = 'Leersum'; $kliencis->address = '239-539 Ac Rd.'; $kliencis->email = 'amet.risus.Donec@aliquetPhasellusfermentum.com'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Jelani'; $kliencis->lastName = 'Beach'; $kliencis->town = 'Waterloo'; $kliencis->address = '2125 Elit. Rd.'; $kliencis->email = 'vel@nulla.ca'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Basil'; $kliencis->lastName = 'Dickson'; $kliencis->town = 'Gaasbeek'; $kliencis->address = '6277 Pharetra. St.'; $kliencis->email = 'vitae@magnatellus.com'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Lillith'; $kliencis->lastName = 'Jordan'; $kliencis->town = 'Treguaco'; $kliencis->address = 'P.O. Box 276, 5969 Cras Avenue'; $kliencis->email = 'In.at.pede@magnaSuspendissetristique.co.uk'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Bertha'; $kliencis->lastName = 'Kinney'; $kliencis->town = 'Rhemes-Notre-Dame'; $kliencis->address = 'P.O. Box 720, 7923 Vel Road'; $kliencis->email = 'condimentum@eu.edu'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Angelica'; $kliencis->lastName = 'Duke'; $kliencis->town = 'Kitscoty'; $kliencis->address = '557-2258 Non Ave'; $kliencis->email = 'quis.pede@turpis.org'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Bell'; $kliencis->lastName = 'Mills'; $kliencis->town = 'Segovia'; $kliencis->address = 'Ap #285-4513 Fusce Road'; $kliencis->email = 'enim@noncursus.net'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Lucy'; $kliencis->lastName = 'Valenzuela'; $kliencis->town = 'Treglio'; $kliencis->address = 'Ap #531-9943 Lacinia Rd.'; $kliencis->email = 'arcu@sagittis.com'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Zia'; $kliencis->lastName = 'Cherry'; $kliencis->town = 'Moio Alcantara'; $kliencis->address = '240-6245 Nonummy Street'; $kliencis->email = 'a.enim.Suspendisse@nonummy.org'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Barry'; $kliencis->lastName = 'Becker'; $kliencis->town = 'Montemignaio'; $kliencis->address = '8931 Dolor. Rd.'; $kliencis->email = 'tellus.lorem.eu@mauriselit.com'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Maris'; $kliencis->lastName = 'Blevins'; $kliencis->town = 'Monte Patria'; $kliencis->address = 'P.O. Box 670, 9716 Integer Avenue'; $kliencis->email = 'convallis.in@pellentesquea.org'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Ora'; $kliencis->lastName = 'Suarez'; $kliencis->town = 'Morvi'; $kliencis->address = '5424 A, St.'; $kliencis->email = 'inceptos.hymenaeos.Mauris@dolordapibus.ca'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Armand'; $kliencis->lastName = 'Craft'; $kliencis->town = 'Varsenare'; $kliencis->address = '3337 Aliquam Rd.'; $kliencis->email = 'purus@acurna.co.uk'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'David'; $kliencis->lastName = 'Romero'; $kliencis->town = 'Irvine'; $kliencis->address = 'P.O. Box 688, 3516 In Rd.'; $kliencis->email = 'elementum.sem.vitae@Nullam.ca'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Suki'; $kliencis->lastName = 'Thompson'; $kliencis->town = 'Chill??n Viejo'; $kliencis->address = '515-1865 Placerat, St.'; $kliencis->email = 'in@ullamcorperDuisat.ca'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Maile'; $kliencis->lastName = 'Sullivan'; $kliencis->town = 'Northumberland'; $kliencis->address = '918-1562 Pharetra Av.'; $kliencis->email = 'tellus.Phasellus@vel.net'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Roth'; $kliencis->lastName = 'Cline'; $kliencis->town = 'Saint-Pierre'; $kliencis->address = 'Ap #768-3276 Est Rd.'; $kliencis->email = 'arcu.vel.quam@egestas.ca'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Sophia'; $kliencis->lastName = 'Buckner'; $kliencis->town = 'Hastings'; $kliencis->address = '3752 Commodo Ave'; $kliencis->email = 'sem.eget.massa@scelerisquemollis.com'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Naomi'; $kliencis->lastName = 'Ayala'; $kliencis->town = 'Clarksville'; $kliencis->address = 'Ap #861-5854 Lacinia Road'; $kliencis->email = 'Aliquam.erat.volutpat@velpede.co.uk'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Sydney'; $kliencis->lastName = 'Hood'; $kliencis->town = 'Latisana'; $kliencis->address = '208-2398 Ipsum St.'; $kliencis->email = 'tellus@acmattis.edu'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Fiona'; $kliencis->lastName = 'Spencer'; $kliencis->town = 'Vichy'; $kliencis->address = 'Ap #891-2372 Mi, Rd.'; $kliencis->email = 'elit.pede.malesuada@iaculisquispede.com'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Marshall'; $kliencis->lastName = 'Cox'; $kliencis->town = 'Bromyard'; $kliencis->address = 'P.O. Box 497, 2970 Fusce St.'; $kliencis->email = 'odio.sagittis.semper@ipsumCurabiturconsequat.co.uk'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Ivory'; $kliencis->lastName = 'Callahan'; $kliencis->town = 'Sgonico'; $kliencis->address = 'Ap #506-7189 Faucibus Road'; $kliencis->email = 'augue.eu.tellus@duiCraspellentesque.org'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Avram'; $kliencis->lastName = 'Kelly'; $kliencis->town = 'Castel Maggiore'; $kliencis->address = 'P.O. Box 788, 8269 Cras Road'; $kliencis->email = 'magna.et@acipsumPhasellus.org'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Blaze'; $kliencis->lastName = 'Potter'; $kliencis->town = 'Arbre'; $kliencis->address = 'Ap #307-5977 Felis, St.'; $kliencis->email = 'varius.ultrices@ultricesVivamus.ca'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Quinn'; $kliencis->lastName = 'Flowers'; $kliencis->town = 'Cowdenbeath'; $kliencis->address = '3256 Dictum Rd.'; $kliencis->email = 'nec.mollis@vestibulumneceuismod.com'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Whoopi'; $kliencis->lastName = 'Moody'; $kliencis->town = 'Tiruchirapalli'; $kliencis->address = 'Ap #776-6741 Nam St.'; $kliencis->email = 'Pellentesque@magnanec.org'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Fiona'; $kliencis->lastName = 'Hoover'; $kliencis->town = 'Snaaskerke'; $kliencis->address = 'P.O. Box 370, 485 Vehicula Ave'; $kliencis->email = 'lacus.Nulla.tincidunt@Nunc.co.uk'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Ora'; $kliencis->lastName = 'Bradshaw'; $kliencis->town = 'San Vicente'; $kliencis->address = 'Ap #571-5852 Nisi St.'; $kliencis->email = 'tristique@Integermollis.com'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Mason'; $kliencis->lastName = 'Alford'; $kliencis->town = 'Chatillon'; $kliencis->address = 'P.O. Box 109, 3870 Vel St.'; $kliencis->email = 'consequat.lectus@nondapibusrutrum.co.uk'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Linus'; $kliencis->lastName = 'Holt'; $kliencis->town = 'Florida'; $kliencis->address = 'P.O. Box 640, 3726 Maecenas Ave'; $kliencis->email = 'tristique.pellentesque@SuspendissesagittisNullam.edu'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Jamal'; $kliencis->lastName = 'Valdez'; $kliencis->town = 'Fratta Todina'; $kliencis->address = 'P.O. Box 401, 5384 Ut Rd.'; $kliencis->email = 'ut@Quisqueac.edu'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Wendy'; $kliencis->lastName = 'Page'; $kliencis->town = 'Clarksville'; $kliencis->address = '7785 Aliquam Rd.'; $kliencis->email = 'ridiculus@Donecconsectetuermauris.org'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Graiden'; $kliencis->lastName = 'Rosa'; $kliencis->town = 'Bostani?§i'; $kliencis->address = 'Ap #894-1764 Placerat Road'; $kliencis->email = 'Vestibulum.accumsan@pretium.co.uk'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Thane'; $kliencis->lastName = 'Rojas'; $kliencis->town = 'Fort Saskatchewan'; $kliencis->address = '383-3903 Neque. Avenue'; $kliencis->email = 'eleifend@non.net'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Judah'; $kliencis->lastName = 'Garrett'; $kliencis->town = 'Oyace'; $kliencis->address = 'Ap #564-216 Eget Street'; $kliencis->email = 'ornare@mollisDuissit.net'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Moses'; $kliencis->lastName = 'Silva'; $kliencis->town = 'Trois-Rivi???res'; $kliencis->address = '145-1430 Tincidunt St.'; $kliencis->email = 'nulla.ante.iaculis@natoquepenatibuset.edu'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Blair'; $kliencis->lastName = 'Combs'; $kliencis->town = 'Basildon'; $kliencis->address = '9042 Mollis Road'; $kliencis->email = 'Cras.interdum@fringillaeuismodenim.edu'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Cleo'; $kliencis->lastName = 'Heath'; $kliencis->town = 'Lonquimay'; $kliencis->address = 'Ap #971-7585 Magna. Rd.'; $kliencis->email = 'Mauris.nulla.Integer@sedfacilisis.co.uk'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Brianna'; $kliencis->lastName = 'Cummings'; $kliencis->town = 'Calgary'; $kliencis->address = 'Ap #692-5098 Lacus. Av.'; $kliencis->email = 'sed@eu.org'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Jenna'; $kliencis->lastName = 'Mcdowell'; $kliencis->town = 'Hualp?©n'; $kliencis->address = '6666 Sed Rd.'; $kliencis->email = 'sit.amet@eu.edu'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Caleb'; $kliencis->lastName = 'Peterson'; $kliencis->town = 'Tenby'; $kliencis->address = 'P.O. Box 801, 8096 Vestibulum Rd.'; $kliencis->email = 'augue@Donec.co.uk'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Amery'; $kliencis->lastName = 'Palmer'; $kliencis->town = 'Kozhikode'; $kliencis->address = '4471 Dictum Rd.'; $kliencis->email = 'ligula@sempercursus.co.uk'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Yasir'; $kliencis->lastName = 'Hewitt'; $kliencis->town = 'Lehrte'; $kliencis->address = '422-594 Eu St.'; $kliencis->email = 'dui.lectus.rutrum@habitant.edu'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Idona'; $kliencis->lastName = 'Quinn'; $kliencis->town = 'Baltimore'; $kliencis->address = 'Ap #710-7665 Sed Ave'; $kliencis->email = 'non.sollicitudin.a@Phasellusnulla.co.uk'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Cecilia'; $kliencis->lastName = 'Burris'; $kliencis->town = 'Birori'; $kliencis->address = '585-5279 Lorem St.'; $kliencis->email = 'eu@molestieSedid.ca'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Tanner'; $kliencis->lastName = 'Webb'; $kliencis->town = 'Rocca San Felice'; $kliencis->address = '999-6661 Ante Road'; $kliencis->email = 'tristique.pellentesque@disparturientmontes.com'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Dexter'; $kliencis->lastName = 'Juarez'; $kliencis->town = 'Agartala'; $kliencis->address = 'P.O. Box 244, 7366 Ipsum Rd.'; $kliencis->email = 'orci.in.consequat@pellentesque.org'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Kylynn'; $kliencis->lastName = 'Dyer'; $kliencis->town = 'Campagna'; $kliencis->address = '1319 Interdum. Avenue'; $kliencis->email = 'adipiscing.lacus@auguescelerisquemollis.ca'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Elmo'; $kliencis->lastName = 'Mckay'; $kliencis->town = 'Kearney'; $kliencis->address = '500-3509 Placerat. Street'; $kliencis->email = 'Aliquam.gravida.mauris@Mauris.org'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Felix'; $kliencis->lastName = 'Patel'; $kliencis->town = 'Goslar'; $kliencis->address = '4885 Sed, Road'; $kliencis->email = 'ante.blandit.viverra@dictumcursusNunc.co.uk'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Keelie'; $kliencis->lastName = 'Kelley'; $kliencis->town = 'Thuin'; $kliencis->address = 'P.O. Box 240, 7347 In Rd.'; $kliencis->email = 'montes.nascetur@ipsumacmi.com'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Howard'; $kliencis->lastName = 'Williams'; $kliencis->town = 'Maria'; $kliencis->address = '173-1517 Augue Street'; $kliencis->email = 'Ut@ametconsectetuer.org'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Savannah'; $kliencis->lastName = 'Hardy'; $kliencis->town = 'Garaguso'; $kliencis->address = 'Ap #767-1448 Fermentum Avenue'; $kliencis->email = 'vitae.posuere@Proinnon.com'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Nasim'; $kliencis->lastName = 'Howard'; $kliencis->town = 'Hilo'; $kliencis->address = '217-6758 Mi Av.'; $kliencis->email = 'a@quisdiamPellentesque.net'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Malcolm'; $kliencis->lastName = 'Cabrera'; $kliencis->town = 'Lauder'; $kliencis->address = 'Ap #897-3551 Sociosqu Avenue'; $kliencis->email = 'et.netus@aliquet.net'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Irene'; $kliencis->lastName = 'Delaney'; $kliencis->town = 'Rycroft'; $kliencis->address = 'P.O. Box 656, 4471 Ut St.'; $kliencis->email = 'et.libero.Proin@erat.ca'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Vincent'; $kliencis->lastName = 'Harris'; $kliencis->town = 'Pirmasens'; $kliencis->address = 'P.O. Box 529, 1898 Scelerisque Ave'; $kliencis->email = 'vehicula@nisiAenean.net'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Mona'; $kliencis->lastName = 'Bush'; $kliencis->town = 'Lehrte'; $kliencis->address = 'P.O. Box 153, 7412 Convallis St.'; $kliencis->email = 'sem@sitamet.net'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Hayden'; $kliencis->lastName = 'Burnett'; $kliencis->town = 'Haridwar'; $kliencis->address = '4519 Pharetra Street'; $kliencis->email = 'vitae.nibh@torquentper.org'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Marah'; $kliencis->lastName = 'Greene'; $kliencis->town = 'Lasne-Chapelle-Saint-Lambert'; $kliencis->address = 'Ap #861-5923 Auctor Rd.'; $kliencis->email = 'lorem.fringilla.ornare@egestas.net'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Alexis'; $kliencis->lastName = 'Todd'; $kliencis->town = 'Talcahuano'; $kliencis->address = '282-1242 Enim Street'; $kliencis->email = 'a.mi.fringilla@loremvehicula.net'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Jasper'; $kliencis->lastName = 'Gonzales'; $kliencis->town = 'Senneville'; $kliencis->address = 'Ap #444-7399 Adipiscing Street'; $kliencis->email = 'porttitor.tellus.non@libero.edu'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Linda'; $kliencis->lastName = 'Trevino'; $kliencis->town = 'Kincardine'; $kliencis->address = '9686 Nascetur Av.'; $kliencis->email = 'Vivamus@etnetuset.edu'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Orla'; $kliencis->lastName = 'Wright'; $kliencis->town = 'Saint Paul'; $kliencis->address = 'Ap #729-1624 Fringilla St.'; $kliencis->email = 'sed@ante.org'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Edan'; $kliencis->lastName = 'Carrillo'; $kliencis->town = 'Calgary'; $kliencis->address = '365-2248 Vitae St.'; $kliencis->email = 'vitae.purus.gravida@faucibusorciluctus.ca'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Darrel'; $kliencis->lastName = 'Aguirre'; $kliencis->town = 'Ambala'; $kliencis->address = 'Ap #442-1692 Purus St.'; $kliencis->email = 'elit.Curabitur@lorem.co.uk'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Lee'; $kliencis->lastName = 'Mosley'; $kliencis->town = 'Burlington'; $kliencis->address = 'Ap #349-3759 A, Street'; $kliencis->email = 'parturient@volutpatNulladignissim.ca'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Arsenio'; $kliencis->lastName = 'Taylor'; $kliencis->town = 'Presles'; $kliencis->address = 'P.O. Box 540, 1531 Molestie St.'; $kliencis->email = 'litora.torquent.per@Duiscursusdiam.ca'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Ivory'; $kliencis->lastName = 'Gonzales'; $kliencis->town = 'Bulzi'; $kliencis->address = 'P.O. Box 718, 200 Interdum Street'; $kliencis->email = 'ligula@consectetueradipiscing.co.uk'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Lawrence'; $kliencis->lastName = 'Leblanc'; $kliencis->town = 'Falerone'; $kliencis->address = '189-5408 Urna Street'; $kliencis->email = 'sapien.Cras@mollisnec.com'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Rahim'; $kliencis->lastName = 'Beach'; $kliencis->town = 'St. Asaph'; $kliencis->address = '276-1372 Neque Road'; $kliencis->email = 'aliquet.Proin.velit@turpisegestas.co.uk'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Ali'; $kliencis->lastName = 'Hancock'; $kliencis->town = 'Hastings'; $kliencis->address = '5527 Dictum St.'; $kliencis->email = 'ut.eros@loremtristiquealiquet.ca'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Burke'; $kliencis->lastName = 'Underwood'; $kliencis->town = 'Paglieta'; $kliencis->address = '8683 Tempus St.'; $kliencis->email = 'elit.fermentum.risus@luctuset.com'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Vivian'; $kliencis->lastName = 'Hill'; $kliencis->town = 'Zandhoven'; $kliencis->address = '325-1176 Cras Rd.'; $kliencis->email = 'Fusce.aliquam.enim@diam.com'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Tasha'; $kliencis->lastName = 'Hess'; $kliencis->town = 'Boignee'; $kliencis->address = 'Ap #939-1665 Ultrices. St.'; $kliencis->email = 'tincidunt@aceleifendvitae.ca'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Colt'; $kliencis->lastName = 'Frank'; $kliencis->town = 'Gilly'; $kliencis->address = 'P.O. Box 722, 9202 Dignissim Ave'; $kliencis->email = 'metus@commodo.ca'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Myra'; $kliencis->lastName = 'Meyer'; $kliencis->town = 'Amiens'; $kliencis->address = '575-8786 Porttitor Av.'; $kliencis->email = 'libero.Donec.consectetuer@nullaIntegervulputate.com'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Serina'; $kliencis->lastName = 'Kaufman'; $kliencis->town = 'White Rock'; $kliencis->address = '6041 Nulla St.'; $kliencis->email = 'luctus.vulputate.nisi@quama.co.uk'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Paki'; $kliencis->lastName = 'Fischer'; $kliencis->town = 'Houston'; $kliencis->address = 'Ap #449-8056 Dui Avenue'; $kliencis->email = 'lobortis.quis.pede@idante.co.uk'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Isabelle'; $kliencis->lastName = 'Schroeder'; $kliencis->town = 'Cervinara'; $kliencis->address = '5080 Elementum Rd.'; $kliencis->email = 'eu@tincidunt.org'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Tasha'; $kliencis->lastName = 'Pennington'; $kliencis->town = 'Saint-Brieuc'; $kliencis->address = '405-4316 Natoque St.'; $kliencis->email = 'lacus.vestibulum@adipiscing.org'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Ethan'; $kliencis->lastName = 'Cobb'; $kliencis->town = 'Albury'; $kliencis->address = 'Ap #849-429 Luctus Av.'; $kliencis->email = 'justo@dolor.org'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Oprah'; $kliencis->lastName = 'Delaney'; $kliencis->town = 'Cheltenham'; $kliencis->address = '8854 Tellus. Road'; $kliencis->email = 'nisl@eleifendnon.co.uk'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Aquila'; $kliencis->lastName = 'Horne'; $kliencis->town = 'Sint-Pieters-Kapelle'; $kliencis->address = '928-2355 Ligula Ave'; $kliencis->email = 'eleifend@Praesent.net'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Kaden'; $kliencis->lastName = 'Graves'; $kliencis->town = 'Pointe-du-Lac'; $kliencis->address = 'Ap #229-6259 Sed Av.'; $kliencis->email = 'elementum@tortorInteger.co.uk'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Sybill'; $kliencis->lastName = 'Williamson'; $kliencis->town = 'Idaho Falls'; $kliencis->address = 'Ap #115-4992 Massa Avenue'; $kliencis->email = 'Proin.eget@Nunccommodo.org'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Hayley'; $kliencis->lastName = 'Gould'; $kliencis->town = 'Brahmapur'; $kliencis->address = 'Ap #155-8578 Erat, Rd.'; $kliencis->email = 'molestie@ametconsectetueradipiscing.edu'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Halee'; $kliencis->lastName = 'Russell'; $kliencis->town = 'Rivello'; $kliencis->address = '5628 Pretium Avenue'; $kliencis->email = 'amet.ornare@nislelementumpurus.edu'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Angela'; $kliencis->lastName = 'Woodward'; $kliencis->town = 'Derby'; $kliencis->address = 'Ap #807-5040 In Ave'; $kliencis->email = 'ridiculus.mus.Proin@apurusDuis.edu'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Yael'; $kliencis->lastName = 'Walker'; $kliencis->town = 'Alix'; $kliencis->address = '506-8381 Ligula. Road'; $kliencis->email = 'velit@parturientmontes.net'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Knox'; $kliencis->lastName = 'Rasmussen'; $kliencis->town = 'Matera'; $kliencis->address = 'P.O. Box 578, 4710 Urna Rd.'; $kliencis->email = 'Nunc.commodo@tristique.edu'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Jerry'; $kliencis->lastName = 'Wagner'; $kliencis->town = 'Talca'; $kliencis->address = 'P.O. Box 827, 7664 Nisl. Street'; $kliencis->email = 'Phasellus.nulla@ullamcorperviverraMaecenas.com'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Kylee'; $kliencis->lastName = 'Townsend'; $kliencis->town = 'Arsoli'; $kliencis->address = 'P.O. Box 519, 5779 Feugiat St.'; $kliencis->email = 'dapibus.gravida.Aliquam@at.com'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Ahmed'; $kliencis->lastName = 'Cain'; $kliencis->town = 'Nedlands'; $kliencis->address = '975-1894 Dis Street'; $kliencis->email = 'elit.erat.vitae@gravida.org'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Lesley'; $kliencis->lastName = 'Lawson'; $kliencis->town = 'Cochrane'; $kliencis->address = '823-7072 Euismod Ave'; $kliencis->email = 'tincidunt.congue@nuncest.ca'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Kennedy'; $kliencis->lastName = 'Wilson'; $kliencis->town = 'Enterprise'; $kliencis->address = '540-8514 Pellentesque St.'; $kliencis->email = 'molestie@euismodestarcu.com'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Eric'; $kliencis->lastName = 'Newton'; $kliencis->town = 'Talcahuano'; $kliencis->address = '3398 Hendrerit Av.'; $kliencis->email = 'ornare@penatibus.net'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Branden'; $kliencis->lastName = 'Roberts'; $kliencis->town = 'Chiauci'; $kliencis->address = '6727 Ac St.'; $kliencis->email = 'elementum@arcuVestibulum.edu'; $kliencis->save();
        $kliencis = new \App\klienci(); $kliencis->firstName = 'Kay'; $kliencis->lastName = 'Leonard'; $kliencis->town = 'Grimsby'; $kliencis->address = '701-2411 Cursus Avenue'; $kliencis->email = 'ornare.lectus.ante@Cumsociisnatoque.co.uk'; $kliencis->save();


    }
}