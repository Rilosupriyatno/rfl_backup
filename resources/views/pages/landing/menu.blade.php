<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('assets/icons/logo.png') }}" type="image/icon type">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <title>Rattan For Life</title>
  </head>
  <body>
    <main>
      <header class="w-full pt-[3rem] pb-[1.5rem]">
        <div
          class="max-w-rattan-mobile h-full mx-auto px-[2rem] flex items-center justify-center gap-[1rem]"
        >
          <input
            type="text"
            placeholder="Cari"
            class="w-full border border-gray-400 rounded-[0.2rem] px-[1.2rem] py-[0.5rem] text-[1.2rem] placeholder:text-[1.2rem] placeholder:italic placeholder:text-black placeholder:font-roboto focus:outline-none focus:border-gray-500"
          />
        </div>
      </header>
      <main class="w-full pb-[5rem]">
        <section class="w-full py-[1rem]">
          <div
            class="max-w-rattan-mobile h-full mx-auto flex items-center justify-center flex-wrap gap-6 place-self-center"
          >
            <img class="h-[4rem]" src="{{ asset('assets/icons/logo.png') }}" alt="Rattan Logo" loading="lazy" />
            <div
              class="font-poppins w-[7rem] break-all font-bold text-[2rem] leading-[2.5rem] text-gray-600"
            >
              rattan<span class="text-[#FFCC33]">for</span>life.
            </div>
          </div>
        </section>
        @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
        @endif
        <section class="w-full py-[1rem]">
          <div class="max-w-rattan-mobile h-full mx-auto py-[1.2rem]">
            @foreach ($category as $key => $data)
              @if ($key % 4 == 0)
                @if ($key != 0)
                  </div>
                @endif
                <div class="border-t-2 p-[0.7rem] flex justify-center gap-5">
              @endif

              <a
                href="{{ url($data->url.$data->id) }}"
                class="flex flex-col items-center justify-center gap-[0.8rem] w-[10rem] basis-[10rem] py-[1rem]"
              >
                <img
                  src="{{ asset($data->image) }}"
                  class="w-[4rem] sunglow-img"
                  alt="chair-wicker"
                />
                <span class="text-center break-all text-[#767676]">{{ $data->description }}</span>
              </a>

              @if ($loop->last)
                </div>
              @elseif (($key + 1) % 4 == 0)
                </div>
              @endif
            @endforeach
          </div>
        </section>
      </main>
      <footer class="fixed w-full bottom-0 left-0">
        <div
          class="max-w-rattan-mobile mx-auto bg-white border-t-2 border-[#FFBA00] py-[1.5rem]"
        >
          <div
            class="px-[1.5rem] grid grid-cols-5 justify-items-center gap-[1rem]"
          >
            <a
              href="javascript:;"
              class="flex flex-col items-center justify-center gap-[0.5rem]"
            >
              <img
                src="{{ asset('assets/icons/home.png') }}"
                alt="home"
                class="w-[3rem] h-[3rem] selected-menu"
              />
              <span>Home</span>
            </a>
            <a
              href="/chat"
              class="flex flex-col items-center justify-center gap-[0.5rem]"
            >
              <img
                src="{{ asset('assets/icons/email.png') }}"
                alt="email"
                class="w-[3rem] h-[3rem] unselected-menu"
              />
              <span>Pesan</span>
            </a>
            <a
              href="{{ route('chat') }}"
              class="flex flex-col items-center justify-center gap-[0.5rem]"
            >
              <img
                src="{{ asset('assets/icons/love.png') }}"
                alt="love"
                class="w-[3rem] h-[3rem] unselected-menu"
              />
              <span>Whislist</span>
            </a>
            <a
                    {{-- href="{{ route('cart', ['index='.$parameter,'route='.$route]) }}" --}}
              href="javascript:;"
              class="flex flex-col items-center justify-center gap-[0.5rem]"
            >
              <img
                src="{{ asset('assets/icons/shopping-cart.png') }}"
                alt="shopping-cart"
                class="w-[3rem] h-[3rem] unselected-menu"
              />
              <span>Keranjang</span>
            </a>
            <a
              href="javascript:;"
              class="flex flex-col items-center justify-center gap-[0.5rem]"
            >
              <img
                src="{{ asset('assets/icons/document.png') }}"
                alt="document"
                class="w-[3rem] h-[3rem] unselected-menu"
              />
              <span>Transaksi</span>
            </a>
          </div>
        </div>
      </footer>
    </main>
  </body>
</html>

