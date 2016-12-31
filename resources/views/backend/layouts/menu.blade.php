<nav>
    <ul>
    @foreach(injectModel('Menu')->whereParentId(null)->orderBy('order','asc')->get() as $row)
        <li>
            <a href="{{ ($row->controller != '#' ? urlBackend($row->slug.'/index') : '#') }}" >{{ $row->title }}</a>

            @php($countChild = $row->childs->count())
            
            @if($countChild > 0)

                <ul>
                    @foreach($row->childs as $child)
                        @php($countGrandChild = $child->childs->count())

                        <li>
                            <a href="{{ $child->controller != '#' ? urlBackend($child->slug.'/index') : '#' }}" >
                                {{ $child->title }}
                                {{ $countGrandChild > 0 ? ' >>' : '' }}
                            </a>

                            @if($countGrandChild > 0)
                                <ul>
                                    @foreach($child->childs as $grand)
                                        <li>
                                            <a href = "{{ $grand->controller != '#' ? urlBackend($grand->slug.'/index') : '#' }}">{{ $grand->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                        </li>
                    @endforeach           
                </ul>

            @endif

        </li>
    @endforeach
        <!--li><a href="" >Dashboard</a>
            <ul>
                <li><a href="" >Child Menu 1</a></li>
                <li><a href="" >Child Menu 2</a>
                    <ul>
                        <li><a href="" >Child Menu 2</a>
                        <li><a href="" >Child Menu 2</a>
                        <li><a href="" >Child Menu 2</a>
                    </ul>
                </li>
                <li><a href="" >Child Menu 3</a></li>
                <li><a href="" >Child Menu 4</a></li>                
            </ul>
        </li>
        <li><a href="" >User</a></li>
        <li><a href="" >Media Library</a></li>
        <li><a href="" >Development</a></li-->
    </ul>

</nav>