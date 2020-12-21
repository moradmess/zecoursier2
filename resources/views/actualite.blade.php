@extends('layouts.menu')

@section('content')
<script type="text/javascript"> 
document.getElementById('actualite').className = "active";
</script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v9.0" nonce="eWLgnXfP"></script>

<div class="row">
	<div class="col-sm-offset-3 col-sm-6">
		<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fzecoursier.officiel&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>	
	</div>
</div>
@endsection