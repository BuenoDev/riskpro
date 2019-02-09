@if ($companies->count())
    @php($count = 0 )

    <div class="row">            
    @foreach ($companies as $company)

        @if ($count == 0)
        @endif
        <style>
            .card{
                margin-bottom: 20px;
            }
        </style>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="card text-center">
                <img class="card-img-top" src="{{ URL::asset('/img/vendor.jpg') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{ $company->name }}</h4>
                    <h5 class="card-title">{{ $company->title }}</h5>
                    <p class="card-text">{{ substr($company->description , 0 , 80) }}... <a href="/company/{{ $company->id }}">Saiba mais.</a> </p>
                    <p class="card-text"><b>Localização: </b> {{ $company->location }}</p>
                </div>
            </div>
        </div>

        @php($count++)

        @if ($count == 3)
            @php($count = 0 )
            @endif
            <br>
            @endforeach
        </div><br>
    <br>
@endif
