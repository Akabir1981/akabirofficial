{{-- resources/views/articles/admin.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Articles</title>
  {{-- Laravel asset helper দিয়ে CSS include --}}
  <link rel="stylesheet" href="{{ asset('CSS/articles_style.css') }}">
</head>
<body class="admin-page">
  <h1>Admin: Manage Articles</h1>

  <div class="admin-container">
    <div class="left-panel">
      <div class="search-bar">
        <h3>Search & Filter</h3>
        <input type="text" id="searchInput" placeholder="Search articles...">
      </div>
    </div>
  </div>

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
    import { initArticlesAdmin } from "{{ asset('js/articles_admin.js') }}";

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

    initArticlesAdmin(db);
  </script>
</body>
</html>
