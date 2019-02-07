<?php

function ShowBeautifulBox($title,$intro ,$text){
        echo '<section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">'.$title.'</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="edit" data-toggle="tooltip"
                    title="Edit">
              <i class="fa fa-edit"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          '.$intro.'
        </div>
        <div class="box-footer">'.$text.'</div>
      </div>
    </section>';
}

function ShowBeautifulEditBox($title,$intro,$text){
    echo '<section class="content">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">
          <input type="title" class="form-control" placeholder="'.$title.'">
          </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="edit" data-toggle="tooltip"
                    title="Edit">
              <i class="fa fa-edit"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <input type="intro" class="form-control" placeholder="'.$intro.' ">
        </div>
        <div class="box-footer">
        <input type="text" class="form-control" placeholder="'.$text.'">
        </div>
      </div>
    </section>';

}
function ShowFishText()
{

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = (int)$_GET['id'];
    } else {
        $id = 1;
    }

    $mysqli = new mysqli('192.168.10.10', 'homestead', 'secret', 'homestead');
    $mysqli->set_charset("utf8");

    if ($mysqli->connect_errno) {
//сообщения об ошибке которые пользователь не должен видеть и никогда не увидет
        echo "Извините, возникла проблема на сайте";

        echo "Ошибка: Не удалась создать соединение с базой MySQL и вот почему: \n";
        echo "Номер ошибки: " . $mysqli->connect_errno . "\n";
        echo "Ошибка: " . $mysqli->connect_error . "\n";

        exit;
    }

    $sql = "SELECT id, title, intro, text FROM Article WHERE id = $id";
    if (!$result = $mysqli->query($sql)) {
//сообщения об ошибке которые пользователь не должен видеть и никогда не увидет
        echo "Извините, возникла проблема в работе сайта.";
        echo "Ошибка: Ваш запрос не удался и вот почему: \n";
        echo "Запрос: " . $sql . "\n";
        echo "Номер ошибки:   " . $mysqli->errno . "\n";
        echo "Ошибка:   " . $mysqli->error . "\n";
        exit;
    }

    if ($result->num_rows === 0) {
        // сообщение о том что в id ничего нет, а должно бы
        //echo "Мы не смогли найти совпадение для $id, простите. Пожалуйста, попробуйте еще раз.";
        goUri('/admin/view/404.html');
        exit;
    }

    $article = $result->fetch_assoc();
    ShowBeautifulBox($article['title'],$article['intro'],$article['text']);
    ShowBeautifulEditBox($article['title'],$article['intro'],$article['text']);

    $result->free();
    $mysqli->close();
}
