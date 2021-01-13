
    <li><a href="{{ url('admin/posts') }}">Posts <i class="material-icons left">post_add</i></a></li>
    <li><a href="{{ url('admin/categories') }}">Categorias <i class="material-icons left">category</i></a></li>
    <li><a href="{{ url('admin/tags') }}">Tags <i class="material-icons left">label</i></a></li>

    @if (Auth::user()->is_admin)
        <li><a href="{{ url('admin/users') }}">Usuários<i class="material-icons left">group</i></a></li>
        <li><a href="{{ url('admin/comments') }}">Comentários <i class="material-icons left">comment</i></a></li>
    @endif
