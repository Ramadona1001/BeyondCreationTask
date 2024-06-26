@if ($errors->any())
    <div class="card bg-danger mb-3 ">
        <div class="card-header">
            <h5>Please Fix These Errors</h5>
        </div>
        <div class="card-body">
            <ul class="text-white">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
