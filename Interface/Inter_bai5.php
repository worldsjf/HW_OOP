<?php
interface Encryptable {
    public function encrypt($data);
    public function decrypt($encryptedData);
}

class AES implements Encryptable {
    public function encrypt($data) {
        echo "Encrypting data using AES...";
    }

    public function decrypt($encryptedData) {
        echo "Decrypting AES encrypted data...";
    }
}

class DES implements Encryptable {
    public function encrypt($data) {
        echo "Encrypting data using DES...";
    }

    public function decrypt($encryptedData) {
        echo "Decrypting DES encrypted data...";
    }
}

$aes = new AES();
$aes->encrypt("Data to encrypt"); 
$aes->decrypt("Encrypted data"); 
echo "<br>";
$des = new DES();
$des->encrypt("Data to encrypt"); 
$des->decrypt("Encrypted data"); 
