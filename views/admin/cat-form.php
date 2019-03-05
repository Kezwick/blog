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
        Давайте создадим новый шедевр!
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <h2 id="loading" style="text-align:center;">Now loading...</h2>
                <form method="post">
    <div class="form-group">
        <label>Заголовок</label>
        <input class="form-control" placeholder="Введите заголовок" />
    </div>
    <div class="form-group">
        <label>Выберите категорию</label>
        <select class="form-control">
            <option>One Vale</option>
            <option>Two Vale</option>
            <option>Three Vale</option>
            <option>Four Vale</option>
        </select>
    </div>
    <div class="form-group">
        <label>Вводный текст</label>
        <textarea class="form-control" rows="3">Заполните краткий текст статьи.(max 240 char)</textarea>
    </div>
    <div class="form-group">
        <textarea id="mytextarea" style="display:none;"><h1>Заполните полный текст статьи.</h1></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Submit Button</button>
        <button type="reset" class="btn btn-primary">Reset Button</button>

    </div>
</form>
            </div>
        </div>
    </div>
</div>

{% endblock %}
