@props(['project' => null])
<amp-analytics type="gtag" data-credentials="include">
    <script type="application/json">
        {
            "vars": {
                "gtag_id": "{{ $project->google_tag}}",
                "config": {
                    "{{$project->google_tag}}": {
                        "groups": "default"
                    }
                }
            },
            "triggers": {
                "trackClickOnWhatsappMessageLink": {
                    "on": "click",
                    "selector": ".link-whatsapp",
                    "request": "event",
                    "vars": {
                        "eventLabel": "Send Whatsapp Message",
                        "event_name": "click_whatsapp",
                        "country": "QUERY_PARAM(country)",
                        "city": "QUERY_PARAM(city)",
                        "district": "QUERY_PARAM(district)"
                    }
                },
                "trackClickOnTelegramMessageLink": {
                    "on": "click",
                    "selector": ".link-telegram",
                    "request": "event",
                    "vars": {
                        "eventLabel": "Send Telegram Message",
                        "event_name": "click_telegram",
                        "country": "QUERY_PARAM(country)",
                        "city": "QUERY_PARAM(city)",
                        "district": "QUERY_PARAM(district)"
                    }
                },
                "trackClickOnAdLink": {
                    "on": "click",
                    "selector": ".link-ad",
                    "request": "event",
                    "vars": {
                        "eventLabel": "Click Ad",
                        "event_name": "click_ad"
                    }
                },
                "trackClickOnPhoneCallLink": {
                    "on": "click",
                    "selector": ".link-phone",
                    "request": "event",
                    "vars": {
                        "eventLabel": "Phone Call",
                        "event_name": "click_phone",
                        "country": "QUERY_PARAM(country)",
                        "city": "QUERY_PARAM(city)",
                        "district": "QUERY_PARAM(district)"
                    }
                },
                "trackClickOnSupport": {
                    "on": "click",
                    "selector": ".link-support-listener",
                    "request": "event",
                    "vars": {
                        "eventLabel": "Support Click",
                        "event_name": "click_support",
                        "country": "QUERY_PARAM(country)",
                        "city": "QUERY_PARAM(city)",
                        "district": "QUERY_PARAM(district)"
                    }
                },
                "trackClickOnArticle": {
                    "on": "click",
                    "selector": ".link-article-listener",
                    "request": "event",
                    "vars": {
                        "eventLabel": "Article Click",
                        "event_name": "click_article",
                        "country": "QUERY_PARAM(country)",
                        "city": "QUERY_PARAM(city)",
                        "district": "QUERY_PARAM(district)"
                    }
                },
                "trackClickOnBlog": {
                    "on": "click",
                    "selector": ".link-blog-listener",
                    "request": "event",
                    "vars": {
                        "eventLabel": "Blog Click",
                        "event_name": "click_blog",
                        "country": "QUERY_PARAM(country)",
                        "city": "QUERY_PARAM(city)",
                        "district": "QUERY_PARAM(district)"
                    }
                },
                "trackClickOnKeyword": {
                    "on": "click",
                    "selector": ".link-keyword-listener",
                    "request": "event",
                    "vars": {
                        "eventLabel": "Keyword Click",
                        "event_name": "click_keyword",
                        "country": "QUERY_PARAM(country)",
                        "city": "QUERY_PARAM(city)",
                        "district": "QUERY_PARAM(district)"
                    }
                },
                "trackClickOnHome": {
                    "on": "click",
                    "selector": ".link-home-listener",
                    "request": "event",
                    "vars": {
                        "eventLabel": "Home Click",
                        "event_name": "click_home",
                        "country": "QUERY_PARAM(country)",
                        "city": "QUERY_PARAM(city)",
                        "district": "QUERY_PARAM(district)"
                    }
                },
                "trackClickOnPosts": {
                    "on": "click",
                    "selector": ".link-posts-listener",
                    "request": "event",
                    "vars": {
                        "eventLabel": "Posts Click",
                        "event_name": "click_posts",
                        "country": "QUERY_PARAM(country)",
                        "city": "QUERY_PARAM(city)",
                        "district": "QUERY_PARAM(district)"
                    }
                },
                "trackClickOnStories": {
                    "on": "click",
                    "selector": ".link-stories-listener",
                    "request": "event",
                    "vars": {
                        "eventLabel": "Stories Click",
                        "event_name": "click_stories",
                        "country": "QUERY_PARAM(country)",
                        "city": "QUERY_PARAM(city)",
                        "district": "QUERY_PARAM(district)"
                    }
                }
            }
        }
    </script>
</amp-analytics>