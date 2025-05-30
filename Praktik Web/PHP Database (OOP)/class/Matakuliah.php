<?php
require_once __DIR__ . '/Database.php';

class Matakuliah extends Database {
    public function insert($kode, $nama, $sks, $jam) {
        $stmt = $this->conn->prepare("INSERT INTO t_matakuliah VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isii", $kode, $nama, $sks, $jam);
        return $stmt->execute();
    }

    public function getAll($search = '') {
        if ($search) {
            $stmt = $this->conn->prepare("SELECT * FROM t_matakuliah WHERE namaMK LIKE ?");
            $like = "%$search%";
            $stmt->bind_param("s", $like);
        } else {
            $stmt = $this->conn->prepare("SELECT * FROM t_matakuliah");
        }
        $stmt->execute();
        return $stmt->get_result();
    }

    public function getById($kode) {
        $stmt = $this->conn->prepare("SELECT * FROM t_matakuliah WHERE kodeMK = ?");
        $stmt->bind_param("i", $kode);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($kode, $nama, $sks, $jam) {
        $stmt = $this->conn->prepare("UPDATE t_matakuliah SET namaMK=?, sks=?, jam=? WHERE kodeMK=?");
        $stmt->bind_param("siii", $nama, $sks, $jam, $kode);
        return $stmt->execute();
    }

    public function delete($kode) {
        $stmt = $this->conn->prepare("DELETE FROM t_matakuliah WHERE kodeMK = ?");
        $stmt->bind_param("i", $kode);
        return $stmt->execute();
    }
}
?>
