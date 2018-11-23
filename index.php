<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	::-webkit-scrollbar {
	 width: 1px;
	 height: 1px;
}
 ::-webkit-scrollbar-button {
	 width: 1px;
	 height: 1px;
}
 body {
	 background: #111;
}
 div {
	 box-sizing: border-box;
}
 .horizontal-scroll-wrapper {
	 position: absolute;
	 display: block;
	 top: 0;
	 left: 0;
	 width: calc(250px + 1px);
	 max-height: 750px;
	 margin: 0;
	 padding-top: 1px;
	 background: #abc;
	 overflow-y: auto;
	 overflow-x: hidden;
	 transform: rotate(-90deg) translateY(-250px);
	 transform-origin: right top;
}
 .horizontal-scroll-wrapper > div {
	 display: block;
	 padding: 5px;
	 background: #cab;
	 transform: rotate(90deg);
	 transform-origin: right top;
}
 .squares {
	 padding: 250px 0 0 0;
}
 .squares > div {
	 width: 250px;
	 height: 250px;
	 margin: 10px 0;
}
 
	</style>
</head>
<body>
<div> 
	
</div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
	alert($(this).closest('div').find('.sample_class').val())
</script>
</html>