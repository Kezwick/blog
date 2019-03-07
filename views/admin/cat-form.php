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
                <form method="post" action="/admin/categoryadd">
    <div class="form-group">
        <label>Заголовок</label>
        <input name="name" class="form-control" placeholder="Введите заголовок" />
    </div>

    <div class="form-group">
        <label>Описание</label>
        <textarea name="description" id="mytextarea" style="display:none;"><h1>Заполните полный текст статьи.</h1></textarea>
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