@component('mail::message')

<h3>New Message from {{$contact_form_data['email']}}</h3>

<h5>Name: {{$contact_form_data['name']}}</h5>

<h5>Subject: {{$contact_form_data['subject']}}</h5>

<h5>Message: {{$contact_form_data['message']}}</h5>

@endcomponent
