<li>
        {{ $child_category->name}}

        @if ($child_category->products)
                <ul class="sub-list">
                        @foreach ($child_category->products as $childCategory)
                                @include('products.child_product', ['child_category' => $childCategory])
                        @endforeach
            </ul>
</li>
@endif
