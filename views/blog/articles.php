{% extends "/blog/layout.php" %}


{% block content %}
<!-- Blog Post -->
{% for article in articles %}
<li>{{ user.username|e }}</li>

<div class="card mb-4">
    <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
    <div class="card-body">
        <h2 class="card-title">{{article.title}}</h2>
        <p class="card-text">{{article.intro}}</p>
        <a href="/article/{{article.id}}" class="btn btn-primary">Читать полностью &rarr;</a>
    </div>
    <div class="card-footer text-muted">
        Posted on January 1, 2017 by
        <a href="#">Start Bootstrap</a>
    </div>
</div>
{% endfor %}
{% endblock %}