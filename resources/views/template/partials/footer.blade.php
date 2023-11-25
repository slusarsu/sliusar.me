<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="float-end mb-1">
        <a href="#"><i class="bi bi-arrow-up-square"></i> До гори</a>
    </div>
    <div class="row">
        <div class="col-12 col-md">
            <p>Sliusar Software Developer</p>
            <small class="d-block mb-3 text-body-secondary">&copy; 2023</small>
        </div>
        <div class="col-6 col-md">
            <h5>Посилання</h5>
            <ul class="list-unstyled text-small">
                @foreach(menu($settings['footer_menu_hash'] ?? '') as $link)
                    <li class="mb-1">
                        <a class="link-secondary text-decoration-none" href="{{$link['url']}}">
                            {{$link['text']}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Категорії</h5>
            <ul class="list-unstyled text-small">
                @foreach(categories() as $category)
                    <li class="mb-1">
                        <a class="link-secondary text-decoration-none" href="{{$category->link()}}">
                            {{$category->title}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Теги</h5>
            @foreach(tags() as $tag)

                <a href="{{$tag->link()}}">
                    <h6>
                        <span class="badge bg-secondary">
                            <i class="bi bi-tag-fill"></i>
                            {{$tag->title}}
                        </span>
                    </h6>
                </a>

            @endforeach
        </div>
    </div>
</footer>