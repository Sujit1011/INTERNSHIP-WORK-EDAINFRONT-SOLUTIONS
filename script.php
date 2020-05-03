<script type="text/javascript">
			var i = 0;
			function read()
			{
				document.getElementById("more").style.display = "inline";
				document.getElementById("dots").style.display = "none";
			}
			document.getElementById('exp').addEventListener('click',function()
														   {
				document.querySelector('.form').style.display = 'flex';
			});
			document.getElementById('btn2').addEventListener('click',function()
															{
				document.querySelector('.form').style.display = 'none';
			});

</script>