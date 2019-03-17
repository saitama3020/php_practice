<?php

class MySessionHandler implements SessionHandlerInterface {
  function open($save_path, $name){
    return true;
  }

  function read($session_id){
    $session_data = '';

      $db = get_db();
      if($stmt = $db->prepare("
      SELECT $session_data
      FROM php_sessions
      WHERE session_id=?")){
        $stmt->bind_param("s", $session_id);
        $stmt->bind_result($session_data);
        $stmt->execute();
        $stmt->fetch();
        $stmt->close();
        $stmt = null;
      }
      $db->close();
      $db=null;
      return $session_data;
  }

  function write($session_id, $session_data){
    $affected_rows = 0;

    date_default_timezone_set("UTC");
    $session_updated = time();

    $db = get_db();

    if($stmt = $db->prepare("
    INSERT INTO php_sessions (
      session_id, session_updated, session_data)
      VALUES(?,?,?)
      ON DUPLICATE KEY hash_update
        session_updated=?
        session_data=?")){
          $stmt->bind_param('sisis',
            $session_id,
            $session_updated,
            $session_data,
            $session_updated,
            $session_data);
            $stmt->execute();
            $affected_rows = $stmt->affected_rows;
            echo $affected_rows . "<br>";
            $stmt->close();
            $stmt = null;
        }


        $db->close();
        $db=null;

        return $affected_rows ? true : false;
  }

  function destroy($session_id){
    $db = get_db();

    if($stmt = $db->prepare("
    DELETE FROM php_sessions
    WHERE session_id = ?")){
      $stmt->bind_param('s', $session_id);
      $stmt->execute();
      $stmt->close();
      $stmt=null;
    }
    $db->close();
    $db=null;

    return true;
  }

  function close() {
    return true;
  }

  function gc($maxlifetime){
    $db = get_db();

    if($stmt = $db->prepare("
    DELETE
    FROM php_sessions
    WHERE session_updated < ?")){
      date_default_timezone_set("UTC");
      $t = time() - $maxlifetime;

      $stmt->bind_param('i', $t);
      $stmt->execute();
      $stmt->close();
      $stmt=null;
    }

    $db->close();
    $db = null;
    return true;
  }
}
function get_db(){
  $db = null;
  $db = new mysqli(
    '127.0.0.1:3306',
    'root',
    'root',
    'php'
  );
  if($db->connect_errno){
      die('Unable to connect');
  }
  return $db;
}
  $mysql_sesshandler = new MySessionHandler();
  session_set_save_handler($mysql_sesshandler, true);
  session_start();

 ?>
