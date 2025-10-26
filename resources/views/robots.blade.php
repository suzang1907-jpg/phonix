# https://www.robotstxt.org/robotstxt.html

User-agent: AhrefsBot
Disallow: /

User-agent: SemrushBot
Disallow: /

User-agent: facebookexternalhit
Disallow: /

User-agent: Amazonbot 
Disallow: /

User-agent: *
Disallow:

@foreach ($sitemaps as $sitemap)
Sitemap: {{ $sitemap }}
@endforeach