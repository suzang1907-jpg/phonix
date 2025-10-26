<x-layout.web :page="$page">
    <x-navbar.web />
    <div class="mx-auto max-w-screen-xl">
        <div class="p-2">
            <p class="font-bold mt-2 text-xl">Cookie Policy</p>
            <p class="mt-2">If your browser is configured to accept cookies, we may collect non-personally identifiable information passively using "cookies" and "page tags".</p>
            <p>Effective as of 01.01.2024</p>
            <p class="font-bold mt-2 text-xl">What’s a cookie?</p>
            <p class="mt-2">"Cookies" are small text files that can be placed on your computer or mobile device in order to identify your Web browser and the activities of your computer on the {{ $domain->domain }} Service.</p>
            <p class="font-bold mt-2 text-xl">What’s a page tag?</p>
            <p class="mt-2">"Page tags," also known as web beacons or gif tags, are a web technology used to help track website or email usage information, such as how many times a specific page or email has been viewed. Page tags are invisible to you, and any portion of the {{ $domain->domain }} Service, including advertisements, or e-mail sent on our behalf, may contain page tags.</p>
            <p class="font-bold mt-2 text-xl">Does {{ $domain->domain }} use cookies, and why?</p>
            <p class="mt-2">Yes. We use cookies to personalize your experience on the {{ $domain->domain }} Service (such as dynamically generating content on webpages specifically designed for you), to assist you in using the {{ $domain->domain}} Service (such as saving time by not having to reenter your name each time you use the {{ $domain->domain }} Service), to allow us to statistically monitor how you are using the {{ $domain->domain }} Service so that we can improve our offerings, and to target certain advertisements to your browser which may be of interest to you or to determine the popularity of certain content. By using cookies and page tags together, we are able to improve the {{ $domain->domain }} Service and measure the effectiveness of our advertising and marketing campaigns.</p>
            <p class="mt-2">Please be aware that this cookie policy does not govern the use of third-party websites or services or providers of third-party services.</p>

            <p class="font-bold mt-2 text-xl">Do I have to accept them?</p>
            <p class="mt-2">You do not have to accept cookies to use the {{ $domain->domain }} Service. If you reject cookies, certain features or resources of the {{ $domain->domain }} Service may not work properly or at all and you may have a degraded experience.</p>
            <p class="mt-2">Although most browsers are initially set to accept cookies, you can change your browser settings to notify you when you receive a cookie or to reject cookies generally. To learn more about how to control privacy settings and cookie management, click the link for your browser below.</p>
            <p class="mt-2">Firefox</p>
            <p class="mt-2">Chrome</p>
            <p class="mt-2">Internet Explorer</p>
            <p class="mt-2">Safari</p>
            <p class="mt-2">To learn more about cookies; how to control, disable or delete them, please visit <a href="http://www.aboutcookies.org" class="text-fuchsia-600">http://www.aboutcookies.org</a>. Some third party advertising networks, like Google, allow you to opt out of or customize preferences associated with your internet browsing. For more information on how Google lets you customize these preferences, see their documentation.</p>
            <p class="mt-2">All cookies, on our website and everywhere else on the web, fall into one of four categories: Strictly necessary cookies — These cookies are essential for you to browse the website and use its features, such as accessing secure areas of the site. Cookies that allow web shops to hold your items in your cart while you are shopping online are an example of strictly necessary cookies. These cookies will generally be first-party session cookies. While it is not required to obtain consent for these cookies, what they do and why they are necessary should be explained to the user.</p>
            <p class="mt-2">Preferences cookies — Also known as "functionality cookies," these cookies allow a website to remember choices you have made in the past, like what language you prefer, what region you would like weather reports for, or what your user name and password are so you can automatically log in.</p>
            <p class="mt-2">Statistics cookies — Also known as "performance cookies," these cookies collect information about how you use a website, like which pages you visited and which links you clicked on. None of this information can be used to identify you. It is all aggregated and, therefore, anonymized. Their sole purpose is to improve website functions. This includes cookies from third-party analytics services as long as the cookies are for the exclusive use of the owner of the website visited.</p>
            <p class="mt-2">Marketing cookies — These cookies track your online activity to help advertisers deliver more relevant advertising or to limit how many times you see an ad. These cookies can share that information with other organizations or advertisers. These are persistent cookies and almost always of third-party provenance.</p>

            <p class="font-bold mt-2 text-xl">Log files</p>
            <p class="mt-2">We collect non-personal information through our Internet log files, which record data such as browser types, domain names, and other anonymous statistical data involving the use of the {{ $domain->domain }} Service. This information may be used to analyze trends, to administer the {{ $domain->domain }} Service, to monitor the use of the {{ $domain->domain }} Service, and to gather general demographic information. We may link this information to personal information for these and other purposes such as personalizing your experience on the {{ $domain->domain }} Service and evaluating the {{ $domain->domain }} Service in general.</p>

            <p class="font-bold mt-2 text-xl">What’s a local storage?</p>
            <p class="mt-2">Local storage is the component of the browser which locally stores named key/value pairs inside a client’s Web browser.</p>

            <p class="font-bold mt-2 text-xl">Reporting infringement</p>
            <p class="mt-2">If you would like to notify us of the infringing material or activity, we encourage you to contact us
                using the details below:</p>
            <p>{{ 'info@' . $domain->domain }}</p>
            <p>This document was last updated on 01.01.2024</p>
        </div>
    </div>
    <x-footer.web />
</x-layout.web>