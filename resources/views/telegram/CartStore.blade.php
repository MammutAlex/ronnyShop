Новая покупка
Имя: {{$user->fname}} {{$user->lname}}
Email: {{$user->email}}
Телефон: <a href="tel:{{str_replace([' ','-'],'',$user->phone)}}">{{$user->phone}}</a>
Адресс: {{$user->address}}
@if($user->note)
Примечание: {{$user->note}}
@endif
<code>
@foreach($products as $product)
Название: {{$product['name']}}
Цена: {{$product['price']}}&#8381;
Количество: {{$product['quantity']}}
Сумма: {{$product['price']*$product['quantity']}}&#8381;
________
@endforeach
</code>
<b>Всего на сумму: {{$fullPrice}}&#8381;</b>
