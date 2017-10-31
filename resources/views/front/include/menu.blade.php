<ul id="nav-mobile" class="right hide-on-med-and-down ">
@foreach ($main_menu as $page)
    <li>
        <a href="{{ $page->url }}" style="{{ (Request::path() == $page->url)? 'color:#000' : '' }}" >{{ $page->page_link }}</a>
    </li>
@endforeach
    <li class=""> </li>
</ul>


