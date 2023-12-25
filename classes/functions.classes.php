<?php

class Not extends Db
{
    public function notGetir()
    {
        $query = "SELECT notlar.not_id, notlar.not_baslik, notlar.not_icerik, oncelik.oncelik_durum, oncelik.alert_type FROM notlar INNER JOIN oncelik ON notlar.oncelik_id = oncelik.oncelik_id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
class Oncelik extends Db
{
    public function oncelikGetir()
    {
        $query = "SELECT * from oncelik";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

?>