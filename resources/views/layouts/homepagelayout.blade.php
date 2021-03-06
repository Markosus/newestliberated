<!DOCTYPE html>
<html>
<head>
	<title>
		Liberated Living
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    
    <link rel="stylesheet" type="text/css" href="{{ URL::to('srv/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('srv/css/sweetalert.css')}}">	


    <!-- these css sheets are for the sub menu slider -->
	<!-- <link rel="stylesheet" type="text/css" href="{{ URL::to('srv/css/component.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('srv/css/demo.css') }}"> -->

	<!-- <noscript>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('srv/css/nojava.css') }}">
	</noscript> -->

	<script type='text/javascript' src="{{ URL::to('srv/js/modernizr.custom.js') }}"></script>
	


</head>
<body>

	@yield('content')

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="s<script>document.body.className += ' fade-out';</script>ha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>

<script type='text/javascript' src="{{ URL::to('srv/js/slidein.js') }}"></script>
<script type='text/javascript' src="{{ URL::to('srv/js/jPushMenu.js') }}"></script>
<!-- submenu slider menu -->
<!-- <script type='text/javascript' src="{{ URL::to('srv/js/classie.js') }}"></script>
<script type='text/javascript' src="{{ URL::to('srv/js/mlpushmenu.js') }}"></script> -->
<script type='text/javascript' src="{{ URL::to('srv/js/animatescroll.js') }}"></script>
<script type='text/javascript' src="{{ URL::to('srv/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('srv/js/sweetalert.min.js') }}"></script>

<!-- submenu slider menu -->

<!-- <script type="text/javascript">
	new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ), {
	type : 'cover'

} );

</script> -->	

<script type="text/javascript">
    	
    	@if (notify()->ready())
	    	swal({

	    		title: "{!! notify()->message() !!}",	
	    		type: "{{ notify()->type() }}"

	    	});
	    @endif

</script>




</body>
</html>