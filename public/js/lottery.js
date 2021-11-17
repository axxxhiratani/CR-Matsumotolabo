(function () {
    'use strict';
    var app = new Vue({
        el: '#app',
        data: {
            count: 0,
            win: false,
            time: 0,
            movie: ""
        },
        watch: {
        //localStorageに保存
        count: function(){
            localStorage.setItem('count',JSON.stringify(this.count));
        }
        },
        //リロードされたときにlocalStorageの値を引き出す
        mounted: function(){
            this.count = 0;
        },
        methods:　{
        //カウントダウン
            startGame: function ()
            {
                this.count++;
                //①パネルとボタンを隠す
                // 1.アニメーションで消す
                // 2.消したままにする
                setTimeout(() =>
                {
                    $('#slot-start').addClass('hide-move-button');
                    $('.left').find('img').addClass('hide-move');
                    $('.right').find('img').addClass('hide-move');
                    $('.center').find('img').addClass('hide-move');
                }, 100);
                setTimeout(() =>
                {
                    $('#slot-start').removeClass('hide-move-button');
                    $('.left').find('img').removeClass('hide-move');
                    $('.right').find('img').removeClass('hide-move');
                    $('.center').find('img').removeClass('hide-move');
                    $('#slot-start').addClass('hide-button');
                    $('.left').find('img').addClass('hide');
                    $('.right').find('img').addClass('hide');
                    $('.center').find('img').addClass('hide');
                }, 2000);
                // 大当たり確率
                let id = this.getRandom(11);
                let flg_reach = false;
                let cut_in;
                let message;
                if (id == 1){
                    //当選した。
                    var id_win = this.getRandom(posts_win.length);
                    flg_reach = true;
                    cut_in = posts_win[id_win].cutin_body;
                    this.win = true;
                    this.movie = posts_win[id_win].directing_movie;
                    this.time = posts_win[id_win].directing_time;
                    message = posts_win[id_win].cutin_body;
                    //④ パネル画像を変更する。
                    setTimeout(() =>
                    {
                        $('.left').find('img').attr('src',`${posts_win[id_win].left}`);
                        $('.right').find('img').attr('src',`${posts_win[id_win].right}`);
                        $('.center').find('img').attr('src',`${posts_win[id_win].center}`);
                    },2100);
                }else{
                    // 落選した
                    //リーチか調べる。
                    var id_lost = this.getRandom(posts_lost.length);
                    if (posts_lost[id_lost].left == posts_lost[id_lost].right) {
                        flg_reach = true;
                    }
                    cut_in = posts_lost[id_lost].cutin_body;
                    this.movie = posts_lost[id_lost].directing_movie;
                    this.time = posts_lost[id_lost].directing_time;
                    message = posts_lost[id_lost].cutin_body;
                    //④ パネル画像を変更する。
                    setTimeout(() =>
                    {
                        $('.left').find('img').attr('src',`${posts_lost[id_lost].left}`);
                        $('.right').find('img').attr('src',`${posts_lost[id_lost].right}`);
                        $('.center').find('img').attr('src',`${posts_lost[id_lost].center}`);
                    },2100);
                }
                // 右と左のパネルにアニメーションクラスをつける
                setTimeout(() =>
                {
                    $('.left').find('img').addClass('show-move');
                    $('.right').find('img').addClass('show-move');
                }, 5000);
                // 右と左のパネルを表示させたままにする
                setTimeout(() =>
                {
                    $('.left').find('img').removeClass('hide');
                    $('.right').find('img').removeClass('hide');
                }, 5000);
                // 右と左のパネルにアニメーションクラスを外す
                setTimeout(() =>
                {
                    $('.left').find('img').removeClass('show-move');
                    $('.right').find('img').removeClass('show-move');
                }, 6000);
                // ⑤リーチの演出を見せる。
                // リーチでないなら真ん中のパネルを表示させる。
                if (flg_reach) {
                    // //reeach演出
                    // //カットインを表示させた1s後にpushボタンを表記
                    // // パネルを表示させる
                     // pushボタンにアニメーションクラスをつける
                    setTimeout(() =>
                    {
                        $('#movie-start').addClass('show-move-button');
                    }, 5000);
                    // pushボタンを表示させたままにする
                    setTimeout(() =>
                    {
                        $('#movie-start').removeClass('hide-button');
                    }, 5000);
                    // pushボタンのアニメーションクラスを外す
                    setTimeout(() =>
                    {
                        $('#movie-start').removeClass('show-move-button');
                        $('.main-letter').find('p').text(message);
                    }, 6000);
                }else{
                    // // パネルを表示させる
                     // 中央パネルとスタートボタンにアニメーションクラスをつける
                    setTimeout(() =>
                    {
                        $('.center').find('img').addClass('show-move');
                        $('#slot-start').addClass('show-move-button');
                    }, 5000);
                    // 中央パネルとスタートボタンを表示させたままにする
                    setTimeout(() =>
                    {
                        $('.center').find('img').removeClass('hide');
                        $('#slot-start').removeClass('hide-button');
                    }, 5000);
                    // 中央パネルとスタートボタンのアニメーションクラスを外す
                    setTimeout(() =>
                    {
                        $('.center').find('img').removeClass('show-move');
                        $('#slot-start').removeClass('show-move-button');
                    }, 6000);
                }
            },
            startMovie: function ()
            {
                var $movie = $('.main-movie');
                // 動画の表示と再生
                setTimeout(() =>
                {
                    $movie.slideDown(1000);
                    var element = `<video src="${this.movie}" playsinline autoplay class="display" id="audio" width="100%" height="100%"></video>`;
                    $movie.html(element);
                    // setTimeout(() =>
                    // {
                    //     let video = document.getElementById('audio');
                    //     video.muted = false;
                    // },5000);
                }, 3000)
                // 動画を隠す
                //pushボタンを隠して、
                //当選ならテキストボックスにおめでとうを表記する。
                //落選ならテキストボックスを空にして回すボタンを表記する。
                setTimeout(() =>
                {
                    $('#movie-start').addClass('hide-button');
                }, 1000);
                // 真ん中のパネルの表示してボタンも再表示
                setTimeout(() =>
                {
                    $movie.slideUp(1000);
                    $movie.find('video').attr('src', '');
                    $('.center').find('img').removeClass('hide');
                    if (this.win) {
                        $('.main-letter').css('font-size','140px')
                        $('.main-letter').find("p").text('');
                    } else {
                        $('#slot-start').removeClass('hide-button');
                        $('.main-letter').find("p").text('');
                    }
                }, this.time * 1100);
            },
            getRandom: function (num)
            {
                return Math.floor(Math.random() * num + 1);
            },
        }
    })
})();
