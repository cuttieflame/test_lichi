<li onclick='send("{{$child_category->id}}")'
    id="list_{{$child_category->id}} ajaxSubmit" >
    {{ $child_category->name}}
    {{ $child_category->id}}
    {{ $child_category->id_parent}}
    <link href="products/child.js"></link>
@if ($child_category->groups)
    <ul class="sub-list" id="list_{{$child_category->id}}">
        @foreach ($child_category->groups as $childCategory)
            @include('products.child_category', ['child_category' => $childCategory])
        @endforeach
    </ul>
</li>
@endif

