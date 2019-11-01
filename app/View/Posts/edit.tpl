<fieldset>
<legend>Editar post</legend>
{{ form.create('Post') }}
{{ form.input('title', {'value': data_post.Post.title}) }}
{{ 
  form.input('body', 
    {'rows': '3', 'value': data_post.Post.body}    
  )
}}
{{ 
  form.input('id_post', 
    {'type': 'hidden', 'value': data_post.Post.id}    
  )
}}
{{ 
  form.input('user_id', 
    {'type': 'hidden', 'value': data_post.Post.user_id}    
  )
}}
{{ form.end('Atualizar') }}
{{ not data_post }}
</fieldset>
