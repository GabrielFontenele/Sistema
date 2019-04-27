<?php
//sesao
session_start();
if(isset($_SESSION['vend'])): ?>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
  </script>
<?php
endif;
session_unset();
?>