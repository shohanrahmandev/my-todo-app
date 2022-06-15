<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <section class="mt-5">

        <div class="text-center">

            <h1> Todo Edit App </h1>
            <a href="/" class="btn btn-primary">Back</a>

        </div>
        <div class="d-flex justify-content-center p-5">


            <div class="shadow p-3 mb-5 bg-body rounded" style="width:500px">
                <form action="/update/{{ $todo->id }}">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $todo->name }}">

                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date" value="{{ $todo->date }}">
                    </div>

                    <div class="mb-3">
                        <label for="work" class="form-label">Work</label>
                        <input type="text" class="form-control" id="work" name="work" value="{{ $todo->work }}">
                    </div>

                    <div class="mb-3">
                        <label for="details" class="form-label">Details</label>
                        <input type="text" class="form-control" id="details" name="details"
                            value="{{ $todo->details }}">
                    </div>


                    <div>

                        <button type="submit" class="btn btn-success">update</button>
                    </div>

                </form>
            </div>


        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
