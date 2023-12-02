@extends('shopify-app::layouts.default')

@section('content')
    <!-- You are: (shop domain name) -->
    <p>Click to visite <a href="{{URL::tokenRoute('shop')}}">shop</a></p>
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Welcome to my app' });
    </script>
@endsection
