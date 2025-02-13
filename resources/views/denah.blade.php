<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>Denah CCTV</title>
    <style>
    </style>
</head>

<body>
    <div class="d-flex justify-content-center flex-column mx-4 mt-4">
        <h5>CCTV Urgen SMAN 2 Amlapura</h5>
        <small>Angka dibawah menunjukkan gambar letak cctv urgen sesuai dengan nomor cctv.</small>
        <hr>
        <div class="d-flex d-grid gap-2 flex-wrap">
            @for ($i = 1; $i <= 32; $i++) 
            <a data-fancybox data-src="{{ asset('assets/images/cctv-' . $i . '.jpg') }}"
                data-caption="Foto CCTV-{{ $i }}" class="btn btn-primary">
                {{-- <img src="{{ asset('assets/images/cctv-' . $i . '.jpg') }}" class="img--fluid" alt="" /> --}}
                {{ $i }}
                </a>
                {{-- <button type="button" class="btn btn-primary">{{ $i }}</button> --}}
                @endfor
        </div>
        {{-- <a
            href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAGe-ua_6Ro&#x2F;Xdcei5IYpLlE6F_h3oF6uA&#x2F;view?utm_content=DAGe-ua_6Ro&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link"
            target="_blank" rel="noopener" class="btn btn-primary btn-block w-100 my-4" data-fancybox>Show Denah</a>
        --}}
        <div class="d-flex d-grid gap-2">
            <a href="https://melannyportofolio.my.canva.site/denah-cctv-sman2amlapura"
                class="btn btn-primary btn-block w-100 my-4" target="_blank" rel="noopener">
                Show Denah To Web
            </a>
            <a href="{{ asset('assets/file/Denah-cctv.pdf') }}" class="btn btn-warning btn-block w-100 my-4"
                data-fancybox>
                Show Denah Internal
            </a>

        </div>
    </div>

    <div style="position: relative; width: 100%; height: 0; padding-top: 152.9412%;
 padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
        <iframe loading="lazy"
            style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
            src="{{ asset('assets/file/Denah-cctv.pdf') }}" allowfullscreen="allowfullscreen" allow="fullscreen">
        </iframe>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            Fancybox.bind("[data-fancybox]", {
            });
        });
    </script>
</body>

</html>