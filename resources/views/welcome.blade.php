<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ana_prueba</title>
  </head>
  <body>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-auto">
            <h3>Alumno<span class="badge bg-secondary">{{$alumno->nombre}}</span>cursa las materias:</h3>

            <table class="table table-striped table-hover">
                <thead class="bg-primary text-white">
                    <th>MATERIAS</th>
                </thead>
                <tbody>
                  @foreach($alumno->materias as $registro) 
                  <tr>
                      @endforeach
                  </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>
