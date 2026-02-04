<?php
namespace App\Controllers;

class StudentController
{

    public function index()
    {
        echo '<h1>Daftar Siwa</h1>';
        echo '<p>Menampilkan Daftar Siswa</p>';
    }

    public function create()
    {
        echo '<h1>Tambah Siswa</h1>';
        echo '<p>Menampilkan Form Tambah Siswa</p>';

    }

    public function show(string $id)
    {
        echo '<h1>Detail Siswa</h1>';
        echo "<p>Menampilkan detail siswa ID: {$id}</p>";

    }
}
?>