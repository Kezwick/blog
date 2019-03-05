{% extends "/admin/layout.php" %}


{% block content %}
<div class="row">
    <div class="col-md-12">
        <h2>{{title}}</h2>
    </div>
</div>
<!-- /. ROW  -->

<hr />
<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-pencil-square-o"></i>
                </span>
            <div class="text-box" >
                <p class="main-text">120 Статей Мы создали за все время</p>

            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
            <div class="text-box" >
                <p class="main-text">30 Категорий на сайте</p>

            </div>
        </div>
    </div>

<!-- /. ROW  -->
<hr />
{% endblock %}
