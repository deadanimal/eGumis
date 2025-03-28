<style>
    body {
        padding:0; margin:0; font-family:sans-serif;
    }

    h1 {
        margin:0; color:#ddd; padding:10px; border-bottom:1px solid #666
    }
    button:focus {
        outline:none
    }
    aside {
        background:#1a1d23; 
        width:250px;height:100vh; 
        position:fixed; transition:.3s;
        left:-250px;
        top:0;transition-timing-function: 
        cubic-bezier(0.9,0,1,1);
    }
    aside.close {
        left:0;
        transition:.3s;
        transition-timing-function: cubic-bezier(0.9,0,1,1);
    }
    nav a {
        display: block; 
        color:#ddd; 
        text-decoration:none;
        padding:10px
    }
    nav a:hover {
        background:#313640
    } 

    aside button {
        border:none; 
        background:none; 
        position: absolute;
        right:-40px; top:7px; 
        font-size:30px; 
        transform:rotate(90deg); 
        display:inline-block; 
        cursor:pointer
    }
</style>

<script>
    $(document).ready(function(){
    $(".toggle").click(function(){
        $("aside").toggleClass("close")
    });
    });
</script>

<script>
    // click outside
    $(document).mouseup(function(e){ 
    var container = $("aside");
        if (!container.is(e.target) && container.has(e.target).length === 0) 
        {
            $("aside").removeClass("close")
        }
    });

</script>


<div class="container">
<aside>
  <button class="toggle">|||</button>
  <h1>Menu</h1>
  <nav>
    <a href="#">Home</a>
    <a href="#">About Us</a>
    <a href="#">Services</a>
    <a href="#">Portfolio</a>
    <a href="#">Contact Us</a>
  </nav>
</aside>
  
  </div>