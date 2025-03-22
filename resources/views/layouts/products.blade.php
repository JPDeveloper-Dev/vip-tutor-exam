<div>
    @if ($products->isEmpty())
        <p>No products found for this user.</p>
    @else
        <ul>
            @foreach ($products as $product)
                <li>{{ $product->name }} <br> 
                    {{ $product->description }} <br>
                    
                </li>
            @endforeach
        </ul>
    @endif
</div>