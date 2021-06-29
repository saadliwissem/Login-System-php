</body>
</html>
<script language="javascript">
		const location = location.href;
		const nav = document.querySelectorAll('a');
		const vlength = nav.length;
		for( let i = 0;i<vlength;i++){
			if(nav[i].href)=== location{
				nav[i].class='activenav'
			}
		}
	</script>