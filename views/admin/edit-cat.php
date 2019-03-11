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
                <form method="post" action="/admin/cat-edit">
    <div class="form-group">
        <label>Название</label>
        <input name="name" class="form-control" value="{{category.name}}" />
    </div>

    <div class="form-group">
        <label>Описание</label>
        <input name="title" class="form-control"  value="{{category.description}}" />
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
