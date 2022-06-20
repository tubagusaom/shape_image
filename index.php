<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>shape image</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <h1>CSS Polygons</h1>
    <p class="by">by <a href="https://twitter.com/geoffreycrofte">@geoffreycrofte</a></p>

    <p>Those polygons are realized with the rotate CSS3 property and a hidden overflow. You can click on the button "debug mode" below to reveal boxes. If you have other ways to realize advanced shapes, use the comment form ;)</p>


    <div class="part">
      <h2>Losange</h2>
        <div class="losange">
          <div class="los1">
            <img src="http://farm3.staticflickr.com/2178/3531465579_8bff044e9b_z.jpg?zz=1" alt="" width="255" height="320" />
          </div>
        </div>
    </div>

    <div class="part">
      <h2>Diamond</h2>
        <div class="diamond">
          <div class="dia">
            <img src="http://farm3.staticflickr.com/2441/3657346647_a11111ed39_z.jpg?zz=1" alt="" width="320" height="316" />
          </div>
        </div>
    </div>


    <div class="part">
      <h2>Hexagon</h2>
        <div class="hexa">
          <div class="hex1">
            <div class="hex2">
              <img src="http://farm3.staticflickr.com/2788/4392569951_8bcec3b3ed_z.jpg?zz=1" alt="" width="320" height="313" />
            </div>
          </div>
        </div>
    </div>

    <div class="part">
      <h2>Octogon</h2>
        <div class="octo">
          <div class="octo1">
            <img src="http://farm3.staticflickr.com/2441/3657346647_a11111ed39_z.jpg?zz=1" alt="" width="320" height="316" />
          </div>
        </div>
    </div>


    <div class="part">
      <h2>Dodecagon</h2>
        <div class="dodeca">
          <div class="dode1">
            <div class="dode2">
              <img src="http://farm4.staticflickr.com/3637/3658139504_c33433f163_z.jpg?zz=1" alt="" width="320" height="313" />
            </div>
          </div>
        </div>
    </div>

    <div class="part">
      <h2>Irregular Dodecagon</h2>
        <div class="dodeca irr">
          <div class="dode1">
            <div class="dode2">
              <img src="http://farm4.staticflickr.com/3403/3657053401_3e106f8b51_z.jpg?zz=1" alt="" width="320" height="317" />
            </div>
          </div>
        </div>
    </div>

    <button type="button" class="dev">debug mode</button>

    <p class="photos">Photographies by <a href="http://www.flickr.com/photos/vonschnauzer">Vincent</a></p>

  </body>

  <script type="text/javascript">
    /* just to see boxes in "dev mode" */
    $('.dev').on('click', function(){
    $('.part').toggleClass('devmode');
    return false;
    });
  </script>

</html>
