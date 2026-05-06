<?php
/**
 * Blackflower - Verified Profit Viewer
 * كود مدمج للربح من خلال CutWin و Rotate4All
 */

// 1. إعدادات الـ API الخاصة بك
$api_token = 'c138c7503f102e0f069cb2182bee123745d6bb98';

// 2. جلب البيانات من الرابط (الرابط المستهدف ومعرف الإعلان)
$ad_id = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : 'default';
$target_url = isset($_GET['url']) ? $_GET['url'] : 'https://google.com';

// 3. رابط العودة النهائي بعد تخطي الكابتشا في CutWin
// سيتم توجيه المستخدم لهذا الرابط لإضافة الرصيد في قاعدة بياناتك
$return_url = "https://your-site.com/verify_reward.php?ad_id=" . $ad_id;

// 4. الاتصال بـ CutWin لتوليد الرابط المختصر
$api_url = "https://cutwin.com/api?api={$api_token}&url=" . urlencode($return_url);

// محاولة جلب الرابط المختصر
$response = @file_get_contents($api_url);
$data = json_decode($response, true);
$final_short_link = ($data && isset($data['shortenedUrl'])) ? $data['shortenedUrl'] : "#";

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackflower | Viewer Mode</title>
    <style>
        /* التنسيق العام */
        body, html { margin: 0; padding: 0; height: 100%; width: 100%; overflow: hidden; background: #000; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        
        /* شريط التحكم العلوي */
        .header-bar { 
            height: 70px; 
            background: #0a0a0a; 
            border-bottom: 2px solid #222; 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            padding: 0 20px; 
            color: #fff; 
            position: relative; 
            z-index: 9999; 
            box-shadow: 0 4px 10px rgba(0,0,0,0.5);
        }

        .logo { font-size: 1.2rem; font-weight: bold; color: #00ff00; letter-spacing: 2px; }

        .timer-display { 
            font-size: 18px; 
            font-weight: bold; 
            color: #ff4444; 
            background: rgba(255, 68, 68, 0.1); 
            padding: 8px 18px; 
            border-radius: 5px; 
            border: 1px solid rgba(255, 68, 68, 0.3);
            min-width: 60px;
            text-align: center;
        }

        /* زر التأكيد */
        .btn-confirm { 
            background: #27ae60; 
            color: #fff; 
            border: none; 
            padding: 10px 25px; 
            font-weight: bold; 
            cursor: pointer; 
            text-decoration: none; 
            border-radius: 4px; 
            display: none; /* مخفي في البداية */
            transition: 0.3s;
            animation: pulse 1.5s infinite;
        }
        .btn-confirm:hover { background: #2ecc71; transform: scale(1.05); }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(39, 174, 96, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(39, 174, 96, 0); }
            100% { box-shadow: 0 0 0 0 rgba(39, 174, 96, 0); }
        }

        /* حاوية الإعلانات */
        .ad-main-container { width: 100%; height: calc(100% - 70px); position: relative; }
        
        /* إطار الربح الخفي (Rotate4All) */
        #ptcFrame { 
            width: 1px; 
            height: 1px; 
            border: none; 
            position: absolute; 
            bottom: 0; 
            right: 0; 
            opacity: 0.01; 
            z-index: 1; 
        }

        /* إطار الإعلان الأساسي */
        #targetFrame { 
            width: 100%; 
            height: 100%; 
            border: none; 
            z-index: 2; 
        }
    </style>
</head>
<body>

    <header class="header-bar">
        <div class="logo">BLACKFLOWER PRO ART</div>
        
        <div style="display: flex; gap: 15px; align-items: center;">
            <div id="timerBox" class="timer-display">20s</div>
            <!-- زر الربح مربوط بـ CutWin -->
            <a href="<?php echo $final_short_link; ?>" id="confirmBtn" class="btn-confirm">تأكيد الربح الآن ✅</a>
        </div>
    </header>

    <main class="ad-main-container">
        <!-- إطار الترويج المخفي للربح الإضافي -->
        <iframe id="ptcFrame" src="https://www.rotate4all.com/promote/pmq0c6xfa7wk"></iframe>
        
        <!-- إطار الإعلان الذي يشاهده المستخدم -->
        <iframe id="targetFrame" src="<?php echo htmlspecialchars($target_url); ?>"></iframe>
    </main>

    <script>
        let timeLeft = 20; // مدة المشاهدة بالثواني
        const timerBox = document.getElementById('timerBox');
        const confirmBtn = document.getElementById('confirmBtn');

        // بدء العد التنازلي
        const countdown = setInterval(() => {
            timeLeft--;
            timerBox.innerText = timeLeft + "s";
            
            if (timeLeft <= 0) {
                clearInterval(countdown);
                timerBox.style.display = 'none';
                confirmBtn.style.display = 'inline-block';
            }
        }, 1000);

        // منع الضغط على الزر إذا فشل الـ API في جلب الرابط
        confirmBtn.onclick = function(e) {
            const link = this.getAttribute('href');
            if (link === "#" || link === "") {
                e.preventDefault();
                alert("خطأ: لم يتم توليد رابط التحقق. يرجى تحديث الصفحة.");
            }
        };
    </script>

</body>
</html>
