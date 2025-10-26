<x-layout.web :page="$page">
    <x-navbar.web />
    <div class="mx-auto max-w-screen-xl">
        <div class="p-2">
            <p class="font-bold mt-2 text-xl">DMCA policy</p>
            <p class="mt-2">This Digital Millennium Copyright Act policy (“Policy”) applies to the {{ $domain->domain }} website
                (“Website”
                or “Service”) and any of its related products and services (collectively, “Services”) and outlines how
                this Website operator (“Operator”, “we”, “us” or “our”) addresses copyright infringement notifications
                and how you (“you” or “your”) may submit a copyright infringement complaint.</p>
            <p>Protection of intellectual property is of utmost importance to us and we ask our users and their
                authorized agents to do the same. It is our policy to expeditiously respond to clear notifications of
                alleged copyright infringement that comply with the United States Digital Millennium Copyright Act
                (“DMCA”) of 1998, the text of which can be found at the U.S. Copyright Office website. This DMCA policy
                was created with the help of WebsitePolicies.com</p>
            <p class="font-bold mt-2 text-xl">What to consider before submitting a copyright complaint</p>
            <p class="mt-2">Please note that if you are unsure whether the material you are reporting is in fact infringing, you may
                wish to contact an attorney before filing a notification with us.</p>
            <p>We may, at our discretion or as required by law, share a copy of your notification or
                counter-notification with third parties. This may include sharing the information with the account
                holder engaged in the allegedly infringing activity or for publication. If you are concerned about your
                information being forwarded, you may wish to hire an agent to report infringing material for you.</p>
            <p class="font-bold mt-2 text-xl">Notifications of infringement</p>
            <p class="mt-2">If you are a copyright owner or an agent thereof, and you believe that any material available on our
                Services infringes your copyrights, then you may submit a written copyright infringement notification
                (“Notification”) using the contact details below pursuant to the DMCA. All such Notifications must
                comply with the DMCA requirements. You may refer to a DMCA takedown notice generator or other similar
                services to avoid making mistake and ensure compliance of your Notification.</p>
            <p>Filing a DMCA complaint is the start of a pre-defined legal process. Your complaint will be reviewed for
                accuracy, validity, and completeness. If your complaint has satisfied these requirements, our response
                may include the removal or restriction of access to allegedly infringing material as well as a permanent
                termination of repeat infringers’ accounts. We may also require a court order from a court of competent
                jurisdiction, as determined by us in our sole discretion, before we take any action. A backup of the
                terminated account’s data may be requested, however, we may not be able to provide you with one and, as
                such, you are strongly encouraged to take your own backups.</p>
            <p>If we remove or restrict access to materials or terminate an account in response to a Notification of
                alleged infringement, we will make a good faith effort to contact the affected user with information
                concerning the removal or restriction of access, which may include a full copy of your Notification
                (including your name, address, phone, and email address), along with instructions for filing a
                counter-notification.</p>
            <p>Notwithstanding anything to the contrary contained in any portion of this Policy, the Operator reserves
                the right to take no action upon receipt of a DMCA copyright infringement notification if it fails to
                comply with all the requirements of the DMCA for such notifications.</p>
            <p class="font-bold mt-2 text-xl">Counter-notifications</p>
            <p class="mt-2">A user who receives a copyright infringement Notification may make a counter-Notification pursuant to
                sections 512(g)(2) and (3) of the US Copyright Act. If you receive a copyright infringement
                Notification, it means that the material described in the Notification has been removed from our
                Services or access to the material has been restricted. Please take the time to read through the
                Notification, which includes information on the Notification we received. To file a counter-notification
                with us, you must provide a written communication compliant with the DMCA requirements.</p>
            <p>Please note that if you are not sure whether certain material infringes the copyrights of others or that
                the material or activity was removed or restricted by mistake or misidentification, you may wish to
                contact an attorney before filing a counter-notification.</p>
            <p>Notwithstanding anything to the contrary contained in any portion of this Policy, the Operator reserves
                the right to take no action upon receipt of a counter-notification. If we receive a counter-notification
                that complies with the terms of 17 U.S.C. § 512(g), we may forward it to the person who filed the
                original Notification.</p>
            <p>The process described in this Policy does not limit our ability to pursue any other remedies we may have
                to address suspected infringement.</p>
            <p class="font-bold mt-2 text-xl">Changes and amendments</p>
            <p class="mt-2">We reserve the right to modify this Policy or its terms related to the Website and Services at any time
                at our discretion. When we do, we will revise the updated date at the bottom of this page. We may also
                provide notice to you in other ways at our discretion, such as through the contact information you have
                provided.</p>
            <p>An updated version of this Policy will be effective immediately upon the posting of the revised Policy
                unless otherwise specified. Your continued use of the Website and Services after the effective date of
                the revised Policy (or such other act specified at that time) will constitute your consent to those
                changes.</p>
            <p class="font-bold mt-2 text-xl">Reporting copyright infringement</p>
            <p class="mt-2">If you would like to notify us of the infringing material or activity, we encourage you to contact us
                using the details below:</p>
            <p>{{ 'info@' . $domain->domain }}</p>
            <p>This document was last updated on 23.12.2023</p>
        </div>
    </div>
    <x-footer.web/>
</x-layout.web>