<fieldset>
<legend>O que você está pensando {{ username }} ?</legend>
{{ form.create('Post') }}
{{ form.input('title') }}
{{ form.input('body', {'rows': '3'}) }}
{{ form.end('Postar')}}
</fieldset>



