
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Liste de courses</title>

</head>
<body>
     <!-- Responsive navbar-->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">TP mardi</a>
            
        </div>
    </nav>
    <!-- .container +tab -->
    <section class="container">
        <!-- 100 % sur mobile et 33 % sur pc -->
        <div class="row">
            <div class="col-12 ">
                <h1>TP mardi</h1>

                <div><strong>Etape 1</strong></div> 
                <?php 
                    $table=array();
                    for ($i=0; $i < 42; $i++) { 
                        $table[]=$i;
                    }
                    print_r($table);
                ?>
                <div><strong>Etape 2</strong></div> 
                <?php 

                    shuffle($table);
                    print_r($table);
                ?>
                <div><strong>Etape 3</strong></div> 
                <?php 
                    $tableDeEtape3=array();
                    for ($i=0; $i < 16; $i++) { 
                        $tableDeEtape3[]=$table[rand(0, 41)];
                    }
                    print_r($tableDeEtape3);

                ?>
                <div><strong>Etape 4</strong></div> 
                <?php 
                    $tableDeEtape4=array();
                    for ($i=0; $i < 32; $i++) { 
                        $tableDeEtape4=array_merge($tableDeEtape3, $tableDeEtape3);
                    }
                    print_r($tableDeEtape4);

                ?>
                <div><strong>Etape 5</strong></div> 
                <?php 
                    shuffle($tableDeEtape4);
                    print_r($tableDeEtape4);

                ?>
                <div><strong>Etape 6</strong></div> 
                <?php 
                    foreach ($tableDeEtape4 as $numImage) {
                    
                        echo "<img src=\"majhong/images/$numImage.jpg\" alt=\"image\">";
                    }
                ?>
                           
            </div>
        </div>
    </section>
 <!-- Footer-->
 <footer class="py-5 bg-dark">
    <div class="container px-4 px-lg-5">
        <p class="m-0 text-center text-white">Copyright &copy; Comme je n'aime pas ... 2022</p></div>
</footer>
</body>
</html>
