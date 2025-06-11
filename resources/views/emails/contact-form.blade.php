@component('mail::message')
# Pesan Baru dari Form Kontak

**Dari:** {{ $data['name'] }}  
**Email:** {{ $data['email'] }}  
**Subjek:** {{ $data['subject'] }}

**Pesan:**  
{{ $data['message'] }}

Terima kasih,<br>
{{ config('app.name') }}
@endcomponent