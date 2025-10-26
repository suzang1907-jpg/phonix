@props(['article' => null])
<div>
    @unless (empty($article->phone_number))
        <a class="block px-3 py-2 bg-gradient-to-r from-gray-900 to-gray-800 text-white w-full link-phone" target="_blank"
            href="{{ $article->getFormattedPhoneNumberLink() }}">
            <div class="py-1 w-full text-center flex flex-row items-center justify-evenly font-bold">
                <x-svg.phone />
                <div>
                    <p>
                        Tıkla Ara
                    </p>
                    <p>
                        {{ $article->phone_number }}
                    </p>
                </div>
                <x-svg.phone />
            </div>
        </a>
    @endunless
</div>
