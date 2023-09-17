@foreach($products as $product)
    {{ $product->name }} - <strong>{{ $product->category->name }}</strong>
@endforeach
