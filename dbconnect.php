test bluehost db connecton
<?php






$host = "localhost";
$user = "sweenez4_sweenz1";
$password = "DATA!!";
$database = "sweenez4_DB";
$port = "3306";
$socket = "";

$con = mysqli_connect($host, $user, $password, $database);
if (!$con) {
    die('Could not reach database: Error Code ' . mysqli_error() . "<br>");
} else {

    echo '<h1>WE IN THERE</h1> ' . "<br>" . "<br>" . "<br>";


    $sql = "INSERT INTO testINSERT (text)
VALUES ('yeah?')";


    if ($con->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}















/*
 * 
 * 
 *          NEIT DB
 * 
 * 
            
function db_Connect() {
    $config = array (
            'DB_DNS' => 'mysql:host=ict.neit.edu;port=5500;dbname=se266_001248229',
            'DB_USER' => 'se266_001248229',
            'DB_PASSWORD' => '001248229'
    );
    
    $db = new PDO($config['DB_DNS'], $config['DB_USER'], $config['DB_PASSWORD']);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
    return $db;
}
$db = db_Connect();
//print_r ($db);
 * /*
 */


?>

