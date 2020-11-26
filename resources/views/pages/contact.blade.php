@extends()

@section('js-code')
    <script>
        let links = document.querySelector(".links");
        links.children[3].firstElementChild.id = "active-link";
    </script>
@endsection