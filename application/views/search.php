<?php include ('header.php'); ?>
<body>
  <?php include ('navbar.php'); ?>
  <div class="container outer">
    <h1>Hasil Pencarian</h1>
    <div class="result col-8">

    </div>
  </div>
  <?php include('javascript-loader.php'); ?>
  <script>
    $.getJSON("<?php echo base_url(); ?>resources/js/json/comics.json", function (val) {
      $.each(val, function(index, data) {
        if (data.FullTitle.toUpperCase() == "<?php echo $_GET['searchq']?>".toUpperCase()) {
          var genre = "";
          $.each(data.Genre, function(index, gen) {
            genre += `<a href="#">`+gen+`</a> `;
          })
          $(".result").append(`
            <div class="row mt-3 result-bg">
              <div class="col-12 col-md-2">
                <div class="title">
                  <img src="`+data.Cover+`">
                </div>
              </div>
              <div class="col-12 col-md-9 container box">
                <div class="row no-gutters">
                  <div class="title col-12">
                    <a href="#" onclick="changeable('comic-chapter', null, '`+data.FullTitle+`')">
                    <h3>`+data.FullTitle+`</h3></a>
                  </div>
                </div>
                <hr />
                <div class="row">
                  <div class="container col-12">
                    `+data.Synopsis+`
                  </div>
                </div>
                <div class="row">
                  <div class="genre col-12">
                    <div class="comic-genre">
                      Genre : `+genre+`
                    </div>
                    <div class="r8m8">Rating : <i class="fas fa-star"></i> 9.83</div>
                  </div>
                </div>
              </div>
            </div>
          `);
        }
      });
    });
  </script>
</body>
<?php include('footer.php'); ?>
