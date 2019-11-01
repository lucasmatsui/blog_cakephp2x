<h1 id="main__title">Posts</h1>
{{ 
    html.link('Adicionar Post', 
        {'controller':'posts', 'action':'add'}, 
        {'class':'button button__addPost'}    
    )|raw 
}}
<table>
    <tr>
        <th>Id</th>
        <th>Titulo</th>
        <th>Criado</th>
        <th>Ações</th>
    </tr>
    {% for post in posts %}
        <tr>
            <td>{{ post.Post.id }}</td>
            <td>
                {{
                    html.link((post.Post.title), 
                        {'controller':'posts', 'action':'view' ~ '/' ~ post.Post.id}     
                    )|raw 
                }}
            </td>
            <td>
                {{ post.Post.created|date('d/m/Y H:i') }}
            </td>
            <td>
                {% 
                if (user_role is sameas('admin')) 
                    or (post.Post.user_id is sameas(id_user_logged)) 
                    and (user_role is sameas('author'))
                %}
                    {{
                        html.link('Editar', 
                            {'action':'edit' ~ '/' ~ post.Post.id}, 
                            {'class':'button button__edit'}    
                        )|raw
                    }}
                    {{
                        html.link('Deletar', 
                            {'action':'delete' ~ '/' ~ post.Post.id}, 
                            {'class':'button button__delete', 'confirm':'Você tem certeza?'}    
                        )|raw 
                    }}
                {% else %}
                    {{ "Sem permissões de alteração" }}
                {% endif %}
            </td>
        </tr>
    {% endfor %}
    {{ not posts }}
</table>
