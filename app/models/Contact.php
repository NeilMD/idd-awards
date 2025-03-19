<?php

class Contact extends Model {
    public function submitContact($name, $email, $message) {
        $stmt = $this->db->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $message]);
    }
}

?>