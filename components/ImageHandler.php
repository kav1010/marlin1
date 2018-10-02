<?php

class ImageHandler
{

    protected $db;
    private $uploads_dir = 'uploads';

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function save($table, $id, $file)
    {
        if ($file["error"] == 0) {
            $tmp_name = $file["tmp_name"];
            $name = basename($file["name"]);
            move_uploaded_file($tmp_name, "$this->uploads_dir/$name");

            $this->db->update($table, ["image" => $name], $id);
        }

        return false;
    }

    public function delete($name)
    {

        $file = "$this->uploads_dir/$name";
        if (file_exists($file) && $name)
            unlink($file);
    }

}