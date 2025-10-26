<x-layout.customer :page="$page">
    <div id="content" class="min-h-dvh flex flex-col px-6">
        <div class="flex flex-row items-center justify-between py-6">
            <h2 class="text-xl font-bold">Müşteri</h2>
            <a href="{{ route('customer.auth.logout') }}">
                <button class="btn">Çıkış yap</button>
            </a>
        </div>
        <div class="flex flex-col">
            <div class="overflow-x-auto">
                <div class="flex flex-row items-end">
                    <h2 class="text-base font-bold">İlanlar</h2>
                    <p class="text-sm text-invert ml-1">({{ $articles->count() }})</p>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>İsim</th>
                            <th>İletişim</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                        <tr>
                            <td>
                                <p class="whitespace-nowrap">{{ $article->title }}</p>
                            </td>
                            <td>
                                @unless(empty($article->phone_number))
                                <p class="whitespace-nowrap">Tel: {{ $article->phone_number }}</p>
                                @endunless
                                @unless(empty($article->whatsapp_number))
                                <p class="whitespace-nowrap">WP: {{ $article->whatsapp_number }}</p>
                                @endunless
                            </td>
                            <td>
                                <div class="flex flex-row items-center justify-center gap-1">
                                    <a href="{{ \App\Routing\Customer::route('customer.article.edit', ['id' => $article->id]) }}">
                                        <button class="btn btn-xs">Düzenle</button>
                                    </a>
                                    <a class="ml-1" href="{{ \App\Routing\Customer::route('customer.article.edit.password.generate', ['id' => $article->id]) }}">
                                        <button class="btn btn-xs">Anahtar oluştur</button>
                                    </a>
                                    @unless(empty($article->edit_password))
                                    <a class="ml-1" href="{{ \App\Routing\Customer::route('customer.article.edit.password.delete', ['id' => $article->id]) }}">
                                        <button class="btn btn-xs btn-error">Anahtarı sil</button>
                                    </a>
                                    @endunless
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="py-12"></div>
    @if(Session::has('tmp_edit_password') && Session::has('tmp_article_id'))
    <div class="fixed inset-0">
        <div class="bg-black bg-opacity-80 flex flex-col items-center justify-center w-full h-full">
            <div class="mx-auto bg-base-100 p-6 max-w-md w-full">
                <h2 class="font-bold">Geçici İlan Şifresi</h2>
                <div class="mt-2 overflow-x-scroll no-scroll-bar flex flex-col w-full">
                    <p>Bu bağlantı, reklamlarınızı kimlik doğrulaması olmadan düzenlemenize olanak tanır.</p>

                    <div class="mt-2">
                        <a class="text-blue-400" href="{{ \App\Routing\Customer::route('customer.article.edit.external', ['id' => Session::get('tmp_article_id'), 'p' => Session::get('tmp_edit_password')])}}">
                            {{ \App\Routing\Customer::route('customer.article.edit.external', ['id' => Session::get('tmp_article_id'), 'p' => Session::get('tmp_edit_password')])}}
                        </a>
                    </div>

                    <p class="mt-2">Güvenlik nedeniyle bu bağlantı yalnızca bir kez görüntülenir</p>
                </div>

                <div class="mt-2">
                    <a href="{{ \App\Routing\Customer::route('customer.dashboard.show') }}">
                        <button class="btn btn-sm">Kapat</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endif
</x-layout.customer>