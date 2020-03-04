<section class="jumbotron text-center">
    <div class="container">
    <h1 class="jumbotron-heading">Search</h1>
    <p class="lead text-muted">Here you can search for Instagram by tag. Simple and fast.</p>

    <form action="search" method="GET">
        <div class="form-row align-items-center">
            <div class="col-9">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">#</div>
                    </div>
                    <input type="text" class="form-control" name="tag" placeholder="Tag" value="{{ $tag }}">
                </div>
            </div>
            <div class="col-3">
                <select name="count" class="form-control mb-2">
                    <option @if ($count == "18") selected @endif>18</option>
                    <option @if ($count == "27") selected @endif>27</option>
                    <option @if ($count == "36") selected @endif>36</option>
                </select>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary mb-2">Search</button>
            </div>
        </div>
    </form>
    </div>
</section>