@include('baza')
<body>
<ul class="list" style="max-width:500px;">
    @foreach ($groups as $product)
        <li onclick='send("{{$product->id}}")'>{{ $product->name }}
            {{$product->id}}
        <ul class="sub-list" id="sub-list{{$product->id}}">
            @foreach ($product->childrenProducts as $childCategory)
                @include('products.child_category', ['child_category' => $childCategory])
            @endforeach
        </ul>
        </li>
    @endforeach
</ul>
<div>
    <table id="main">
    </table>
</div>
<h1 style="color:black;"><a href="{{route('main')}}" type="button">Основная страница</a></h1>
</body>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    send(0);
    var text = '';
    function send(id) {
        $.ajax({
            type: 'GET',
            url: '/products/groups',
            data: {"id":id},
            success:  function (response) {
                text = response;
            },
        });
        setTimeout(resp, 2000);
    }
    function resp() {
        document.getElementById('main').innerHTML = '';
        for (key of text) {
           let main = document.getElementById('main');
           let markup = '';
            key.childrenProducts.forEach(item => {
                markup += item + '<br>'
            })
            key.products.forEach(item => {
                markup += item.name + '<br>'
            })
            main.innerHTML = main.innerHTML +
               '<tr id="todo' + key.id + '">'
                + markup +
               + '<td>' + key.id + '</td>' +
               '<td>' + key.name + '</td>'

           ;
        }

    }
    console.log(text);
    let a = document.getElementById('sub-list1').childNodes.length;
    // document.getElementById('sub-list1').innerHTML = a;
    $('.list li').on('click', function(e) {
         e.stopPropagation();
         var subList = $(this).children('.sub-list');

         if (subList.hasClass('open')) {
             $(this).find('.sub-list').removeClass('open');
         } else {
             subList.addClass('open');
         }
     });


</script>

<style>
    .sub-list {
        display: none;
    }

    .sub-list.open {
        display: block;
    }
</style>

