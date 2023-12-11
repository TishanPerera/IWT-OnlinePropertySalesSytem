
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
    <link rel="stylesheet" href="search.css">
</head>
<body>
    <div class="menu">
        <ul class="a">
            <div class="logo">
                <img src="image/LOGO PNG.png">
            </div>
            <button class="account"><a>Login</a></button>
            <a href="postad.php" class="c"><button class="postads" onClick="postad()">Post Ads</button></a>
           
            <li class="b"><a href="Home.php" class="c">Home</a></li>
            <li class="b"><a href="/news.html" class="c">News</a></li>
            <li class="b"><a href="/register.html" class="c">Contact</a></li>
            <li class="b"><a href="/about.php" class="c">About Us</a></li>
        </ul>
    </div>

    <div class="leftSide">
        <div class="searchBox">
            <div class="productImage">
                <img src="image/LOGO PNG.png" width="300px">
            </div>
            <div class="getSearchData">
                <form method="get">
                    <input id="mainSearch" type="text" placeholder="Enter Keywords" name="search">
            
                </form>
            </div>
        </div>
        <div class="showItem">
            <table class="showTable">
                <?php
                include 'config.php';

                if (isset($_GET['search'])) {
                    $search = $_GET['search'];
                    $sql = "SELECT * FROM `newtable` WHERE name='" . mysqli_real_escape_string($connection, $search) . "'";
                    $result = mysqli_query($connection, $sql);

                    if ($result) {
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '
                                    <tbody>
                                    <tr>
                                    <td rowspan="2"><img src="'.$row['Image'].'" width="150px" height="150px"></td>
                                    <td>'.$row['Name'].'</td>
                                    <td><a href="avdDetail.php?data='.$row['id'].'">More</a></td>
                                    </tr>
                                    <tr>
                                    <td>Rs:'.$row['price'].'</td>
                                    </tr>
                                    </tbody>';
                            }
                        } else {
                            echo '<h3>Data not found</h3>';
                        }
                    }
                }
                ?>
            </table>
        </div>
    </div>
    <div class="midPart">

    </div>

    <div class="premiAdd">
    <h3 class="headOne">Premium ads</h3>
    <div class="showItem" >
       
    <?php
        
        $pic = mysqli_query($connection, "SELECT * FROM `newtable`");
                while ($row = mysqli_fetch_array($pic)) {
                    echo "
        <table>
        <tbody>
            <tr>

                <td><img src='$row[Image]'  width = '150px'  height = '150px'></td>
                <td>$row[Name]</td>
                <td>Rs:$row[price]</td>
                <td><a href=\"avdDetail.php?data=".$row['id']."\">More</a></td>
                
                
                
                
            </tr>
            </tbody>
            </table>
            <br>
            ";
        }
        
        ?>
    </div>
</div>
</body>
</html>
