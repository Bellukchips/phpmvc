<?php

class Mahasiswa_model{

    private $mhs = [

            [
                "nama" => "Jaya",
                "nim"=> "232903232",
                "email" => "jaya@mail.com",
                "jurusan"=> "Teknik Informatika"
            ],
            [
                "nama" => "Agung",
                "nim"=> "2345534343",
                "email" => "agung@mail.com",
                "jurusan"=> "Teknik Informatika"
            ],
            [
                "nama" => "Dani",
                "nim"=> "3545342343",
                "email" => "dani@mail.com",
                "jurusan"=> "Teknik Informatika"
            ],

        ];

    private $db;
    private $stmt;

    public function __construct()
    {   
            //data source name
            // $dsn = 'mysql:host=localhost;dbname=phpmvc';

            // try{
            //     $this->db = new PDO($dsn,'root','');
            // }catch(PDOException $e){
            //     die($e->getMessage());
            // }
    }
    public function getAllMhs(){
        // $this->stmt = $this->db->prepare('select * from mahasiswa');
        // $this->stmt->execute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        return $this->mhs;
    }

}