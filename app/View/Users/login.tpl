<div class="users form">
    <fieldset>
        <legend>{{ "Porfavor insira seu usuario e senha" }}</legend>
        {{ flash.render('auth') }}
        {{ form.create('User') }}
        {{ form.input('username') }}
        {{ form.input('password') }}
        {{ form.end('Logar')}}
    </fieldset>
</div>