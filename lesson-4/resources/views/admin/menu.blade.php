<li class="nav-item">
    <a class="nav-link{{ request()->routeIs('home')?' active':'' }}" href="{{ route('home') }}">Главная</a>
</li>

<li class="nav-item">
    <a class="nav-link{{ request()->routeIs('admin.index')?' active':'' }}" href="{{ route('admin.index') }}">Главная админка</a>
</li>

<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('admin.test1')?' active':'' }}" href="{{ route('admin.test1') }}">Скачать изображение</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('admin.test2')?' active':'' }}" href="{{ route('admin.test2') }}">Скачать текст</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('admin.create')?' active':'' }}" href="{{ route('admin.create') }}">Добавить новость</a>
</li>
