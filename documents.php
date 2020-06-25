
        <?php
        $servername = "didacticgamesbywairon-mysqldbserver.mysql.database.azure.com" ;
        $database = "games";
        $username =  "mysqldbuser@didacticgamesbywairon-mysqldbserver";
        $password = "Admin1256";

        echo "Вывод игр", "<br>";
$query = "SELECT * FROM Игры";
$select = mysqli_query ($conn, $query);
while ($note = mysqli_fetch_array($select)) 
{
    echo $note ['Код_игры'], "<br>";
    echo $note ['Название_игры'], "<br>";
}
        ?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLES -->
    <link rel="stylesheet" href="css/DocumentsMain.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@1&family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">

    <!-- SCRIPTS -->
    <script src="https://kit.fontawesome.com/a58d7533d9.js" crossorigin="anonymous"></script>

    <title>ФАЙЛОВОЕ ХРАНИЛИЩЕ </title>
</head>

<body>
    <div class="main">
        <div class="menu">
            <div class="nav_main">
                <!-- logo -->
                <a href="index.html">
                    <img src="img/favicon-32x32.png">
                </a>
            </div>

            <!-- nav_menu_Buttons -->
            <div class="nav_menu_buttons">

                <div class="nav_fa_games">
                    <a href="games.html">
                        <span class="fa_games"><i class="fas fa-gamepad"></i></span>
                        <span class="nav_games">ИГРЫ</span>
                    </a>
                </div>

                <div class="nav_fa_reading">
                    <a href="books.html">
                        <span class="fa_reading"><i class="fas fa-book-open"></i></span>
                        <span class="nav_reading">ПРЕЗЕНТАЦИИ</span>
                    </a>
                </div>

                <div class="nav_fa_videos">
                    <a href="videos.html">
                        <span class="fa_videos"><i class="fab fa-youtube"></i></span>
                        <span class="nav_videos">ВИДЕО</span>
                    </a>
                </div>

                <div class="nav_fa_Zone">
                    <a href="documents.html">
                        <span class="fa_Zone"><i class="fa fa-file" aria-hidden="true"></i></span>
                        <span class="nav_Zone">ФАЙЛОВОЕ ХРАНИЛИЩЕ</span>
                    </a>
                </div>

            </div>
        </div>

        <!-- gradePage -->
        <div class="gradePage">
            <span class="grade_span_text">Поиск по<br>номеру</span>
            <span class="grade_span_k"><a href= "#">Инструкция </a></span>
            <span class="grade_span_1"><a href="#">1</a></span>
            <span class="grade_span_2"><a href="#">2</a></span>
            <span class="grade_span_3"><a href="#">3</a></span>
            <span class="grade_span_4"><a href="#">4</a></span>
            <span class="grade_span_5"><a href="#">5</a></span>
            <span class="grade_span_6"><a href="#">6</a></span>
            <span class="grade_span_7"><a href="#">7</a></span>
            <span class="grade_span_8"><a href="#">8</a></span>
        </div>
        





        <!-- instruct -->
        <div class="InstructionDoc invise ">
            <div class="video">
                <iframe width="1500" height="815" src="https://www.youtube.com/embed/n89hMYNlkQA" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="goBackInst invise"><button>ВЕРНУТЬСЯ К ВЫБОРУ ПРАВИЛ</button></div>
        </div>
        <!-- 1 -->
        <div class="FirstDoc invise  ">
            <div class="empty_panel">
            </div>
            <div class="FirstBlogInfo" style="text-align: left ;">
                <div class="FirstBlogInfo-head">«У кого хобот?»</div>
                <div class="FirstBlogInfo-txt">Цель: формировать понимание предлогов. <br>
                    Игровой материал: фигурки или бумажные животные. <br>
                    Ход игры: Взрослый выполняет различные действия с животными (меняют их местами, убирают
                    лишних,добавляют новых).
                    В это время спрашивает у ребенка, где "у кого хобот?" и контролирует правильность его ответов.
                    Затем предлагает ребенку поиграть с животными, активизируя его речь вопросами.
                    У вас ребенок будет двигать животными в соответствии с заданием .
                </div>
            </div>
            <div class="goBack invise"><button>ВЕРНУТЬСЯ К ВЫБОРУ ПРАВИЛ</button></div>
        </div>
        <!-- 2 -->
        <div class="SecondDoc invise ">
            <div class="empty_panel">
            </div>
            <div class="SecondBlogInfo" style="text-align: left ;">
                <div class="SecondBlogInfo-head">«Где сейчас машинка?»</div>
                <div class="SecondBlogInfo-txt">Цель: учить понимать предложные конструкции.<br>
                    Игровой материал: сюжетные картинки с изображением машины в разных местах.<br>
                    Ход игры: Взрослый раскладывает картинки перед ребенком.
                    Затем просит его показать машину, которая подъезжает к дому, стоит около гаража, едет по мосту, и
                    т.д.
                    у вас будет написано задание, а ребенок выбирает нужную машинку.
                </div>
            </div>
            <div class="goBackTo invise"><button>ВЕРНУТЬСЯ К ВЫБОРУ ПРАВИЛ</button></div>
        </div>
        <!-- 3 -->
        <div class="ThirdDoc invise">
            <div class="empty_panel">
            </div>
            <div class="ThirdBlogInfo" style="text-align: left ;">
                <div class="ThirdBlogInfo-head">«Где бабочка?»</div>
                <div class="ThirdBlogInfo-txt">Цель: формировать понимание предлогов. <br>
                    Игровой материал: бумажная бабочка, искусственный или настоящий цветок. <br>
                    Ход игры: Взрослый выполняет различные действия с бабочкой (сажает ее на цветок, под цветок, на
                    листик, держит над цветком, около, рядом и пр).
                    В это время спрашивает у ребенка, где бабочка и контролирует правильность его ответов.
                    Затем предлагает ребенку поиграть с бабочкой, активизируя его речь вопросами.
                    У вас ребенок будет двигать бабочкой в соответствии с заданием (помести бабочку под цветок и т/д).
                </div>
            </div>
            <div class="goBackToThree invise"><button>ВЕРНУТЬСЯ К ВЫБОРУ ПРАВИЛ</button></div>
        </div>
        <!-- 4 -->
        <div class="FourDoc invise">
            <div class="empty_panel">
            </div>
            <div class="FourBlogInfo" style="text-align: left ;">
                <div class="FourBlogInfo-head">«С какого дерева упал листок?</div>
                <div class="FourBlogInfo-txt">Цель: закрепить названия деревьев, форму родительного падежа единственного
                    числа с предлогом С. <br>
                    Наглядный материал: предметные картинки.<br>
                    Ход игры: карточки с листьями деревьев раздавались детям. Дети должны определить, листья каких
                    деревьев у них оказались, и назвать дерево: «У меня лист упал с клена».
                    У вас листик и изображение дерева (пусть ребята соединяют).</div>
            </div>
            <div class="goBackToFour invise"><button>ВЕРНУТЬСЯ К ВЫБОРУ ПРАВИЛ</button></div>
        </div>
        <!-- 5 -->
        <div class="FiveDoc invise">
            <div class="empty_panel">
            </div>
            <div class="FiveBlogInfo" style="text-align: left ;">
                <div class="FiveBlogInfo-head">«Эрудит»</div>
                <div class="FiveBlogInfo-txt">Цель: закрепить части тела животных, и образование форм родительного
                    падежа с предлогом У.<br>
                    Наглядный материал: предметные картинки.<br>
                    Ход игры: детям раздавались картинки с животными, и задаются вопросы.<br>
                    Речевой материал: - У кого большой хобот? - У кого пушистый хвост? - У кого нос пяточком? - У кого
                    длинные уши? - У кого есть копыта?
                    Дети должны выбрать нужные варианты из изображенных животных.</div>
            </div>
            <div class="goBackToFive invise"><button>ВЕРНУТЬСЯ К ВЫБОРУ ПРАВИЛ</button></div>
        </div>
        <!-- 6 -->
        <div class="SixDoc invise">
            <div class="empty_panel">
            </div>
            <div class="SixBlogInfo" style="text-align: left ;">
                <div class="SixBlogInfo-head">«Угадай,чего не стало?»</div>
                <div class="SixBlogInfo-txt">Цель: закрепить умение образовывать множественное число существительных
                    родительного падежа.<br>
                    Наглядный материал: предметные картинки.<br>
                    Ход игры: на фланелеграф вывешивалось по четыре картинки с предметами во множественном числе, затем
                    две картинки убирались, и у детей спрашивали: «Чего не стало?».
                    Картинки подбирались с разными окончаниями.</div>
            </div>
            <div class="goBackToSix invise"><button>ВЕРНУТЬСЯ К ВЫБОРУ ПРАВИЛ</button></div>
        </div>
        <!-- 7 -->
        <div class="SevenDoc invise">
            <div class="empty_panel">
            </div>
            <div class="SevenBlogInfo" style="text-align: left ;">
                <div class="SevenBlogInfo-head">«Помоги животным найти свой домик»</div>
                <div class="SevenBlogInfo-txt">Цель: закрепления знаний о жилище животных, уточнение предложного
                    падежа.<br>
                    Наглядный материал: предметные картинки.<br>
                    Ход игры: на доску вывешивались картинки с жилищем животных, а картинки с животными вывешивались под
                    жилищем в перепутанном виде. Детям предлагалось помощь животным найти свой дом.
                    Ответ дается полным предложением.</div>
            </div>
            <div class="goBackToSeven invise"><button>ВЕРНУТЬСЯ К ВЫБОРУ ПРАВИЛ</button></div>
        </div>
        <!-- 8 -->
        <div class="EightDoc invise">
            <div class="empty_panel">
            </div>
            <div class="EightBlogInfo" style="text-align: left ;">
                <div class="EightBlogInfo-head">«Страшный зверь»</div>
                <div class="EightBlogInfo-txt">Цель: формировать умение соотносить взрослых животных с названиями их
                    детенышей.<br>
                    Наглядный материал: предметные картинки.<br>
                    Ход игры: экспериментатор читал рассказ и делал паузы, показывая
                    картинки, дети должны вставлять подходящие по смыслу слова. <br>
                    Речевой материал: «У девочки Вари были кошки с …(котятами), собака с… (щенятами), утка с… (утятами),
                    курица с… (цыплятами), коза с… (козлятами).
                    Как-то раз утята побежали к реке, стали плавать и нырять, а котята, цыплята, щенята и козлята
                    смотрели на них.
                    Вдруг слышат: «Тра-та-та!» Испугались малыши и побежали к своим мамам.
                    Котята к… (кошке), щенята к… (собаке), утята к… (утке), цыплята к… (курице), козлята к… (козе).
                </div>
            </div>
            <div class="goBackToEight invise"><button>ВЕРНУТЬСЯ К ВЫБОРУ ПРАВИЛ</button></div>
        </div>

        <!-- empty -->
        <div class="empty_panel">
        </div>
        <div class="empty_panel">
        </div>
        <div class="empty_panel">
        </div>
        <div class="empty_panel">
        </div>
        <div class="empty_panel">
        </div>
        <div class="empty_panel">
        </div>
        <div class="empty_panel">
        </div>
        <div class="empty_panel">
        </div>
        <div class="empty_panel">
        </div>
        <div class="empty_panel">
        </div>
        <div class="empty_panel">
        </div>
        <div class="empty_panel">
        </div>
        <div class="empty_panel">
        </div>
        <div class="empty_panel">
        </div>
        <div class="empty_panel">
        </div>

        <div class="footer">

            <div class="footerGrade">
                <ul class="footerGrade_span_text">
                    <li class="footer_item">ПОИСК ПО НОМЕРУ</li>
                    <li class="footer_item"><a href="#">Инструкция </a></li>
                    <li class="footer_item"><a href="games.html">1й уровень</a></li>
                    <li class="footer_item"><a href="games.html">2й уровень</a></li>
                    <li class="footer_item"><a href="games.html">3й уровень</a></li>
                    <li class="footer_item"><a href="games.html">4й уровень</a></li>
                    <li class="footer_item"><a href="games.html">5й уровень</a></li>
                    <li class="footer_item"><a href="games.html">6й уровень</a></li>
                    <li class="footer_item"><a href="games.html">7й уровень</a></li>
                    <li class="footer_item"><a href="games.html">8й уровень</a></li>
                </ul>
            </div>

            <div class="footerType">
                <ul class="footerType_text">
                    <li class="footer_item">ПОИСК ПО ТИПУ</li>
                    <li class="footer_item"><a href="games.html">Все игры</a></li>
                    <li class="footer_item"><a href="videos.html">Все видео</a></li>
                    <li class="footer_item"><a href="books.html">Все презентации</a></li>
                </ul>
            </div>

            <div class="footerAbout">
                <ul class="footerAboutSite">
                    <li class="footer_item">О сайте </li>
                    <li class="footer_item"><a href="#">Воспитатели и родители </a></li>
                    <li class="footer_item"><a href="#">Помощь </a></li>
                    <li class="footer_item"><a href="#">Как использовать</a></li>
                </ul>
            </div>

            <div class="footerPrivacyPolice">
                <ul class="privacyPolice">
                    <li class="footer_item"><a href="#">Privacy Policy</a></li>
                    <li class="footer_item">©2020 Wairon</li>
                </ul>
            </div>

        </div>
    </div>

    <script src="scriptDoc.js"></script>
    <script type="text/javascript">
        document.ondragstart = noselect;
        // запрет на перетаскивание
        document.onselectstart = noselect;
        // запрет на выделение элементов страницы
        document.oncontextmenu = noselect;
        // запрет на выведение контекстного меню
        function noselect() { return false; }
    </script>
</body>

</html>