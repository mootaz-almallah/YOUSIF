<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة {{ $page }}</title>
    <link rel="stylesheet" href="{{ asset('css/galary.css') }}">
</head>
<body style="background-image: url('{{ $background }}');">
    <div class="sentence no-bg">
        @if($page == 1)
            <div class="welcome-overlay-text">كل شيء يبدأ من هنى ..</div>
        @elseif($page == 2)
                      <div class="welcome-overlay-text">ومن بذرة صغيؤه يأتي الأمل..</div>

        @elseif($page == 3)
            <div class="welcome-overlay-text">لنزرع الامل في كل شبر من أرضنا</div>

        @elseif($page == 4)
                        <div class="welcome-overlay-text">هذا نحن وهذه قصتنا...لنبدأها معا..</div>

        @elseif($page == 5)
            <style>
              body { background-image: none !important; background-color: #000 !important; }
            </style>
            <div style="width: 100%; text-align: right; margin-bottom: 18px;">
              <div style="color: #f9f9f9; font-size: 25px; font-weight: bold;">رحلتك الزراعية معنا ..</div>
              <div style="color: #f9f9f9; font-size: 25px; margin-top: 6px;">بخطوات بسيطة وواضة"</div>
            </div>
            <div style="width: 100%; text-align: center;">
              @for($i = 1; $i <= 6; $i++)
                <div class="step-card" style="
                  display: inline-block;
                  vertical-align: top;
                  margin:  20px;
                  width: 160px;
                  max-width: 18vw;
                  background: none;
                  box-shadow: none;
                  border-radius: 10;
                  padding: 10;
                ">
                  <div style="width: 100%; height: 300px; background: #fff; display: flex; align-items: center; justify-content: center; border-radius: 30px; margin-bottom: 10px; overflow: hidden;">
                    <img src="{{ asset('storage/stips/' . $i . '.jpeg') }}" alt="Step {{ $i }}" style="width: 100%; height: 100%; object-fit: contain; display: block;">
                  </div>
                  <div style="font-size: 1.05rem; color: #333; font-weight: bold; text-align: center;">الخطوة {{ $i }}</div>
                </div>
              @endfor
            </div>
       
        @endif
    </div>
    <div class="nav">
        @if($page == 1)
          <a href="/gallery/2">التالي</a>
            <a href="/" >رجوع</a>
          
        @else
           
            @if($page < 5)
                <a href="/gallery/{{ $page + 1 }}">التالي</a>
            @endif
             @if($page > 1 && $page < 6)
                <a href="/gallery/{{ $page - 1 }}"> رجوع</a>
            @endif
        @endif
    </div>
</body>
</html> 