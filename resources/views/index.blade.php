@extends('layouts.app')

@section('content')

    <!-- Begin page -->
    <div id="wrapper">

        @include('layouts.partials.topbar')

        @include('layouts.partials.sidebar')

        <!-- ================== MAIN CONTENT ==================== -->

        <div class="content-page">

            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">



                </div>
            </div>
            <!-- End content -->

            @include('layouts.partials.footer')
        </div>

        <!-- ================ MAIN CONTENT END ================== -->

    </div><!-- END wrapper -->

@endsection
