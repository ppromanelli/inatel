<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        // LOGINS DOS USUARIOS GERENTE, CLIENTE e USUARIO
        DB::table('users')->insertGetId([
            'name' 		=> 'gerente',
            'email' 	=> 'gerente@gmail.com',
            'type' 		=> 'Manager',
            'password' 	=>  bcrypt('gerente'),
        ]);

        DB::table('users')->insertGetId([
            'name'      => 'cliente',
            'email'     => 'cliente@gmail.com',
            'type'      => 'Customer',
            'password'  =>  bcrypt('cliente'),
        ]);

        DB::table('users')->insertGetId([
            'name'      => 'usuario',
            'email'     => 'usuario@gmail.com',
            'type'      => 'User',
            'password'  =>  bcrypt('usuario'),
        ]);

        // END LOGINS DOS USUARIOS GERENTE, CLIENTE e USUARIO

        // CRIANDO CUSTOMER 1
        //CUSTOMER 'full_name','email','gender','state'
        //DEVICE 'name','mac','customers_id' ['Moto g4','Nokia','Samsung','iPhone']
        //SERVICE 'type','devices_id' ['Oi','Vivo','Claro','Tim','Nextel']

        $idCustomer1 = DB::table('customers')->insertGetId([
            'full_name'         => 'Arnoldo Shazinegui da Silva',
            'email'             => 'arnold@gmail.com',
            'gender'            => 'Masculino',
            'state'             => 'MG',
        ]);

        $idDevice1 = DB::table('devices')->insertGetId([
            'name'              => 'Nokia',
            'mac'               => '00:E0:4C:4A:C5:45',
            'customers_id'      => $idCustomer1,
        ]);

        DB::table('services')->insertGetId([
            'type'              => 'Vivo',
            'devices_id'        => $idDevice1,
        ]);

        $idDevice2 = DB::table('devices')->insertGetId([
            'name'              => 'Moto g4',
            'mac'               => '00:E0:4C:4C:EB:69',
            'customers_id'      => $idCustomer1,
        ]);

        DB::table('services')->insertGetId([
            'type'              => 'Oi',
            'devices_id'        => $idDevice2,
        ]);

        $idDevice3 = DB::table('devices')->insertGetId([
            'name'              => 'Samsung',
            'mac'               => '00:E0:4C:4C:EB:61',
            'customers_id'      => $idCustomer1,
        ]);

        DB::table('services')->insertGetId([
            'type'              => 'Vivo',
            'devices_id'        => $idDevice3,
        ]);

        // END CRIANDO CUSTOMER 1

        // CRIANDO CUSTOMER 2
        //CUSTOMER 'full_name','email','gender','state'
        //DEVICE 'name','mac','customers_id' ['Moto g4','Nokia','Samsung','iPhone']
        //SERVICE 'type','devices_id' ['Oi','Vivo','Claro','Tim','Nextel']

        $idCustomer = DB::table('customers')->insertGetId([
            'full_name'         => 'Maria da Lúcia',
            'email'             => 'marylu@gmail.com',
            'gender'            => 'Feminino',
            'state'             => 'MG',
        ]);

        $idDevice1 = DB::table('devices')->insertGetId([
            'name'              => 'Nokia',
            'mac'               => '00:E0:4C:0E:3B:02',
            'customers_id'      => $idCustomer,
        ]);

        DB::table('services')->insertGetId([
            'type'              => 'Claro',
            'devices_id'        => $idDevice1,
        ]);

        $idDevice2 = DB::table('devices')->insertGetId([
            'name'              => 'Samsung',
            'mac'               => '00:E0:4C:42:26:02',
            'customers_id'      => $idCustomer,
        ]);

        DB::table('services')->insertGetId([
            'type'              => 'Claro',
            'devices_id'        => $idDevice2,
        ]);

        // END CRIANDO CUSTOMER 2

        // CRIANDO CUSTOMER 3
        //CUSTOMER 'full_name','email','gender','state'
        //DEVICE 'name','mac','customers_id' ['Moto g4','Nokia','Samsung','iPhone']
        //SERVICE 'type','devices_id' ['Oi','Vivo','Claro','Tim','Nextel']

        $idCustomer = DB::table('customers')->insertGetId([
            'full_name'         => 'Carmen Lúcia',
            'email'             => 'carmelita@gmail.com',
            'gender'            => 'Feminino',
            'state'             => 'SP',
        ]);

        $idDevice1 = DB::table('devices')->insertGetId([
            'name'              => 'iPhone',
            'mac'               => '00:E0:4C:53:36:9F',
            'customers_id'      => $idCustomer,
        ]);

        DB::table('services')->insertGetId([
            'type'              => 'Oi',
            'devices_id'        => $idDevice1,
        ]);

        $idDevice2 = DB::table('devices')->insertGetId([
            'name'              => 'Moto g4',
            'mac'               => '00:E0:4C:57:81:08',
            'customers_id'      => $idCustomer,
        ]);

        DB::table('services')->insertGetId([
            'type'              => 'Vivo',
            'devices_id'        => $idDevice2,
        ]);

        // END CRIANDO CUSTOMER 3

        // CRIANDO CUSTOMER 4
        //CUSTOMER 'full_name','email','gender','state'
        //DEVICE 'name','mac','customers_id' ['Moto g4','Nokia','Samsung','iPhone']
        //SERVICE 'type','devices_id' ['Oi','Vivo','Claro','Tim','Nextel']

        $idCustomer = DB::table('customers')->insertGetId([
            'full_name'         => 'Andrea Aparecida',
            'email'             => 'cidinha@gmail.com',
            'gender'            => 'Feminino',
            'state'             => 'AC',
        ]);

        $idDevice1 = DB::table('devices')->insertGetId([
            'name'              => 'iPhone',
            'mac'               => '00:E0:4C:3A:12:CC',
            'customers_id'      => $idCustomer,
        ]);

        DB::table('services')->insertGetId([
            'type'              => 'Vivo',
            'devices_id'        => $idDevice1,
        ]);

        // END CRIANDO CUSTOMER 4

        // CRIANDO CUSTOMER 5
        //CUSTOMER 'full_name','email','gender','state'
        //DEVICE 'name','mac','customers_id' ['Moto g4','Nokia','Samsung','iPhone']
        //SERVICE 'type','devices_id' ['Oi','Vivo','Claro','Tim','Nextel']

        $idCustomer = DB::table('customers')->insertGetId([
            'full_name'         => 'Isabel de Souza',
            'email'             => 'isasouza@gmail.com',
            'gender'            => 'Feminino',
            'state'             => 'SP',
        ]);

        $idDevice1 = DB::table('devices')->insertGetId([
            'name'              => 'Samsung',
            'mac'               => '00:E0:4C:00:5A:5F',
            'customers_id'      => $idCustomer,
        ]);

        DB::table('services')->insertGetId([
            'type'              => 'Vivo',
            'devices_id'        => $idDevice1,
        ]);

        $idDevice2 = DB::table('devices')->insertGetId([
            'name'              => 'Samsung',
            'mac'               => '00:E0:4C:57:6D:4D',
            'customers_id'      => $idCustomer,
        ]);

        DB::table('services')->insertGetId([
            'type'              => 'Vivo',
            'devices_id'        => $idDevice2,
        ]);

        // END CRIANDO CUSTOMER 5

        // CRIANDO CUSTOMER 6
        //CUSTOMER 'full_name','email','gender','state'
        //DEVICE 'name','mac','customers_id' ['Moto g4','Nokia','Samsung','iPhone']
        //SERVICE 'type','devices_id' ['Oi','Vivo','Claro','Tim','Nextel']

        $idCustomer = DB::table('customers')->insertGetId([
            'full_name'         => 'Manuel da Padaria',
            'email'             => 'padoca@gmail.com',
            'gender'            => 'Masculino',
            'state'             => 'SP',
        ]);

        $idDevice1 = DB::table('devices')->insertGetId([
            'name'              => 'iPhone',
            'mac'               => '00:E0:4C:22:0D:EF',
            'customers_id'      => $idCustomer,
        ]);

        DB::table('services')->insertGetId([
            'type'              => 'Oi',
            'devices_id'        => $idDevice1,
        ]);

        $idDevice2 = DB::table('devices')->insertGetId([
            'name'              => 'Samsung',
            'mac'               => '00:E0:4C:66:EF:BB',
            'customers_id'      => $idCustomer,
        ]);

        DB::table('services')->insertGetId([
            'type'              => 'Nextel',
            'devices_id'        => $idDevice2,
        ]);

        $idDevice3 = DB::table('devices')->insertGetId([
            'name'              => 'Samsung',
            'mac'               => '00:E0:4C:21:B1:26',
            'customers_id'      => $idCustomer,
        ]);

        DB::table('services')->insertGetId([
            'type'              => 'Tim',
            'devices_id'        => $idDevice3,
        ]);
        // END CRIANDO CUSTOMER 6

        // CRIANDO CUSTOMER 7
        //CUSTOMER 'full_name','email','gender','state'
        //DEVICE 'name','mac','customers_id' ['Moto g4','Nokia','Samsung','iPhone']
        //SERVICE 'type','devices_id' ['Oi','Vivo','Claro','Tim','Nextel']

        $idCustomer = DB::table('customers')->insertGetId([
            'full_name'         => 'Firmino Durão',
            'email'             => 'firmduro@gmail.com',
            'gender'            => 'Masculino',
            'state'             => 'MG',
        ]);

        $idDevice1 = DB::table('devices')->insertGetId([
            'name'              => 'iPhone',
            'mac'               => '00:E0:4C:5C:71:3C',
            'customers_id'      => $idCustomer,
        ]);

        DB::table('services')->insertGetId([
            'type'              => 'Oi',
            'devices_id'        => $idDevice1,
        ]);

        $idDevice2 = DB::table('devices')->insertGetId([
            'name'              => 'Moto g4',
            'mac'               => '00:E0:4C:68:C0:25',
            'customers_id'      => $idCustomer,
        ]);

        DB::table('services')->insertGetId([
            'type'              => 'Claro',
            'devices_id'        => $idDevice2,
        ]);

        $idDevice3 = DB::table('devices')->insertGetId([
            'name'              => 'Moto g4',
            'mac'               => '00:E0:4C:78:04:9F',
            'customers_id'      => $idCustomer,
        ]);

        DB::table('services')->insertGetId([
            'type'              => 'Tim',
            'devices_id'        => $idDevice3,
        ]);
        // END CRIANDO CUSTOMER 7

        // CRIANDO CUSTOMER 8
        //CUSTOMER 'full_name','email','gender','state'
        //DEVICE 'name','mac','customers_id' ['Moto g4','Nokia','Samsung','iPhone']
        //SERVICE 'type','devices_id' ['Oi','Vivo','Claro','Tim','Nextel']

        $idCustomer = DB::table('customers')->insertGetId([
            'full_name'         => 'Pedro Paulo Romanelli',
            'email'             => 'ppromanelli@gmail.com',
            'gender'            => 'Masculino',
            'state'             => 'MG',
        ]);

        $idDevice1 = DB::table('devices')->insertGetId([
            'name'              => 'Moto g4',
            'mac'               => '00:E0:4C:7C:C2:9D',
            'customers_id'      => $idCustomer,
        ]);

        DB::table('services')->insertGetId([
            'type'              => 'Vivo',
            'devices_id'        => $idDevice1,
        ]);

        
        // END CRIANDO CUSTOMER 8
    }
}
