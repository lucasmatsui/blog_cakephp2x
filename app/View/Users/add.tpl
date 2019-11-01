<div class="users form">
  {{ form.create('User') }}
  <fieldset>
    <legend>{{ "Cadastrar-se" }}</legend>
    {{ form.input('username') }}
    {{ form.input('password') }}
    {{ form.input('role', {'options': {'admin':'Admin', 'author':'Author'}}) }}
    {{ form.end('Submit') }}
  </fieldset>
</div>
