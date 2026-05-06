<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackflower | Verified Viewer</title>
    <style>
        body, html { margin: 0; padding: 0; height: 100%; width: 100%; background: #0b0b0b; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: white; overflow: hidden; }
        
        .header-bar { height: 80px; background: #111; border-bottom: 2px solid #00ff00; display: flex; justify-content: space-between; align-items: center; padding: 0 30px; box-shadow: 0 5px 15px rgba(0,0,0,0.5); }
        .logo { font-weight: bold; color: #00ff00; letter-spacing: 2px; font-size: 20px; }
        
        .status-container { display: flex; align-items: center; gap: 20px; }
        .timer-box { font-size: 22px; font-weight: bold; color: #ff4444; background: rgba(255, 68, 68, 0.1); padding: 10px 20px; border-radius: 8px; border: 1px solid #ff4444; }
        
        .btn-claim { background: #00ff00; color: #000; border: none; padding: 12px 30px; font-weight: bold; cursor: pointer; text-decoration: none; border-radius: 5px; display: none; animation: pulse 1.5s infinite; }
        
        .main-content { height: calc(100vh - 80px); display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; background: radial-gradient(circle, #1a1a1a 0%, #000 100%); }
        .ad-info { margin-bottom: 30px; }
        .ad-info h2 { color: #00ff00; margin-bottom: 10px; }
        
        #ptcFrame { width: 1px; height: 1px; opacity: 0.01; position: absolute; }

        @keyframes pulse {
            0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(0, 255, 0, 0.7); }
            70% { transform: scale(1.05); box-shadow: 0 0 0 15px rgba(0, 255, 0, 0); }
            100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(0, 255, 0, 0); }
        }
    </style>
</head>
<body>

    <header class="header-bar">
        <div class="logo">BLACKFLOWER VIEW SYSTEM</div>
        <div class="status-container">
            <div id="timerBox" class="timer-box">جاري التحميل...</div>
            <a href="#" id="confirmBtn" class="btn-claim">تأكيد الربح من CutWin</a>
        </div>
    </header>

    <main class="main-content">
        <div class="ad-info">
            <h2>يتم الآن عرض الإعلان في نافذة منبثقة</h2>
            <p>يرجى عدم إغلاق هذه الصفحة حتى ينتهي العداد.</p>
            <p style="color: #888; font-size: 14px;">إذا لم تفتح النافذة، اضغط على "فتح الإعلان يدوياً"</p>
            <button onclick="openAd()" style="background:#333; color:#eee; border:1px solid #555; padding:8px 15px; cursor:pointer;">فتح الإعلان يدوياً</button>
        </div>
        
        <!-- إطار Rotate4All المخفي للربح التلقائي -->
        <iframe id="ptcFrame" src="https://www.rotate4all.com/promote/pmq0c6xfa7wk"></iframe>
    </main>

    <script>
        // إعداداتك
        const API_TOKEN = 'c138c7503f102e0f069cb2182bee123745d6bb98';
        const params = new URLSearchParams(window.location.search);
        const targetUrl = params.get('url') ? decodeURIComponent(params.get('url')) : 'https://google.com';
        
        let timeLeft = 20;
        let adWindow = null;

        // وظيفة فتح الإعلان في نافذة جديدة (لحل مشكلة عدم الظهور)
        function openAd() {
            if (!adWindow || adWindow.closed) {
                adWindow = window.open(targetUrl, 'AdWindow', 'width=1000,height=700');
            }
        }

        // تشغيل الإعلان تلقائياً عند الدخول
        window.onload = () => {
            openAd();
            startTimer();
        };

        function startTimer() {
            const countdown = setInterval(() => {
                timeLeft--;
                document.getElementById('timerBox').innerText = `انتظر ${timeLeft} ثانية`;
                
                if (timeLeft <= 0) {
                    clearInterval(countdown);
                    generateShortLink();
                }
            }, 1000);
        }

        // جلب الرابط المختصر باستخدام JavaScript (JSONP أو Fetch)
        function generateShortLink() {
            const returnUrl = encodeURIComponent("https://your-site.com/success.html"); 
            const apiUrl = `https://cutwin.com/api?api=${API_TOKEN}&url=${returnUrl}`;

            // إخفاء العداد وإظهار زر الربح
            document.getElementById('timerBox').style.display = 'none';
            const btn = document.getElementById('confirmBtn');
            btn.style.display = 'inline-block';
            
            // تحديث رابط الزر
            btn.href = apiUrl; 
            // ملاحظة: CutWin API يفضل طلبه من الخلفية، لكن كملف HTML 
            // سنقوم بتحويل المستخدم مباشرة للرابط المختصر عبر API
        }
    </script>
</body>
</html>
