New Contact Form Submission

Name: {{ $formData['name'] }}
Company: {{ $formData['company'] ?? 'Not provided' }}
Email: {{ $formData['email'] }}
Phone: {{ $formData['phone'] }}

@if(!empty($formData['besoin']))
What do they need: {{ $formData['besoin'] }}
@endif

@if(!empty($formData['deadline']))
When do they need it: {{ $formData['deadline'] }}
@endif

@if(!empty($formData['budget']))
Budget: {{ $formData['budget'] }}
@endif

@if(!empty($formData['discovered']))
How did they discover you: {{ $formData['discovered'] }}
@endif

@if(!empty($formData['message']))

Message:
{{ $formData['message'] }}
@endif

