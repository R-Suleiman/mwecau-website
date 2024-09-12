<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->

    <div class="container">
        <div class="mt-5">
            @if (session()->has('message'))
                <span class="alert alert-success shadow">
                    {{ session('message') }}
                </span>
            @endif
        </div>
        <div class="mb-3">
            @if (session()->has('fail'))
                <span class="alert alert-danger p-3 mt-5">
                    {{ session('fail') }}
                </span>
            @endif
        </div>
    </div>

</div>
