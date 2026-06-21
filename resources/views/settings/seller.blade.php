@extends('layouts.settings')
@section('settings')
    <p>Become a seller?</p>
    <p>some text here</p>
    <form method="POST">
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <label for="agree">Agree to terms and legalese</label>
        <input type="checkbox" name="agree" id="agree">
        <button type="submit">Become a seller</button>
    </form>
@endsection
