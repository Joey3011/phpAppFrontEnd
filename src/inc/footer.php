<hr style="width: 100%; background-image: url('rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;'); "></hr>
 <div class="footer-dark">
  <footer>
      <div class="container">
          <div class="row">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid nesciunt placeat eveniet ipsa quod tenetur nulla laboriosam eaque, eum ullam doloremque, iure ipsam eius odit debitis maiores atque, incidunt officiis.</p>
              <div class="col item social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
          </div>
          <p class="copyright">FatCap Car Parts Troubleshooting © 2022</p>
      </div>
  </footer>
</div>
</body>
<script type="text/javascript">
let navbar = document.querySelector(".navbar");
let navLinks = document.querySelector(".nav-links");
let menuOpenBtn = document.querySelector(".navbar .fa-bars");
let menuCloseBtn = document.querySelector(".nav-links .fa-close");
menuOpenBtn.onclick = function() {
navLinks.style.left = "0";
}
menuCloseBtn.onclick = function() {
navLinks.style.left = "-100%";
}
let tsArrow = document.querySelector(".ts-arrow");
tsArrow.onclick = function() {
 navLinks.classList.toggle("show");
}
</script>
</html>