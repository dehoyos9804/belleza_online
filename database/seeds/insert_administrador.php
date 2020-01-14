<?php

use Illuminate\Database\Seeder;

class insert_administrador extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::insert("INSERT INTO tbladministrador (idadmin,nombres, apellidos, email, clave) VALUES
        		(1,'Aldair Luis','De Hoyos Teran','admin1@mail.com',md5('1')),
        		(2,'Marlyn Yiceth','Romero Pastor','admin2@mail.com',md5('1')),
        		(3,'Adalberto Segundo','Perez Muñoz','admin3@mail.com',md5('1'));
        	");
    }
}
