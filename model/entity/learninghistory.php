<?php
class LearningHistory{
    var $id;
    var $yearFrom;
    var $yearTo;
    var $schoolName;
    var $schoolAddress;
    var $idStudent;
    function __construct($id, $yearFrom, $yearTo, $schoolName, $schoolAddress, $idStudent){
        $this->id = $id;
        $this->yearFrom = $yearFrom;
        $this->yearTo = $yearTo;
        $this->schoolName = $schoolName;
        $this->schoolAddress = $schoolAddress;
        $this->idStudent = $idStudent;

    }
    static function getList($idStudent){
        $rs = array();
        for($i=0; $i < 5; $i++){
            array_push($rs,new LearningHistory(
                $i,
                2001 + $i,
                2002 + $i,
                "Phan Boi Chau" .$i,
                "Hue",
                $idStudent
            ));

        }
        //  array_push($rs,new LearningHistory(1,2001,2002,"Phan Boi Chau","Hue",$idStudent));
        //  array_push($rs,new LearningHistory(1,2001,2002,"Phan Boi Chau","Hue",$idStudent));
        //  array_push($rs,new LearningHistory(1,2001,2002,"Phan Boi Chau","Hue",$idStudent));
        return $rs;
    }
    static function getListFromFile($idStudent){
        $lines = file("../resource/learninghistory.txt", FILE_IGNORE_NEW_LINES);
        //var_dump($lines);
        $rs = array();
        foreach ($lines as $key => $value){
            $arr = explode("#",$value);
            //var_dump($arr);
            if($arr[5] == $idStudent){
              array_push($rs,new LearningHistory(
                $arr[0],
                $arr[1],
                $arr[2],
                $arr[3],
                $arr[4],
                $arr[5]
                ));

            }  
        }
            return $rs;
        }
        static function getListFromFileId($id){
            $lines = file("../resource/learninghistory.txt", FILE_IGNORE_NEW_LINES);
            //var_dump($lines);
            $rs = array();
            foreach ($lines as $key => $value){
                $arr = explode("#",$value);
                //var_dump($arr);
                if($arr[0] == $id){
                  array_push($rs,new LearningHistory(
                    $arr[0],
                    $arr[1],
                    $arr[2],
                    $arr[3],
                    $arr[4],
                    $arr[5]
                    ));
    
                }  
            }
                return $rs;
            }        
}

