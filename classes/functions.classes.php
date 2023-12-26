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
    public function notIdGetir($not_id)
    {
        $query = "SELECT * FROM notlar WHERE not_id=:not_id";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute(['not_id' => $not_id]);
        return $stmt->fetch();
    }

    public function notEkle($not_baslik, $not_icerik, $oncelik_id)
    {
        $query = "INSERT INTO notlar(not_baslik, not_icerik, oncelik_id) VALUES (:not_baslik, :not_icerik, :oncelik_id)";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            'not_baslik' => $not_baslik,
            'not_icerik' => $not_icerik,
            'oncelik_id' => $oncelik_id
        ]);
    }

    public function notGuncelle($not_id, $not_baslik, $not_icerik, $oncelik_id)
    {
        $query = "UPDATE notlar SET not_baslik=:not_baslik, not_icerik=:not_icerik, oncelik_id=:oncelik_id WHERE not_id=:not_id";
        $stmt = $this->connect()->prepare($query);
        return $stmt->execute([
            'not_id' => $not_id,
            'not_baslik' => $not_baslik,
            'not_icerik' =>$not_icerik,
            'oncelik_id' =>$oncelik_id
        ]);
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