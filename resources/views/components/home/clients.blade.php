@php
    // [file, nama]  -> tambah / hapus klien cukup di sini
    $clients = [
        ['samsung.png', 'Samsung'],
        ['kn.webp', 'Kertas Nusantara'],
        ['hyundai.png', 'Hyundai'],
        ['nike.png', 'Nike'],
        ['locklock.png', 'Lock & Lock'],
        ['cj.png', 'CJ'],
        ['erajaya.png', 'Erajaya'],
        ['lg.png', 'LG'],
        ['lotte.png', 'Lotte'],
        ['zinus.png', 'Zinus'],
        ['emsonic.png', 'Emsonic'],
        ['strawland.png', 'Strawland'],
        ['shinwon.png', 'Shinwon'],
        ['zimmoah.png', 'Zimmoah'],
        ['daeyoung.png', 'Daeyoung'],
        ['pungkook.png', 'Pungkook'],
        ['serim.png', 'Serim'],
    ];

    // bagi dua baris; tiap baris dirender 3x supaya loop-nya tanpa putus di layar selebar apa pun
    $rows = array_chunk($clients, (int) ceil(count($clients) / 2));
    $copies = 3;
@endphp

<section class="cl-section reveal">
    <div class="cl-head" data-aos="fade-up">
        <div>
            <h2 class="cl-heading">{{ __('messages.clients.title') }}</h2>
            <p class="cl-intro">{{ __('messages.clients.desc') }}</p>
        </div>
        <p class="cl-note">{{ __('messages.clients.note') }}</p>
    </div>

    {{-- DUA BARIS LOGO, ARAH BERLAWANAN --}}
    <div class="cl-rows">
        @foreach ($rows as $r => $row)
            <div class="cl-row {{ $r % 2 ? 'cl-row--rev' : '' }}" style="--cl-dur: {{ 50 + $r * 12 }}s">
                <div class="cl-track">
                    @for ($c = 0; $c < $copies; $c++)
                        @foreach ($row as $logo)
                            <div class="cl-item" @if ($c > 0) aria-hidden="true" @endif>
                                <img src="{{ asset('images/clients/' . $logo[0]) }}"
                                    alt="{{ $c === 0 ? $logo[1] : '' }}" loading="lazy" draggable="false">
                            </div>
                        @endforeach
                    @endfor
                </div>
            </div>
        @endforeach
    </div>
</section>
