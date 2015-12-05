<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="{!! $description !!}">
    <link rel="alternate" hreflang="ru" href="http://m.порно-мама/">
    <link rel="canonical" hreflang="en" href="http://m.порно-мама.com/">
    <link rel="icon" href="{!! url() !!}/favicon.ico">

    <title>{!! $title !!}</title>
    <link rel="stylesheet" type="text/css" href="{!! url() !!}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{!! url() !!}/css/mycss.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-default">
    <div class=" container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                converter-x.com
            </a>
        </div>

       @include('parts.language')

    </div>
</nav>

<div class="container">

    <div class="row">
        <div class="col-xs-12 col-sm-8 main">
            <h1> Base 64</h1>
            <p id="from">Text</p><button class="btn btn-default " type="submit"> </button><p id="to">Base64</p>

            <form>

                <textarea class="form-control" placeholder="{{trans('base64.input_holder')}}" rows="6"></textarea>

                <span>{{trans('base64.encode')}}</span>

                <select class="form-control type">
                    <option>UTF-8</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>

                <button class="btn btn-default clearfix" type="submit">{{trans('base64.button')}}</button>

            </form>

            <textarea class="form-control" rows="8" placeholder="{{trans('base64.output_holder')}}"></textarea>

            <h2>Seo text H2</h2>
            <p class="seo">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nunc in ex suscipit cursus sit amet dapibus nunc. Quisque porttitor justo quis euismod dictum. Fusce in rhoncus ligula. Fusce scelerisque dolor sit amet dui porta hendrerit. Integer faucibus, neque sit amet tempor posuere, tortor ligula consequat metus, nec tempor ante ex egestas justo. Maecenas efficitur eleifend mi et lacinia. Suspendisse a nunc dui. Maecenas non nibh ut ante accumsan mattis ac eu nisi. Quisque quis felis sed tellus posuere porta a vel turpis. Mauris ut aliquam ligula, in fermentum justo. Phasellus faucibus dictum ante, id pharetra nisl tincidunt sed. Quisque sollicitudin rhoncus cursus.
            </p>


        </div>
        <div class="col-xs-12 col-sm-4 right">
            <section>
                <span>{{trans('main.like')}}</span>
            </section>
            <section>
                <p>{{trans('main.services')}}</p>
                <ul>
                    <li><a href="#"> Lorem ipsum dolor</a></li>
                    <li><a href="#"> Lorem ipsum dolor</a></li>
                    <li><a href="#"> Lorem ipsum dolor</a></li>
                    <li><a href="#"> Lorem ipsum dolor</a></li>
                    <li><a href="#"> Lorem ipsum dolor</a></li>
                    <li><a href="#"> Lorem ipsum dolor</a></li>
                    <li><a href="#"> Lorem ipsum dolor</a></li>
                    <li><a href="#"> Lorem ipsum dolor</a></li>
                </ul>

            </section>
            <section>
                <p>{{trans('main.ad')}}</p>
            </section>
        </div>
    </div>

</div><!-- /.container -->

<footer>
    <div class="container">
        <span > &copy; {!! date("Y") !!}</span>
    </div>
    <footer>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="{!! url() !!}/js/bootstrap.min.js"></script>
</body>
</html>