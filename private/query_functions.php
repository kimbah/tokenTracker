<?php

    function find_all_tokens() {
        global $db;
        
        $sql = "SELECT * FROM tokens ";
        $sql .=  "ORDER BY position ASC";
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

    function update_token($token) {
        global $db;

        $sql = "UPDATE tokens SET ";
        $sql .= "token='" . $token['token'] . "', ";
        $sql .= "ticker='" . $token['ticker'] . "', ";
        $sql .= "quantity='" . $token['quantity'] . "', ";
        $sql .= "position='" . $token['position'] . "', ";
        $sql .= "visible='" . $token['visible'] . "' ";
        $sql .= "WHERE id='" . $token['id'] . "' ";
        $sql .= "LIMIT 1";

        $result = mysqli_query($db, $sql);
        // For UPDATE statements, $result is true/false
        if($result) {
        return true;
        } else {
        // UPDATE failed
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
        }

     }

    function delete_token($id) {
        global $db;

        $sql = "DELETE FROM tokens ";
        $sql .= "WHERE id='" . $id . "' ";
        $sql .= "LIMIT 1";
        $result = mysqli_query($db, $sql);

        // For DELETE statements, $result is true/false
        if($result) {
        return true;
        } else {
        // DELETE failed
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
        }
    }

    function find_all_exchanges() {
        global $db;

        $sql = "SELECT * FROM exchanges ";
        $sql .= "ORDER BY position ASC";
        $result = mysqli_query($db, $sql);
        confirm_result_set($result);
        return $result;
    }

    function find_exchange_by_id($id) {
        global $db;

        $sql = "SELECT * FROM exchanges ";
        $sql .= "WHERE id='" . $id . "'";
        $result = mysqli_query($db, $sql);
        confirm_result_set($result);
        $exchange = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return $exchange; // returns an assoc. array
  }

    function insert_exchange($exchange) {
        global $db;

        $sql = "INSERT INTO exchanges ";
        $sql .= "(name, kyc, position, visible, location) ";
        $sql .= "VALUES (";
        $sql .= "'" . $exchange['name'] . "',";
        $sql .= "'" . $exchange['kyc'] . "',";
        $sql .= "'" . $exchange['position'] . "',";
        $sql .= "'" . $exchange['visible'] . "',";
        $sql .= "'" . $exchange['location'] . "'";
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

    function update_exchange($exchange) {
        global $db;

        $sql = "UPDATE exchanges SET ";
        $sql .= "name='" . $exchange['name'] . "', ";
        $sql .= "kyc='" . $exchange['kyc'] . "', ";
        $sql .= "position='" . $exchange['position'] . "', ";
        $sql .= "visible='" . $exchange['visible'] . "', ";
        $sql .= "location='" . $exchange['location'] . "' ";
        $sql .= "WHERE id='" . $exchange['id'] . "' ";
        $sql .= "LIMIT 1";

        $result = mysqli_query($db, $sql);
        // For UPDATE statements, $result is true/false
        if($result) {
        return true;
        } else {
        // UPDATE failed
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
        }
    }

    function delete_exchange($id) {
        global $db;

        $sql = "DELETE FROM exchanges ";
        $sql .= "WHERE id='" . $id . "' ";
        $sql .= "LIMIT 1";
        $result = mysqli_query($db, $sql);

        // For DELETE statements, $result is true/false
        if($result) {
        return true;
        } else {
        // DELETE failed
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
        }
    }
?>