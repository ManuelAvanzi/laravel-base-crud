<main>
    <div class="ms_main-one d-flex mx-auto justify-content-around flex-wrap position-relative">
      

        <!-- v-for comics cards -->
        @foreach ($data as $comic)
            <div class="ms_comics-card">
                <div class="ms_card-image">
                    <img src="{{ $comic["thumb"] }}" alt="{{ $comic["title"] }}">
                </div>
                <p>{{ $comic["series"] }}</p>
            </div>
        @endforeach
    </div>

    <!-- load more button -->
    <span id="main-one-span" class="mx-auto d-table">
        <a href="#/">
            LOAD MORE
        </a>
    </span>
</main>