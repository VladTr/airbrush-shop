<!DOCTYPE html>

    <head>

        <meta charset="UTF-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- this line will appear only if the website is visited with an iPad -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

        <title>Тут должен біть тайтл</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="/public/css/app.css">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @yield('navigation')
                </div>
            </div>
                {{--@yield('sliders')--}}
            
            <div class="row">
                <div class="col-md-3">
                    @yield('categories')
                </div>
                <div class="col-md-9">
                    @yield('main')
                </div>    
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    @yield('goods')
                </div>    
            </div>        
            <div class="row">
                <div class="col-md-12 about">
                    @yield('about')
                </div>    
            </div> 
            <div class="footer">

            </div>
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>