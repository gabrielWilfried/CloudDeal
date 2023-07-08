@extends('admin.authentication.layouts.pages.ads.default')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

@section('content')
    <style>
        .bold {
            font-weight: bold;
        }

        .large {
            font-size: 20px;
        }

        .normal {
            font-size: 14px;
        }

        .italic {
            font-style: italic;
        }

        <div class="row">.underline {
            text-decoration: underline;
        }

        .small {
            font-size: 12px;
        }

        .select-buttons {
            margin-top: 10px;
        }

        .submit-button {
            float: right;
        }
    </style>
    <script>
        function toggleBold(event) {
            event.preventDefault();
            var textarea = document.getElementById('myTextarea');
            textarea.classList.toggle('bold');
        }

        function increaseSize(event) {
            event.preventDefault();
            var textarea = document.getElementById('myTextarea');
            textarea.classList.remove('normal');
            textarea.classList.remove('small');
            textarea.classList.add('large');
        }

        function decreaseSize(event) {
            event.preventDefault();
            var textarea = document.getElementById('myTextarea');
            textarea.classList.remove('large');
            textarea.classList.remove('small');
            textarea.classList.add('normal');
        }

        function toggleItalic(event) {
            event.preventDefault();
            var textarea = document.getElementById('myTextarea');
            textarea.classList.toggle('italic');
        }

        function toggleUnderline(event) {
            event.preventDefault();
            var textarea = document.getElementById('myTextarea');
            textarea.classList.toggle('underline');
        }

        function toggleSmall(event) {
            event.preventDefault();
            var textarea = document.getElementById('myTextarea');
            textarea.classList.remove('normal');
            textarea.classList.remove('large');
            textarea.classList.add('small');
        }
    </script>
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="table-responsive">
                    <div class="box-header with-border">
                        <h3 class="box-title">Send Letter</h3>

                        <div class="box-body">
                            <form action="" method="get">
                                @csrf

                                <div class="form-group">
                                    <label for="selected_email">Select Email:</label>
                                    <select class="form-control" name="selected_email" id="selected_email">
                                        @forelse ($letters as $letter)
                                            <option value="">{{ $letter->email }}</option>
                                        @empty
                                            <option value="">No Letters</option>
                                        @endforelse
                                    </select>
                                </div>

                                <div class="select-buttons">
                                    <button onclick="toggleBold(event)" class="btn btn-default"><b>Bold</b></button>
                                    <button onclick="toggleItalic(event)" class="btn btn-default"><i>Italic</i></button>
                                    <button onclick="toggleUnderline(event)"
                                        class="btn btn-default"><u>Underline</u></button>
                                    <button onclick="increaseSize(event)" class="btn btn-default">Increase Size</button>
                                    <button onclick="decreaseSize(event)" class="btn btn-default">Normal Size</button>
                                    <button onclick="toggleSmall(event)" class="btn btn-default">Small</button>
                                </div>

                                <div class="form-group">
                                    <label for="myTextarea">Message:</label>
                                    <textarea id="myTextarea" name="message" placeholder="Place some text here" autocomplete="off" class="form-control"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary submit-button">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
