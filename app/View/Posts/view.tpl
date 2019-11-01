<div id="view__post">
  <h1>{{ post.Post.title }}</h1>
  <p><small>Criado em: {{ post.Post.created|date('d/m/Y H:i') }} </small></p>
  <p>{{ post.Post.body }}</p>
</div>

