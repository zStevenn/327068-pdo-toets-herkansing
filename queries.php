<?php
// Require database file
require_once './database.php';
// Create Queries class where a database connection will be instantiated upon call
class Queries
{
  // Declare variables
  private $db;

  public function __construct()
  {
    // Initiate __construct of database.php
    $this->db = new Database;
  }

  // Creates an insert into table burrito
  public function insertBurrito($size, $sauce, $beans, $rice)
  {
    // Sanitize and trim post values
    $sz = trim(filter_var($size, FILTER_SANITIZE_STRING));
    $sc = trim(filter_var($sauce, FILTER_SANITIZE_STRING));
    $b = trim(filter_var($beans, FILTER_SANITIZE_STRING));
    $r = trim(filter_var($rice, FILTER_SANITIZE_STRING));

    $sql = "INSERT INTO `burrito` (`BurritoID`, 
                                      `Formaat`, 
                                      `Saus`, 
                                      `Boon`, 
                                      `Rijst`
                                      ) 
                              VALUES (NULL, 
                                      '$sz', 
                                      '$sc', 
                                      '$b', 
                                      '$r');";
    // Prepare and execute sql
    $this->db->query($sql);
    $this->db->execute();
  }

  // Reads data in the database and concatenates it into a form row.
  public function readBurrito()
  {
    // Create select query, execute and return a FETCH_ALL
    $sql = "SELECT * FROM `burrito`";
    $this->db->query($sql);
    $this->db->execute();
    $burritoData = $this->db->resultSet();

    $rows = "";
    // Foreach loop, concatenate data into HTML Rows
    foreach ($burritoData as $d) {
      $rows .= "<tr><th scope='row'>" . $d->BurritoID . "</th>";
      $rows .= "<td>" . $d->Formaat . "</td>";
      $rows .= "<td>" . $d->Saus . "</td>";
      $rows .= "<td>" . $d->Boon . "</td>";
      $rows .= "<td>" . $d->Rijst . "</td></tr>";
    }
    // Return created HTML rows
    return $rows;
  }
}
