<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <h1>Maak je eigen burrito</h1>
  <form>
    <!-- Select voor burritoformaat -->
    <div class="form-group">
      <label for="exampleFormControlSelect1">Burritoformaat</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option name="20">20 centimeter</option>
        <option name="25">25 centimeter</option>
        <option name="30">30 centimeter</option>
      </select>
    </div>
    <!-- Select voor sausformaat -->
    <div class="form-group">
      <label for="exampleFormControlSelect2">Saus</label>
      <select class="form-control" id="exampleFormControlSelect2">
        <option name="Salsa crudo">Salsa crudo</option>
        <option name="Salsa verde">Salsa verde</option>
        <option name="Salsa roja">Salsa roja</option>
        <option name="Crème fraiche">Crème fraiche</option>
      </select>
    </div>
    <!-- Select voor bonen -->
    <h5 class="m-2">Bonen</h5>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="bonen" id="exampleRadios1" value="Kidney Bonen">
      <label class="form-check-label" for="exampleRadios1">
        Kidney Bonen
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="bonen" id="exampleRadios2" value="Zwarte bonen">
      <label class="form-check-label" for="exampleRadios2">
        Zwarte bonen
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="bonen" id="exampleRadios3" value="Bruine bonen">
      <label class="form-check-label" for="exampleRadios3">
        Bruine bonen
      </label>
    </div>
    <!-- Select voor Rijst -->
    <h5 class="m-2">Rijst</h5>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="rijst" id="exampleRadios4" value="Witte Rijst">
      <label class="form-check-label" for="exampleRadios4">
        Witte Rijst
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="rijst" id="exampleRadios5" value="Zwarte bonen">
      <label class="form-check-label" for="exampleRadios5">
        Zwarte bonen
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="rijst" id="exampleRadios6" value="Bruine bonen">
      <label class="form-check-label" for="exampleRadios6">
        Bruine bonen
      </label>
    </div>
    <button type="submit" class="mt-2 btn btn-primary btn-lg btn-block">Submit</button>
  </form>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>