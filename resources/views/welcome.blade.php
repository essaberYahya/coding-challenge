@extends('master.master') <!-- extend the master page  -->
@section('changed') <!-- open the changed section -->
            <div class="container">
                <div class="row">
                    <!-- start of swipper -->
                    <div class="col-md-4">
                        <swiper></swiper>
                    </div>
                    <!-- end of swipper -->

                    <!-- start of articles -->
                    <div class="col-md-8">
                        <articles></articles>
                    </div>
                    <!-- end of articles -->
                </div>
            </div>
@endsection
