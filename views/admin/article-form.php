{% extends "/admin/layout.php" %}


{% block content %}
<div class="row">
    <div class="col-md-12">
        <h2>{{title}}</h2>
    </div>
</div>
<!-- /. ROW  -->
<hr />
<div class="panel panel-default">
    <div class="panel-heading">
        {{random(['Давайте создадим новый шедевр!', 'О Да! Пиши в меня глубокого смысла тексты...', 'Великого флуда пост создай', 'Изречение величайшего ума вселенского масштаба'])}}
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <h2 id="loading" style="text-align:center;">Now loading...</h2>
                <form method="post" action="/admin/articleadd">
    <div class="form-group">
        <label>Заголовок</label>
        <input name="title" class="form-control" placeholder="Введите заголовок" />
    </div>
    <div class="form-group">
        <label>Выберите категорию</label>
        <select class="form-control" name="cat_id">
            {% for cat in category %}
                <option value="{{cat.id}}">{{cat.name}}</option>
             {% endfor %}

        </select>
    </div>
    <div class="form-group">
        <label>Вводный текст</label>
        <textarea name="intro" class="form-control" rows="3">Заполните краткий текст статьи.(max 240 char)</textarea>
    </div>
    <div class="form-group">
        <textarea name="text" id="mytextarea" style="display:none;"><h1>Заполните полный текст статьи.</h1></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default" name="btnartadd">Submit Button</button>
        <button type="reset" class="btn btn-primary">Reset Button</button>

    </div>
</form>
            </div>
        </div>
    </div>
</div>

{% endblock %}
