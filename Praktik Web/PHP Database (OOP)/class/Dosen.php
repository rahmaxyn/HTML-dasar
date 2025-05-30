<?php
require_once 'Database.php';

class Dosen extends Database {
    public function insert($namaDosen, $noHP) {
        $stmt = $this->conn->prepare("INSERT INTO t_dosen (namaDosen, noHP) VALUES (?, ?)");
        $stmt->bind_param("ss", $namaDosen, $noHP);
        return $stmt->execute();
    }

    public function getAll($search = "") {
        if ($search) {
            $stmt = $this->conn->prepare("SELECT * FROM t_dosen WHERE namaDosen LIKE ?");
            $like = "%$search%";
            $stmt->bind_param("s", $like);
        } else {
            $stmt = $this->conn->prepare("SELECT * FROM t_dosen");
        }
        $stmt->execute();
        return $stmt->get_result();
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM t_dosen WHERE idDosen = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($id, $namaDosen, $noHP) {
        $stmt = $this->conn->prepare("UPDATE t_dosen SET namaDosen=?, noHP=? WHERE idDosen=?");
        $stmt->bind_param("ssi", $namaDosen, $noHP, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM t_dosen WHERE idDosen = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
