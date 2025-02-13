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
    <link rel="shortcut icon" href="{{ asset('logo-smanda.ico') }}" type="image/x-icon">
    <title>Denah CCTV</title>
    <style>
    </style>
</head>

<body>
    @include('sweetalert::alert')
    <div class="d-flex justify-content-center align-items-center h-100 w-100"
        style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100%;">
        <div class="row">
            <div class="col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Upload Tataletak CCTV</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('upload.image') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="title" id="title" class="form-control">
                                <small>Format : cctv-1</small>
                            </div>
                            <div class="mb-3">
                                <input type="file" name="file" id="file" class="form-control">
                            </div>
                            <div class="d-grid">
                                <button type="submit">Upload Gambar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>