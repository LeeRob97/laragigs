@if(count($listing) == 0)
    <p>No listings found.</p>
@endif

@foreach($listings as $listing)
    <h2>{{$listing['title']}}</h2>
    <p>{{$listing['description']}}
@endforeach