{% extends "/blog/layout.php" %}


{% block content %}

<!-- Blog Post -->

{% for article in articles %}

<div class="card mb-4">
    <img class="card-img-top" src="{{article.image}}" alt="Card image cap">
    <div class="card-body">
        <h2 class="card-title">{{article.title}}</h2>
        <p class="card-text">{{article.text}}</p>

    </div>
    <div class="card-footer text-muted">
        Posted on {{article.data}} by

    </div>
</div>
{% endfor %}
{% endblock %}

