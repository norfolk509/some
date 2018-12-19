@if(!empty($noticeList) && count($noticeList))
    <style>
        .notice-area {
            max-width: 1024px;
            width: 100%;
            border: 1px solid #ccd7dc;
            border-radius: 3px;
        }

        .notice, .notice-area {
            position: relative;
            padding: 5px 20px 0;
            margin: 10px auto 0;
            color: #5e5e70;
            background: #FFF;
        }

        .notice .notice, .notice-area .notice {
            margin-bottom: 20px;
        }

        .notice {
            width: 100%;
        }
        .notice, .notice-area {
            position: relative;
            padding: 5px 20px 0;
            margin: 10px auto 0;
            color: #5e5e70;
            background: #FFF;
        }

        .notice .notice .title, .notice-area .notice .title {
            color: #dd437c;
            font-size: 14px;
            text-transform: capitalize;
            font-weight: 700;
            cursor: pointer;
        }

        .notice .notice .description, .notice-area .notice .description {
            border-top: 1px solid #dd437c;
            padding-top: 10px;
            display: none;
        }
    </style>

    <section class="notice-area">
        <i id="closeNotice"></i>
        @foreach ($noticeList as $notice)
            <div class="notice">
                <p class="title" data-trackid="{{ $partialTrack }}:LINK alert - '{{ $notice['title'] }}'"><span></span>{{ $notice['title'] }}</p>
                <p class="description">{{ $notice['text'] }}</p>
            </div>
        @endforeach
    </section>

    <script>
        $( function() {
            if ($.cookie('hideNotice')) {
                $('.notice-area').hide();
            } else {
                $('.notice-area').show();
            }

            $('#closeNotice').on('click',function(e){
                $('.notice-area').slideUp();
                var date = new Date();
                date.setTime(date.getTime() + (604800 * 1000));
                var cookieSet = $.cookie('hideNotice', '1', { expires: date });
            });
        });
    </script>
@endif