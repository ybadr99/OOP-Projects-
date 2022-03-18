<?php


class Connection
{
    private $pdo = null;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=notes','root','');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (Exception $exception){
               echo "Error" . $exception->getMessage();
        }

    }

    public function getNotes(){
        $stmt = $this->pdo->prepare('SELECT * FROM `notes`');
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getNoteById($id){
        $stmt = $this->pdo->prepare('SELECT * FROM `notes` WHERE id = :id');

        $stmt->bindValue('id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function createNote($data){
        $stmt = $this->pdo->prepare("INSERT INTO notes(title, description, created_at) VALUES (:title, :description, :created_at)");
        $stmt->bindValue('title', $data['title']);
        $stmt->bindValue('description',$data['description']);
        $stmt->bindValue('created_at',date('Y-m-d h:m'));

        return $stmt->execute();
    }

    public function removeNote($id){
        $stmt = $this->pdo->prepare("DELETE FROM `notes` WHERE id = :id");
        $stmt->bindValue('id', $id);
        return $stmt->execute();
    }

    public function updateNote($id, $data){
        $stmt = $this->pdo->prepare("UPDATE notes SET title = :title, description = :description WHERE id = :id");
        $stmt->bindValue('id', $id);
        $stmt->bindValue('title', $data['title']);
        $stmt->bindValue('description',$data['description']);
//        $stmt->bindValue('created_at',date('Y-m-d h:m'));
        return $stmt->execute();
    }

}

return new Connection();
