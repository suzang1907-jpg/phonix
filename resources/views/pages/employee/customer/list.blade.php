<x-layout.employee :page="$page">
       
 <div id="content" class="min-h-dvh flex flex-col px-2">
        <div class="flex flex-row items-center justify-between py-6">
<div class="flex flex-row items-center justify-start gap-2">
<a class="btn btn-sm" href="{{ route('employee.dashboard.show') }}">Anasayfa</a>
            <h2 class="text-xl font-bold">Müşteriler</h2>
</div>
<div class="flex flex-row items-center justify-end gap-2">
            <a class="btn btn-sm" href="{{ route('employee.customer.create') }}">
                Müşteri oluştur
            </a>

</div>
        </div>       
<div class="overflow-x-auto">
<table class="table">
<thead>
<th>
Bilgi
</th>
<th></th>
</thead>
<tbody>
@foreach($customers as $customer)
<tr>
<td>
<p class="text-sm">{{ $customer->whatsapp_phone_number }}</p>
<p class="text-xs">{{ $customer->id}}</p>
@php
$customer_article_count = $customer->articles->count();
@endphp
<p class="text-xs {{ $customer_article_count == 0 ? 'bg-error px-2 py-1 rounded-box': ''}}">İlan sayısı ({{ $customer_article_count }})</p>
</td>
<td>
<div class="flex flex-row items-center justify-center">
<a class="btn btn-xs" href="{{ route('employee.customer.edit', ['id' => $customer->id]) }}">Düzenle</a>
<a class="ml-2 btn btn-xs"  href="https://wa.me/{{ str_replace(')', '', str_replace('(', '', str_replace(' ', '', $customer->whatsapp_phone_number))) }}">WhatsApp'tan yaz</a>
</div>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
        
</div>
</x-layout.employee>
