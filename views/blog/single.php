{% extends "/blog/layout.php" %}


{% block content %}
<div class="col-md-12">




<!-- Blog Post -->

{% for article in articles %}
    <h1 class="my-4"> {{article.title}}    </h1>
<div class="card mb-4">
    <img class="card-img-top" src="{{article.image}}" alt="Card image cap">
    <div class="card-body">
        <h2 class="card-title">Опубликовано {{article.data}}</h2>
        <p class="card-text">{{article.text}}</p>

    </div>
    <div class="card-footer text-muted">
        Опубликовано {{article.data}}

    </div>
</div>
    <ul class="pagination justify-content-center mb-4">
        <li class="page-item disabled">
            <a class="page-link" href=""> &larr;Newer</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="#">Older&rarr; </a>
        </li>

    </ul>
</div>

{% endfor %}
{% endblock %}

