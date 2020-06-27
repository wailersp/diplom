<style>
<?php echo file_get_contents("stylePHP.css"); ?>
p{
    color: rgb(133, 121, 121);
    font-family: 'Ubuntu Condensed', sans-serif;
}
body{
    font-family: 'Ubuntu Condensed', sans-serif;
    display:flex;
    justify-content: space-around;
    align-items: center;
    flex-direction: row;
    }
    
}
</style>
<?php
$servername = "didacticgamesbywairon-mysqldbserver.mysql.database.azure.com" ;
$database = "games2";
$username =  "mysqldbuser@didacticgamesbywairon-mysqldbserver";
$password = "Admin1256";
//c
$conn = mysqli_connect ($servername, $username, $password, $database);

echo "<link rel='stylesheet' href='stylePHP.css'>";
echo "<p><p>";
echo "<body></body>";
// if ($conn) {
// echo "Соединение с сервером установлено", "<br>";
// } else {
// echo "Нет соединения с сервером";
// }

echo "Вывод игр:", "<br>","<br>";

$query = "SELECT * FROM Игры";
$select = mysqli_query ($conn, $query);

while ($note = mysqli_fetch_array($select)) 
{
    echo $note ['Код_игры'], "<br>";
    echo $note ['Название_игры'], "<br>","<br>";
}
echo  "<p>1 Где хобот? <p>","   ","<br>" ;
echo  "<p>2 Где машинка? <p>","<p>   <p>","<br>" ;
echo  "<p>3 Где бабочка? <p>","<p>   <p>","<br>" ;
echo  "<p>4 С какого дерева упал листок? <p>","<p>   <p>","<br>" ;
echo  "<p>5 Эрудит <p>","<p>   <p>","<br>" ;
echo  "<p>6 Угадай,чего не стало <p>","<p>   <p>","<br>" ;
echo  "<p>7 Помоги животным найти их домик <p>","<p>   <p>","<br>" ;
echo  "<p>8 Страшный зверь <p> ","<p>   <p>","<br>" ;
//ка
echo "Вывод категории:", "<br>","<br>";

$query = "SELECT * FROM категории_игр";
$select = mysqli_query ($conn, $query);

while ($note = mysqli_fetch_array($select)) 
{
    echo $note ['Код_категории'], "<br>";
    echo $note ['Название'], "<br>";
    echo $note ['Описание'], "<br>","<br>";
}
echo  "<p>1 Выбор картинки <p>","   ","<br>" ;
echo  "<p>2 Выбор звука <p>","   ","<br>" ;
//deti
echo "Вывод детей:", "<br>","<br>";

$query = "SELECT * FROM дети";
$select = mysqli_query ($conn, $query);

while ($note = mysqli_fetch_array($select)) 
{
    echo $note ['Код_ребенка'], "<br>";
    echo $note ['ФИО'], "<br>";
    echo $note ['ВОЗРАСТ'], "<br>";
    
}
echo  "<p>1 Иванченко Зоя <p>","   ","<br>" ;
echo  "<p>2 Зайцев Саша <p>","   ","<br>" ;
echo  "<p>3 Иванов Иван <p>","   ","<br>" ;

?>