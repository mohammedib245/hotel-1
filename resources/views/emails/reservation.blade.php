@component('mail::message')

Reservation for <strong>{{ $name }} </strong> at <em><strong>{{ config('app.name') }}</strong></em>

You're receving this email because of a booking in our system to your name.

We wish happy hours to you in our hotel,<br>
<strong>{{ config('app.name') }}</strong>
@endcomponent
