<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>CR Matsumoto Lobo</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="main" id="app">
        <div class="main-slotcount">
            回転数：@{{count}}回
        </div>
        <div class="main-letter">
            <p></p>
        </div>
        <div class="main-cutin">
            <p></p>
        </div>
        <div class="main-movie out">
        </div>
        <div class="main-display">
            <div class="main-display-icon left show">
                <img src="https://cr-matsumotolab.s3.ap-northeast-1.amazonaws.com/img/1.png" alt="">
            </div>
            <div class="main-display-icon center show">
                <img src="https://cr-matsumotolab.s3.ap-northeast-1.amazonaws.com/img/2.png" alt="">
            </div>
            <div class="main-display-icon right show">
                <img src="https://cr-matsumotolab.s3.ap-northeast-1.amazonaws.com/img/3.png" alt="" >
            </div>
        </div>
        <div class="main-button">
            <button @click="startGame" class="button-start" id="slot-start">
                回す
            </button>
        </div>
        <div class="">
            <button @click="startMovie" class="button-push hide-button" id="movie-start">
                push
            </button>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script type="text/javascript" src="{{asset('/js/lottery.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/Winning.js')}}"></script>
    <script>
        //jsファイルに受け渡しするためにクラスを定義
        // var posts_win = new Array({{count($wins)}});
        // var posts_lost = new Array({{count($losts)}});
        var posts_win = [];
        var posts_lost = [];
    </script>
        {{-- json形式でphpからjsへ渡す --}}
        @forelse ($wins as $win)
            <script>
                var object_win = new Wins(@json("{$win->id}"),@json("{$win->left_design->design_img->img}"),@json("{$win->right_design->design_img->img}"),@json("{$win->center_design->design_img->img}"),@json("{$win->round}"),@json("{$win->cutin->body}"),@json("{$win->cutin->img}"),@json("{$win->directing->movie}"),@json("{$win->directing->time}"));
                posts_win.push(object_win);
            </script>
        @empty
        @endforelse
        @forelse ($losts as $lost)
            <script>
                var object_lost = new Losts(@json("{$lost->id}"),@json("{$lost->left_design->design_img->img}"),@json("{$lost->right_design->design_img->img}"),@json("{$lost->center_design->design_img->img}"),@json("{$lost->cutin->body}"),@json("{$lost->cutin->img}"),@json("{$lost->directing->movie}"),@json("{$lost->directing->time}"));
                posts_lost.push(object_lost);
            </script>
        @empty
        @endforelse
</body>
</html>
