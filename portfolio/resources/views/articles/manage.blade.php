{{-- resources/views/articles/manage.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manage Articles</title>
  {{-- Laravel asset helper দিয়ে CSS include --}}
  <link rel="stylesheet" href="{{ asset('CSS/articles_style.css') }}">
</head>
<body>
  <h1>Manage Articles</h1>

  <form id="articleForm" method="POST">
     @csrf
    <input type="text" name="title" placeholder="Title" required>
    <textarea name="content" placeholder="Write article..." required></textarea>
 
    <button type="submit">Add Article</button>
  </form>

  <div id="articleList"></div>

  <script type="module">
    import { initializeApp } from "https://www.gstatic.com/firebasejs/12.1.0/firebase-app.js";
    import { getFirestore } from "https://www.gstatic.com/firebasejs/12.1.0/firebase-firestore.js";
    import { initArticlesManage } from "{{ asset('js/articles.js') }}";

    const firebaseConfig = {
      apiKey: "AIzaSyDIGTf8SciNEacT9MQITl9uGPah8ZSjYsM",
      authDomain: "articles-604f9.firebaseapp.com",
      projectId: "articles-604f9",
      storageBucket: "articles-604f9.firebasestorage.app",
      messagingSenderId: "930544693618",
      appId: "1:930544693618:web:d4d76e656fd26a3794edeb",
      measurementId: "G-PF7YYFY7EZ"
    };

    const app = initializeApp(firebaseConfig);
    const db = getFirestore(app);

    initArticlesManage(db);
  </script>
</body>
</html>
