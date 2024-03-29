<!DOCTYPE html>

    <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
                  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <link rel="stylesheet" href="./css/app.css">
            <title>Teenager speaking</title>
        </head>

        <body>

            <div class="container">

                <div class="row my-5">
                    <div class="col">
                        <h1 class="text-center">Teenager Speaking</h1>
                    </div>
                </div>

                <div class="row my-3">

                    <div class="col-4">
                        <img src="/img/maxresdefault.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="col-8 pt-5">

                        <div class="mt-5 thought">

                            {{ $reply ?? 'GGGggggggghhhh !' }}

                        </div>

                    </div>

                </div>

                <div class="row ">

                    <div class="col-12">
                        <hr>
                    </div>

                    <div class="col text-center">

                        <form action="/chat" method="POST" class="form-inline justify-content-center">

                            @csrf

                            <div class="form-group">
                                <input class="form-control mr-2" type="text" name="message">
                            </div>

                            <div class="form-group">
                                <input class="btn btn-outline-dark" type="submit" value="parler">
                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </body>

    </html>
