   <!-- Le Javascript -->
   <script src="./js/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
   <script src="./js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="./js/bootstrap.min.js"></script>
   <script src="./js/library.min.js"></script>

   <script src="./js/main.js"></script>

   <script>
       (function(i, s, o, g, r, a, m) {
           i["GoogleAnalyticsObject"] = r;
           (i[r] =
               i[r] ||
               function() {
                   (i[r].q = i[r].q || []).push(arguments);
               }),
           (i[r].l = 1 * new Date());
           (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
           a.async = 1;
           a.src = g;
           m.parentNode.insertBefore(a, m);
       })(
           window,
           document,
           "script",
           "//www.google-analytics.com/analytics.js",
           "ga"
       );
       ga("create", "UA-104952515-1", "auto");
       ga("send", "pageview");
   </script>

   <script>
       function previewImage(event) {
           var reader = new FileReader();
           reader.onload = function() {
               var output = document.getElementById('preview_edit');
               output.src = reader.result;
               output.style.display = 'block';
           };
           reader.readAsDataURL(event.target.files[0]);
       }
   </script>

   <script>
       function previewImage(event) {
           var reader = new FileReader();
           reader.onload = function() {
               var output = document.getElementById('preview');
               output.src = reader.result;
               output.style.display = 'block';
           };
           reader.readAsDataURL(event.target.files[0]);
       }
   </script>
   
   </body>

   </html>
   <!-- partial -->
   <script src="./js/script.js"></script>
   </body>

   </html>