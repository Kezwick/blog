<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Панель управления</a>
    </div>
    <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
        Сейчас :
        <span id="time">00:00:00</span>

        <script type="text/javascript">
            setInterval(function () {
                date = new Date(),
                    h = date.getHours(),
                    m = date.getMinutes(),
                    s = date.getSeconds(),
                    h = (h < 10) ? '0' + h : h,
                    m = (m < 10) ? '0' + m : m,
                    s = (s < 10) ? '0' + s : s,
                    document.getElementById('time').innerHTML = h + ':' + m + ':' + s;
            }, 1000);

            Data = new Date();
            Year = Data.getFullYear();
            Month = Data.getMonth();
            Day = Data.getDate();
            Hour = Data.getHours();
            Minutes = Data.getMinutes();
            Seconds = Data.getSeconds();

            // Преобразуем месяца
            switch (Month)
            {
                case 0: fMonth="января"; break;
                case 1: fMonth="февраля"; break;
                case 2: fMonth="марта"; break;
                case 3: fMonth="апреля"; break;
                case 4: fMonth="мае"; break;
                case 5: fMonth="июня"; break;
                case 6: fMonth="июля"; break;
                case 7: fMonth="августа"; break;
                case 8: fMonth="сентября"; break;
                case 9: fMonth="октября"; break;
                case 10: fMonth="ноября"; break;
                case 11: fMonth="декабря"; break;
            }

            // Вывод
            document.write(" - "+Day+" "+fMonth+" "+Year+" года");


            // Вывод
           // document.write("Текущее время: "+Hour+":"+Minutes+":"+Seconds);
        </script>   &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust">Выход</a> </div>
</nav>