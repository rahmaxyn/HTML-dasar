<?php
require_once __DIR__ . '/Database.php';

class Mahasiswa extends Database {
    public function insert($npm, $nama, $prodi, $alamat, $noHP) {
        $stmt = $this->conn->prepare("INSERT INTO t_mahasiswa VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("issss", $npm, $nama, $prodi, $alamat, $noHP);
        return $stmt->execute();
    }

    public function getAll($search = '') {
        if ($search) {
            $stmt = $this->conn->prepare("SELECT * FROM t_mahasiswa WHERE namaMhs LIKE ?");
            $like = "%$search%";
            $stmt->bind_param("s", $like);
        } else {
            $stmt = $this->conn->prepare("SELECT * FROM t_mahasiswa");
        }
        $stmt->execute();
        return $stmt->get_result();
    }

    public function getById($npm) {
        $stmt = $this->conn->prepare("SELECT * FROM t_mahasiswa WHERE npm = ?");
        $stmt->bind_param("i", $npm);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($npm, $nama, $prodi, $alamat, $noHP) {
        $stmt = $this->conn->prepare("UPDATE t_mahasiswa SET namaMhs=?, prodi=?, alamat=?, noHP=? WHERE npm=?");
        $stmt->bind_param("ssssi", $nama, $prodi, $alamat, $noHP, $npm);
        return $stmt->execute();
    }

    public function delete($npm) {
        $stmt = $this->conn->prepare("DELETE FROM t_mahasiswa WHERE npm = ?");
        $stmt->bind_param("i", $npm);
        return $stmt->execute();
    }
}
?>
