<?php

include_once "dbh.class.php";

class SearchQuery extends Dbh {
    public static function createView() {
        $sql = "CREATE VIEW combined_data AS 
        SELECT * FROM gpinoy
        UNION 
        SELECT * FROM cignal;";
        $stmt = self::connect()->query($sql);
    }

}



