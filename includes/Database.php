  <?php
  class Database {

    private $host, $username, $password, $connection;
    public function __construct($ihost, $iusername, $ipassword){
        $this->host = $ihost;
        $this->username = $iusername;
        $this->password = $ipassword;
    }
    public function connectdb(){
         $this->connection = mysql_connect($this->host, $this->username, $this->password)
            OR die("There was a problem connecting to the database.");
             echo 'successfully connected to database<br />';
    }
    public function select($database){
        mysql_select_db($database)
            OR die("There was a problem selecting the database.");
        echo 'successfully selected database<br />';
    }
    public function disconnectdb(){
        mysql_close($this->connection)
            OR die("There was a problem disconnecting from the database.");
    }
}
?>