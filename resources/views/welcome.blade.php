<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
            <div class="container mt-5 mb-5">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h4>COMMENTS</h4>
                        <ul class="timeline" id="app">
                            <input type="input" v-model="search" class="form-control" placeholder="Comments search">
                            <li  v-for="blog in filteredBlogs">
                                <a target="_blank" href="#" v-text="blog.name"></a>
                                <a href="#" class="float-right" v-text="blog.email"></a>
                                <p v-text="blog.body"></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
            <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
            <script src="/js/app.js"></script>

            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            {{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
            <!------ Include the above in your HEAD tag ---------->


    </body>
</html>
<style>
    ul.timeline {
        list-style-type: none;
        position: relative;
    }
    ul.timeline:before {
        content: ' ';
        background: #d4d9df;
        display: inline-block;
        position: absolute;
        left: 29px;
        width: 2px;
        height: 100%;
        z-index: 400;
    }
    ul.timeline > li {
        margin: 20px 0;
        padding-left: 20px;
    }
    ul.timeline > li:before {
        content: ' ';
        background: white;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        border: 3px solid #22c0e8;
        left: 20px;
        width: 20px;
        height: 20px;
        z-index: 400;
    }
</style>
