<?php

class Crud_model {

    private $db;
    private $table;

    public function __construct()
    {
        $this->db = new Database;
        $this->table = 'mahasiswa';
    }

    public function getAll()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function insert($data)
    {
        $this->db->query("INSERT INTO " . $this->table . 
        " VALUES ('', :nama, :npm, :email, :jurusan)");

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('npm', $data['npm']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function remove($id)
    {
        $this->db->query("DELETE FROM " . $this->table . 
        " WHERE id=:id");

        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function update($data)
    {
        $this->db->query("UPDATE " . $this->table . 
        " SET 
            nama=:nama, npm=:npm, email=:email, jurusan=:jurusan
          WHERE id=:id");

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('npm', $data['npm']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function search()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM " . $this->table . " WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}