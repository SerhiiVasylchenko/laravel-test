<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>
<body>

<div class="columns">

    <div class="column">
        <section class="section">
            <div class="columns">


                <div class="column">
                    <p class="title is-4">Products</p>

                    <table class="table is-hoverable is-striped is-fullwidth">
                        <thead>
                        <tr>
                            <td>id</td>
                            <td>name</td>
                            <td>category_name</td>
                            <td>tags</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr style="cursor: pointer;" onclick='show_modal({{ $product->id }})'>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>
                                    @if($product->category)
                                        {{ $product->category->name }}
                                    @endif
                                </td>
                                <td>
                                    @foreach($product->tags as $key => $tag)
                                        {{ $tag->name }}@if($key !== count($product->tags) - 1),@endif
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


            <div id="modal-1" class="modal">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <p class="modal-card-title"></p>
                        <button class="delete" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                        <p>descr: Random description....</p>
                        <p>category: <b>category_name</b></p>
                        <p>tags: <b>new, hot</b></p>
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button is-success">Save changes</button>
                        <button class="button">Cancel</button>
                    </footer>
                </div>
            </div>

        </section>
    </div>

</div>

<script type="text/javascript">
    function show_modal($id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type:'POST',
            url:'/product',
            data: 'id=' + $id,
            success:function(data){
                let productTags = data['tags'],
                    productTagsList = '';

                for (let i = 0; i < productTags.length; i++) {
                    if (i !== 0) {
                        productTagsList += ', '
                    }
                    productTagsList += productTags[i]['name'];
                }

                $('.modal-card-title').html(data['name']);

                $('.modal-card-body').html('<p>descr: ' + data['descr'] + '</p>\n' +
                    '                        <p>category: <b>' + data['category']['name'] + '</b></p>\n' +
                    '                        <p>tags: <b>' + productTagsList + '</b></p>');

                $(".modal").addClass("is-active");
            }
        });
    }

    $(".delete").click(function() {
        $(".modal").removeClass("is-active");
    });
    $(".modal-background").click(function() {
        $(".modal").removeClass("is-active");
    });
</script>
</body>
</html>