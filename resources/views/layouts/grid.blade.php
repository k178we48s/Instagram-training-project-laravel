@if (!empty($images))
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach ($images as $image)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ $image['url'] }}" height="100%" width="100%">
                        <div class="card-body">
                        <p class="card-text">{{ $image['caption'] }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <form action="delete_from_favourites" method="POST" class="delete_from_favourites @if ($image['is_favourite'] == "N") hidden @endif">
                                    {{ csrf_field() }}
                                    <input type="hidden" class="delete_from_favourites" name="link" value="{{ $image['link'] }}">
                                    <button type="submit" class="btn btn-sm btn-outline-secondary">Delete from favorites</button>
                                </form>
                                <form action="add_to_favourites" method="POST" class="add_to_favourites @if ($image['is_favourite'] == "Y") hidden @endif">
                                    {{ csrf_field() }}
                                    <input type="hidden" class="add_to_favourites" name="link" value="{{ $image['link'] }}">
                                    <input type="hidden" name="url" value="{{ $image['url'] }}">
                                    <button type="submit" class="btn btn-sm btn-outline-secondary">Add to favorites</button>
                                </form>
                                <a class="btn btn-sm btn-outline-secondary" href="{{ $image['link'] }}" target="_blank">View on Instagram</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endif