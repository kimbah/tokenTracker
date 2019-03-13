<?php

    function find_all_tokens() {
        global $db;
        
        $sql = "SELECT * FROM tokens ";
        $sql .=  "ORDER BY position ASC";
        $result = mysqli_query($db, $sql);
        confirm_result_set($result);
        return $result;
    }

    function find_all_exchanges() {
        global $db;

        $sql = "SELECT * FROM exchanges ";
        $sql .= "ORDER BY position ASC";
        $result = mysqli_query($db, $sql);
        confirm_result_set($result);
        return $result;
    }

    function find_token_by_id($id) {
        global $db;

        $sql = "SELECT * FROM tokens ";
        $sql .= "WHERE id='" . $id . "'";
        $result = mysqli_query($db, $sql);
        confirm_result_set($result);
        $token = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return $token; // returns an assoc. array
    }

    function insert_token($token) {
        global $db;

        $sql = "INSERT INTO tokens ";
        $sql .= "(token, ticker, quantity, position, visible) ";
        $sql .= "VALUES (";
        $sql .= "'" . $token['token'] . "',";
        $sql .= "'" . $token['ticker'] . "',";
        $sql .= "'" . $token['quantity'] . "',";
        $sql .= "'" . $token['position'] . "',";
        $sql .= "'" . $token['visible'] . "'";
        $sql .= ")";
        $result = mysqli_query($db, $sql);
        // For INSERT statements, $result is true/false
        if($result) {
        return true;
        } else {
        // INSERT failed
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
        }
    }
?>