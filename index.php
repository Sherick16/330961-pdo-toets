<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <?php include("./header.php"); ?>
<h1>Maak je eigen pizza</h1>
      <div class=col-6>
         <form action="./create.php" method="post">
            <div class="mb-3">
               <label for="inputBodemFormaat" class="form-label">Bodemformaat</label>
               <select class="form-control" type="text" name="bodemformaat" id="inputBodemFormaat">
                  <option>20cm</option>
                  <option>25mc</option>
                  <option>30cm</option>
                  <option>35cm</option>
                  <option>40cm</option>
               </select>
            </div>
            <div class="mb-3">
               <label for="inputSaus" class="form-label">Saus</label>
               <select class="form-control" type="text" name="saus" id="inputSaus">
                  <option>Extra tomatensaus</option>
                  <option>Spicy tomatensaus</option>
                  <option>BBQ saus</option>
                  <option>Creme fraiche</option>
               </select>
            </div>
            <div class="mb-3">
               <label for="inputPizzatoppings" class="form-label">Pizzatoppings</label>
               <input class="form-control" type="text" name="pizzatoppings" id="inputPizzatoppings">
            </div>
            <div class="mb-3">
               <label for="inputKruiden" class="form-label">Kruiden</label>
               <input class="form-control" type="text" name="kruiden" id="inputKruiden">
            </div>
            <div class="mb-3">
               <input class="form-control btn btn-primary" type="submit" value="verstuur">
            </div>
         </form>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </body>
</html>