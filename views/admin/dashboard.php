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
                <p class="main-text">На сайте статей - {{articles}}</p>

            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
            <div class="text-box" >
                <p class="main-text">  На сайте категорий -{{category}}</p>

            </div>
        </div>
    </div>

<!-- /. ROW  -->
<hr />
    <div class="row">
        <div class="col-md-12 text-center ">
            <div class="panel panel-back noti-box bg-success">
                <h3> Последние публикации :</h3>
            </div>
        </div>
    </div>
    {% for article in lastArticles %}
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    {{article.title}}
                </div>
                <div class="panel-body">
                    <p><img src="{{article.image}} " class="img-responsive img-thumbnail" alt="{{article.slug}}.mp4"></p>
                    {{article.intro}}
                </div>
                <div class="panel-footer">
                    Опубликовано: {{article.data}}
                </div>
            </div>
        </div>
        {% endfor %}

    </div>
    <!-- /. ROW  -->
{% endblock %}
