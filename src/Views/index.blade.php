@extends('template.dreams.dreams')
@section('content')
    <div class="col-md-12 col-12">
        <div class="page-header">
            <div class="page-title">
                <h4>Menu</h4>
                <h6>Menu manager</h6>
            </div>
        </div>
        {!! \Vdes\Menu\WMenu::render() !!}
    </div>
    @push('js')
        <script>
            var menus = {
                "oneThemeLocationNoMenus": "",
                "moveUp": "Move up",
                "moveDown": "Mover down",
                "moveToTop": "Move top",
                "moveUnder": "Move under of %s",
                "moveOutFrom": "Out from under  %s",
                "under": "Under %s",
                "outFrom": "Out from %s",
                "menuFocus": "%1$s. Element menu %2$d of %3$d.",
                "subMenuFocus": "%1$s. Menu of subelement %2$d of %3$s."
            };
            var arraydata = [];
            var addcustommenur = '{{ route('haddcustommenu') }}';
            var updateitemr = '{{ route('hupdateitem') }}';
            var generatemenucontrolr = '{{ route('hgeneratemenucontrol') }}';
            var deleteitemmenur = '{{ route('hdeleteitemmenu') }}';
            var deletemenugr = '{{ route('hdeletemenug') }}';
            var createnewmenur = '{{ route('hcreatenewmenu') }}';
            var csrftoken = "{{ csrf_token() }}";
            var menuwr = "{{ url()->current() }}";

        </script>
        <script type="text/javascript" src="{{ asset('assets/menu/scripts.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/menu/scripts2.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/menu/menu.js') }}"></script>
    @endpush
@endsection