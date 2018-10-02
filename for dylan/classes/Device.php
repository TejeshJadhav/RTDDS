<?php

/**
 * Class device
 * handles the user's devices
 */
class Device
{
    /**
     * @var object The database connection
     */
    private $db_connection = null;
    /**
     * @var array Collection of error messages
     */
    public $errors = array();
    /**
     * @var array Collection of success / neutral messages
     */
    public $messages = array();

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$device = new Device();"
     */
    public function __construct()
    {
    }

    /**
     * create a device
     */
    public function createDevice() {
      $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

      // change character set to utf8 and check interface
      if (!$this->db_connection->set_charset("utf8")) {
        $this->errors[] = $this->db_connection->error;
      }

      // if no connection errors (= working database connection)
      if (!$this->db_connection->connect_errno) {

        // escape all the data, to remove anything that could be html/javascript
        $device_name = $this->db_connection->real_escape_string(strip_tags($_POST['device_name'], ENT_QUOTES));
        $device_ip = $this->db_connection->real_escape_string(strip_tags($_POST['device_ip'], ENT_QUOTES));

        // create a device with the given name, ip and set it's default status
        // to off, which is 0
        $sql = "SELECT * FROM devices WHERE device_name = '" . $device_name ."';";
        $query_device_check = $this->db_connection->query($sql);

        // check if there are devices


        if ($query_device_check->num_rows == 1) {
          echo '{"error": "Device name already exists."}';

        } else {
            // write the device data into Database  
            $sql = "INSERT INTO `devices` (`device_id`, `device_name`, `device_ip`, `device_connected`, `device_mode`) VALUES (NULL, '" . $device_name ."', '".$device_ip."', '0', '0')";
//          $sql = "INSERT INTO devices(device_name, device_ip, device_status)
//                  VALUES('" . $device_name ."', '".$device_ip."', 0);";
          $query_new_device_insert = $this->db_connection->query($sql);
          if($query_new_device_insert) {
            echo '{"success": "Device created successfully"}';
          } else {
            echo '{"error": "Could not create device"}';
          }

        }

      } else {
        echo '{"error": "Failed to connect to database"}';
      }
    }

    /**
     * fetch all devices
     */
    public function fetchDevices()
    {
        // create a database connection
        $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        // change character set to utf8 and check interface
        if (!$this->db_connection->set_charset("utf8")) {
          $this->errors[] = $this->db_connection->error;
        }

        // if no connection errors (= working database connection)
        if (!$this->db_connection->connect_errno) {

          // fetch all the devices
          $sql = "SELECT * FROM devices";
          $result_of_fetch = $this->db_connection->query($sql);

          // check if there are devices
          if ($result_of_fetch->num_rows > 0) {

            $result_rows = $result_of_fetch->fetch_all(MYSQLI_ASSOC);
            echo json_encode($result_rows);

          } else {
            echo '{"error": "No results found."}';
          }

        } else {
          echo '{"error": "Failed to connect to database"}';
        }
    }

    /**
     * delete a device
     */
    public function deleteDevice() {
      // create a database connection
      $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

      // change character set to utf8 and check interface
      if (!$this->db_connection->set_charset("utf8")) {
        $this->errors[] = $this->db_connection->error;
      }

      if (!$this->db_connection->connect_errno) {
        $device_id = $this->db_connection->real_escape_string(strip_tags($_GET['id'], ENT_QUOTES));
        // fetch all the devices
        $sql = "DELETE FROM devices WHERE device_id = ".$device_id.";";
        $result_of_fetch = $this->db_connection->query($sql);

        // check if there are devices
        if ($result_of_fetch) {
          echo '{"success":"Sucessfully deleted device."}';

        } else {
          echo '{"error": "Device doesnt exist."}';
        }

      } else {
        echo '{"error": "Failed to connect to database"}';
      }

    }

}
