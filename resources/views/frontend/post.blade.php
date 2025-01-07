<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <style>
        /* Global Styles */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
            color: #333;
            overflow-x: hidden;
        }

        /* Header */
        .header {
            text-align: center;
            padding: 2rem 0;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .blog-title {
            margin: 0;
            font-size: 2.5rem;
            animation: slideDown 1s ease-in-out;
        }

        /* Blog Container */
        .blog-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        /* Blog Post */
        .blog-post {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            transform: translateY(20px);
            animation: fadeInUp 1s ease-out;
        }
        .post-header {
            margin-bottom: 1rem;
        }
        .post-title {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: #444;
        }
        .post-meta {
            font-size: 0.9rem;
            color: #777;
        }
        .author {
            font-weight: bold;
        }
        .post-image img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 1rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .post-image img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .post-content p {
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        /* Button */
        .btn {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            font-size: 1rem;
            color: #fff;
            background-color: #ff6363;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn:hover {
            background-color: #e35d5d;
            transform: translateY(-2px);
        }
        .btn:active {
            transform: translateY(0);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <header class="header" style="display:flex;justify-content:space-between">
        <h1 class="blog-title">Welcome to My Blog</h1>
        <a href="/login"><button  class="btn btn-primary">Login</button></a>
    </header>

    <div class="blog-container">
        <!-- Blog Post 1 -->
         @foreach($post as $posts)
        <div class="blog-post">
            <div class="post-header">
                <h2 class="post-title">{{$posts->heading}}</h2>
                <p class="post-meta">{{$posts->date}}<span class="author"></span></p>
            </div>
            <div class="post-image">
                <img src="frontend/post/{{$posts->image}}" alt="Blog Image" style="height:300px;">
            </div>
            <div class="post-content">
                <p>{{$posts->description}}</p>
            </div>
            <!-- <footer class="post-footer">
                <button class="btn read-more">Read More</button>
            </footer> -->
        </div>
        @endforeach
       
    </div>

    <script>
        document.querySelectorAll('.read-more').forEach(button => {
            button.addEventListener('click', function() {
                alert('Redirecting to the full blog post...');
                window.location.href = 'https://example.com/full-post'; // Change this to your blog post URL.
            });
        });
    </script>
</body>
</html>
