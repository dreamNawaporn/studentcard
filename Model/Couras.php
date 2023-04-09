<?php
class Team{
    private $ConDB;
    public function __construct(){
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
    }

    public function getTeam()
    {
        $sql = "SELECT * FROM user";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            $data = json_encode($result);
            return $data;
        }else {
            return false;
        }
    }

    public function getUserDetail($identifier)
    {
        $sql = "SELECT * FROM user where identifier = ".$identifier;
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetch(PDO::FETCH_ASSOC);
            $data = json_encode($result);
            return $data;
        }else {
            return false;
        }
    }

    public function getSearch($keywords) 
    {
        $sql = "SELECT * FROM user WHERE first_name LIKE '{$keywords}%' OR team = '{$keywords}'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            $data = json_encode($result);
            return $data;
        }else {
            return false; 
        }
    }

    public function Del($identifier)
    {
        $sql = "DELETE FROM `user` WHERE `identifier`='".$identifier."'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }

    public function Edit($identifier,
    $first_name,
    $last_name,
    $team,
    $position,
    $image,
    $detail_user)
    {
        $sql = "UPDATE user SET first_name='$first_name',
        last_name='$last_name',
        team='$team',
        position='$position',
        image='$image',
        detail_user='$detail_user' 
        WHERE identifier='$identifier'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }

    public function Add($data)
    {
        $sql = "INSERT INTO `user` (`identifier`, `first_name`, `last_name`, `team`, `position`, `image`, `detail_user`)";
        $sql .= " VALUES ('', :first_name, :last_name, :team, :position , :image , :detail_user);";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute($data)){
            return true;
        }else {
            return false;
        }
    }


    public function Select($team)
    {
        $sql = "SELECT * FROM user WHERE `team`='".$team."'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            $data = json_encode($result);
            return $data;
        }else {
            return false; 
        }
    }
}

?>