<h4>New Comments:</h4>
<ul>
    @foreach($comments as $id => $comment)
        <li class="text-sm"> [ID {{ $id }}] {{ $comment }}</li>
    @endforeach
</ul>
