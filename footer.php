			<hr class="featurette-divider">
			<!-- FOOTER -->
			<footer class="container">
				<a href="https://www.facebook.com/JonasRochaNet" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
				
				<a href="https://www.instagram.com/jonasrochanet/" target="_blank" title="Instagram"><i class="fa fa-instagram" aria-hidden="true" ></i></a>
				
				<a href="https://twitter.com/JonasRochaNet"  target="_blank" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				
				<a href="https://www.linkedin.com/in/jonasrocha/" target="_blank" title="Linked in"><i class="fa fa-linkedin" aria-hidden="true" ></i></a>
				
				<a href="https://www.youtube.com/channel/UClUkqi9gxDcLuH9ocJ5CEoQ" target="_blank" title="Yout Tube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
				
				<a href="https://www.github.com/JonasRocha189" target="_blank" title="Git Hub"><i class="fa fa-github" aria-hidden="true"></i></a>
				<p class="float-right"><a href="#">Back to top</a></p>
				<p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
			</footer>
		</main>
		<script>

// When the user scrolls the page, execute myFunction 
window.onscroll = function() {barra(), myFunction()};

    // barra de scroll indicator
    function barra() {
      var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
      var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      var scrolled = (winScroll / height) * 100;
      document.getElementById("myBar").style.width = scrolled + "%";
    }

    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
</script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
	<?php wp_footer(); ?>
</html>