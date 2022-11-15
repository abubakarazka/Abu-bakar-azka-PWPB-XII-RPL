<html>
    <head>
        <title>website</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="judul">
                <h1>MyWebsite</h1>
            </div>
            <div class="navbar">
                <ul>
                    <li><a class="active" href="#home">Home</a></li>
                    <li><a href="#news">News</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#product">Product</a></li>
                  </ul>
                  
   
            </div>
            <div class="foto">
            </div>
            <div class="content">
                <h1>Judul Artikel</h1>

                <h5>dibuaut oleh <span>abu bakar azka </span> ,pada 15 novemnber 2022</h5>
                <?php 
        $tahun_sekarang = date ('Y');
        echo "copyright &copy; {$tahun_sekarang} SMKJP1";
        ?>
        <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi maiores iure assumenda nostrum ducimus qui distinctio ratione neque officiis reiciendis obcaecati natus dolorem iste, dicta cupiditate inventore facere nulla magnam!
                </p>
                <br>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam sint id error et voluptas unde nam, non incidunt quia dolores molestiae ratione, tempora culpa odio doloribus sapiente nobis soluta neque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Est molestias inventore, modi alias velit placeat culpa animi minima possimus similique nobis soluta minus sapiente tempore ipsum, quod repellendus, quibusdam harum!
                </p>
            </div>
        </div>
        
    </body>
</html>