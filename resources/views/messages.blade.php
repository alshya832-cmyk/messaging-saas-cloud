<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>نظام إرسال الرسائل</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f9; margin: 40px; text-align: center; }
        .container { max-width: 600px; background: white; padding: 20px; margin: auto; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h2 { color: #333; }
        input, textarea { width: 90%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; }
        button { background: #3490dc; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; width: 94%; }
        button:hover { background: #2779bd; }
        .message-box { background: #eef2f7; padding: 10px; margin: 10px 0; border-radius: 4px; text-align: right; }
    </style>
</head>
<body>

<div class="container">
    <h2>📩 نظام إرسال الرسائل السحابي</h2>
    <p>أهلاً بك في مشروع نظام الرسائل للجامعة الإسلامية</p>
    <hr>

    <form action="/messages" method="POST">
        @csrf
        <input type="text" name="sender_name" placeholder="إسم المرسل" required>
        <textarea name="body" rows="4" placeholder="اكتب نص الرسالة هنا..." required></textarea>
        <button type="submit">إرسال الرسالة الآن 🚀</button>
    </form>

    <hr>
    <h3>الرسائل المستلمة</h3>
    @foreach($messages as $message)
        <div class="message-box">
            <strong>{{ $message->sender_name }}:</strong>
            <p>{{ $message->body }}</p>
        </div>
    @endforeach
</div>

</body>
</html>
