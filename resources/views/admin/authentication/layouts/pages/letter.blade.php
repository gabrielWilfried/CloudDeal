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

        .italic {
            font-style: italic;
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
            textarea.classList.toggle('large');
        }

        function toggleItalic(event) {
            event.preventDefault();
            var textarea = document.getElementById('myTextarea');
            textarea.classList.toggle('italic');
        }
    </script>

    <div class="col-12">
        <div class="box">
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
                            <button onclick="toggleBold(event)" class="btn btn-default"><i class="fas fa-bold"></i></button>
                            <button onclick="increaseSize(event)" class="btn btn-default"><i
                                    class="fas fa-text-height"></i></button>
                            <button onclick="toggleItalic(event)" class="btn btn-default"><i
                                    class="fas fa-italic"></i></button>
                        </div>


                        <div class="form-group">
                            <label for="myTextarea">Message:</label>
                            <textarea id="myTextarea" name="message" class="form-control"></textarea>
                        </div>


                        <button type="submit" class="btn btn-primary submit-button">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
