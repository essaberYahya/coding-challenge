@extends('master.master') <!-- extend the master page  -->
@section('changed') <!-- open the changed section -->

    <!-- call the single component with props id returned from the route function  -->
    <!-- Go to route>web and you will find the route -->
    <single :id={{ $id }}></single>

@endsection
