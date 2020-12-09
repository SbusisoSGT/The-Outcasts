
@extends('layouts.main')

@section('content')



@endsection

@section('js-code')
    <script>
        let links = document.querySelector(".links");
        links.children[1].firstElementChild.id = "active-link";

        let dropdown_links = document.querySelector('.dropdown-links');
        dropdown_links.children[1].firstElementChild.id = "active-link-dropdown";
    </script>
@endsection