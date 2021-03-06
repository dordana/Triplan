<!DOCTYPE html>
<html lang="en-US">
    @include('partials.header')
    <!-- START BODY -->
    <body>
        <div id="fh5co-wrapper">
	    	<div id="fh5co-page">   
                @include('partials.navbar')
                @yield('content')
                @include('partials.footer')
        	</div>
    	<!-- END fh5co-page -->
    	</div>
    	<!-- END fh5co-wrapper -->
        @include('partials.scripts')
    </body>
    <!-- END BODY -->
</html>