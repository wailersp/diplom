СВЕДЕНИЯ ОБ ИГРАХ

<?php
$servername = "didacticgamesbywairon-mysqldbserver.mysql.database.azure.com" ;
$database = "games";
$username =  "mysqldbuser@didacticgamesbywairon-mysqldbserver";
$password = "Admin1256";
//c
$conn = mysqli_connect ($servername, $username, $password, $database);


// if ($conn) {
// echo "Соединение с сервером установлено", "<br>";
// } else {
// echo "Нет соединения с сервером";
// }

echo "Вывод игр", "<br>";

$query = "SELECT * FROM Игры";
$select = mysqli_query ($conn, $query);

while ($note = mysqli_fetch_array($select)) 
{
    echo $note ['Код_игры'], "<br>";
    echo $note ['Название_игры'], "<br>";
}
//ка
echo "Вывод категории", "<br>";

$query = "SELECT * FROM категории_игр";
$select = mysqli_query ($conn, $query);

while ($note = mysqli_fetch_array($select)) 
{
    echo $note ['Код_категории'], "<br>";
    echo $note ['Название'], "<br>";
    echo $note ['Описание'], "<br>";
}

?>