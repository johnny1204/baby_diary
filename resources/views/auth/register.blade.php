@extends('./layouts/base')
@section('main')
    <main class="pt-16 md:flex md:justify-around md:items-center m-2 md:m-0">
        <div class="md:flex-2 border-solid border bg-white border-white rounded shadow-xl py-10 px-2">
            <h2 class="text-center">会員登録</h1>
                <section class="p-4">
                    <form method="POST" action="{{ route('register') }}" novalidate>
                        @csrf
                        <label>
                            <input type="text" name="nickname"
                                class="mb-3 border-solid border w-full border-gray-400 rounded p-2" placeholder="ニックネーム"
                                value="{{ old('nickname') }}">
                        </label>
                        <label>
                            <input type="email" name="email"
                                class="mb-3 border-solid border w-full border-gray-400 rounded p-2" placeholder="メールアドレス"
                                value="{{ old('email') }}">
                        </label>
                        <label>
                            <input type="password" name="password"
                                class="mb-3 border-solid border w-full border-gray-400 rounded p-2"
                                placeholder="パスワード（英数字をそれぞれ最低1文字を含んだ12文字以上）">
                        </label>
                        <label>
                            <input type="password" name="password_confirmation"
                                class="mb-3 border-solid border w-full border-gray-400 rounded p-2"
                                placeholder="パスワード（確認用）">
                        </label>
                        <div class="text-center m-2.5">
                            <button
                                class="border-solid border border-green-400 bg-green-400 rounded px-10 py-2 text-white font-semibold">登録</button>
                        </div>
                    </form>
                </section>
        </div>
        <div class="md:w-1/3">
            <div class="text-center m-2.5">
                <button
                    class="border-solid border border-red-400 bg-red-400 rounded px-16 py-4 text-white font-semibold w-full">Googleアカウントで登録</button>
            </div>
            <div class="text-center m-2.5">
                <button
                    class="border-solid border border-blue-400 bg-blue-400 rounded px-16 py-4 text-white font-semibold w-full">Facebookアカウントで登録</button>
            </div>
        </div>
    </main>
@endsection
