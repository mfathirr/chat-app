<div>
    <ul class="list-group w-75 mx-auto mt-3 container-full">
        @foreach ($users as $user)
        <li class="list-group-item list-group-item-action">{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
