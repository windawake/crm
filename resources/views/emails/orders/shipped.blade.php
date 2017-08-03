@component('mail::message')
# Order Shipped

Your order has been shipped!

@component('mail::button', ['url' => 'http://www.qq.com'])
View Order
@endcomponent

Thanks,<br>
{{ config('mail.from.name') }}
@endcomponent