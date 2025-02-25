<?php
namespace Html;
use Html as H;

class Table{
    public $title = "";
    public $numRows = 0;
    public function message() {
      echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";    
    }
}

$table = new H\Table();
$table->title = "My table";
$table->numRows = 5;

use Html\Table as T;
$table2 = new T();

?>

<!DOCTYPE html>
<html>
<body>

<?php
$table->message();
$table2->message();
?>

</body>
</html>

