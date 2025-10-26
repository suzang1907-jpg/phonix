@if ($domain->type == App\Constants\DomainType::$primary)
{
  "short_name": "{{ $domain->getName() }}",
  "name": "{{ $domain->getName() }}",
  "icons": [
    {
      "src": "{{ route('file.project.logo') }}",
      "type": "image/png",
      "sizes": "192x192"
    },
    {
      "src": "{{ route('file.project.logo') }}",
      "type": "image/png",
      "sizes": "512x512"
    },
    {
      "src": "{{ route('file.project.logo') }}",
      "type": "image/png",
      "sizes": "192x192",
      "purpose": "any maskable"
    }
  ],
  "start_url": ".",
  "display": "standalone",
  "theme_color": "#fff",
  "background_color": "#fff"
}
@else
{
  "short_name": "{{ $domain->getName() }}",
  "name": "{{ $domain->getName() }}",
  "icons": [
    {
      "src": "{{ route('file.project.reference.logo', ['reference' => $domain->getCanonicalDomain()]) }}",
      "type": "image/png",
      "sizes": "192x192"
    },
    {
      "src": "{{ route('file.project.reference.logo', ['reference' => $domain->getCanonicalDomain()]) }}",
      "type": "image/png",
      "sizes": "512x512"
    },
    {
      "src": "{{ route('file.project.reference.logo', ['reference' => $domain->getCanonicalDomain()]) }}",
      "type": "image/png",
      "sizes": "192x192",
      "purpose": "any maskable"
    }
  ],
  "start_url": ".",
  "display": "standalone",
  "theme_color": "#fff",
  "background_color": "#fff"
}
@endif