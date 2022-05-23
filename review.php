<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>BoiHat</title>
        <link rel="stylesheet" href="customCSS/review_style.css">
        <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    </head>
    <body>
        
        <div class="contain">
            
                <div class="post">
                    <div class="text">Thanks for rating us!
                    </div>
                    <div class="edit">EDIT</div>
                </div>
            
            
                <div class="rate">
                <input type="radio" name="rate" id="rate-1">
                <label for="rate-1" ></label>
                <input type="radio" name="rate" id="rate-2">
                <label for="rate-2" ></label>
                <input type="radio" name="rate" id="rate-3">
                <label for="rate-3" ></label>
                <input type="radio" name="rate" id="rate-4">
                <label for="rate-4" ></label>
                <input type="radio" name="rate" id="rate-5">
                <label for="rate-5" ></label>
                <form action="#">
                    <header></header>
                    <div class="textarea">
                        <textarea cols="40" placeholder="Describe your experience.."></textarea>
                    </div>
                    <div class="btn">
                        <button type="submit">post</button>
                    </div>
                </form>
                    
                

            </div>
        </div>
        <script>
            const btn =document.querySelector("button");
            const post =document.querySelector(".post");
            const widget =document.querySelector(".rate");
            const editBtn =document.querySelector(".edit");
            btn.onclick = ()=>{
                widget.style.display="none";
                post.style.display="block";
            editBtn.onclick = ()=>{
                widget.style.display="block";
                post.style.display="none";
                return false;

            }
        }

        </script>
    </body>

</html>
