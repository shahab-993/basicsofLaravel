@foreach ($products as $product )
<div class="card me-2 p-2" style="width:200px;">
    <img src="{{ $product['image'] }}" height="150" class="card-img-top" alt="">
    <div class="card-header" style="height:180px;">
        <p>{{ $product['title'] }}</p>
    </div>
    <div class="">
        <dl>Price</dl>
        <dd>{{ $product['price'] }}</dd>
        <dt>Rating</dt>
        <dd><span class="bi bi-star-fill text-success"></span>{{ $product['rating']['rate'] }}
        [{{ $product['rating']['count'] }}]</dd>
    </div>
</div>
@endforeach
