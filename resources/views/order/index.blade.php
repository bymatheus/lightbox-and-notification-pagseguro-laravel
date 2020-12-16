@extends('template.index')

@section('content')
    <main class="container">
        <div class="bg-light mt-3 p-5 rounded">
            <h1>Insira um valor</h1>
            <p class="lead">Insira o valor da da sua compra.</p>

            <form class="form-floating" action="{{ route('order.store') }}" method="POST">
                @csrf
                <input type="text" class="form-control money" id="valueInput" placeholder="Valor" required>
                <label for="valueInput">Valor</label>

                <button type="submit" class="mt-2 btn btn-primary">Continuar</button>
            </form>
        </div>
    </main>
@endsection

@section('additional-script')
    <script src="{{ asset('dist/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('dist/js/mask.js') }}"></script>
@endsection
