<?php
require_once 'config/config.php';
require_once 'controller/functions.php';
require_once 'model/models.php';
require_once 'controller/student_controller.php';
require_once 'controller/role_controller.php';


abstract class Controller {

    //fungsi ini digunakan untuk menampilkan semua data
    abstract static function index();

    //fungsi ini digunakan untuk menampilkan data tertentu, berdasarkan parameter $data
    abstract static function show($data); 

    //fungsi ini digunakan untuk menampilkan formulir untuk menambahkan data baru 
    abstract static function add(); 

    //fungsi ini digunakan untuk menyimpan data yang ditambahkan pada formulir
    abstract static function save(); 

    //fungsi ini digunakan untuk menampilkan formulir untuk mengedit data tertentu, berdasarkan parameter $data
    abstract static function edit($data); 

    //fungsi ini digunakan untuk memperbarui data tertentu, berdasarkan parameter $data
    abstract static function update($data); 

    //fungsi ini digunakan untuk menghapus data tertentu yang terdapat pada formulisr, berdasarkan parameter $data
    abstract static function remove($data);
}

abstract class AbstractStudents {

    //fungsi ini digunakan untuk memilihh semua data dari tabel student
    abstract static function select(); 

    //fungsi ini digunakan untuk memasukkan data kedalam tabel student berdasarkan parameter tertentu
    abstract static function insert($id, $name, $email, $role_fk); 

    //fungsi ini digunakan untuk menghapus semua data dari tabel student
    abstract static function delete(); 

    //fungsi ini digunakan untuk menggabungkan table student dengan table peran berdasarkan id peran.
    //parameter $clauseAddition digunakan untuk memfilter hasil gabungan
    abstract static function joinRoles($clauseAddition = ""); 

    // fungsi ini digunakan untuk mengembalikan data yang baru saja diambil dari database
    abstract static function fresh(); 

    //fungsi ini digunakan untuk memilih data berdasarkan parameter $id
    abstract static function selectById($id); 

    //fungsi ini digunakan untuk memilih data berdasarkan kondisi yang diberikan. 
    abstract static function selectWhere($clause); 

    //fungsi ini digunakan untuk memperbarui data berdasarkan id, parameter tertentu sebagai data student yang akan diperbarui 
    abstract static function updateById($id, $name, $email, $role_fk); 

    //fungsi ini digunakan untuk memperbarui data berdasarkan kodisi yang diberikan.
    abstract static function updateWhere($clause, $name, $email, $role_fk); 

    //fungsi ini digunakan untuk menghapus data siswa berdasarkan paramaeter $id
    abstract static function deleteById($id);  

    //fungsi ini digunakan untuk menghapus data sesuai kondisi yang diberikan.
    abstract static function deleteWhere($clause);
}


interface CustomFunctions {
    static function purge();
    static function restore();
}