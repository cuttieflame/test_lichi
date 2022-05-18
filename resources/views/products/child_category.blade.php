<li id="sub-list{{$child_category->id}}" onclick='send("{{$child_category->id}}")'>
    {{ $child_category->name}}
    <link href="products/child.js"></link>
@if ($child_category->groups)
    <ul class="sub-list" >
        @foreach ($child_category->groups as $childCategory)
            @include('products.child_category', ['child_category' => $childCategory])
        @endforeach
    </ul>
</li>
@endif

