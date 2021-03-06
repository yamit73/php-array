<?php
    $products = array(
      "Electronics" => array(
        "Television" => array(
          array(
          "id" => "PR001",
          "name" => "MAX-001",
          "brand" => "Samsung"
          ),
          array(
          "id" => "PR002",
          "name" => "BIG-301",
          "brand" => "Bravia"
          ),
          array(
          "id" => "PR003",
          "name" => "APL-02",
          "brand" => "Apple"
          )
        ),
        "Mobile" => array(
          array(
          "id" => "PR004",
          "name" => "GT-1980",
          "brand" => "Samsung"
          ),
          array(
          "id" => "PR005",
          "name" => "IG-5467",
          "brand" => "Motorola"
          ),
          array(
          "id" => "PR006",
          "name" => "IP-8930",
          "brand" => "Apple"
          )
        )
      ),
      "Jewelry" => array(
        "Earrings" => array(
          array(
          "id" => "PR007",
          "name" => "ER-001",
          "brand" => "Chopard"
          ),
          array(
          "id" => "PR008",
          "name" => "ER-002",
          "brand" => "Mikimoto"
          ),
          array(
          "id" => "PR009",
          "name" => "ER-003",
          "brand" => "Bvlgari"
          )
        ),
        "Necklaces" => array(
          array(
          "id" => "PR010",
          "name" => "NK-001",
          "brand" => "Piaget"
          ),
          array(
          "id" => "PR011",
          "name" => "NK-002",
          "brand" => "Graff"
          ),
          array(
          "id" => "PR012",
          "name" => "NK-003",
          "brand" => "Tiffany"
          )
        )
      )
    );   
    
    function catogaryWiseProduct($products){
        $prTable='<table id="productTable">
                    <tr>
                        <th>Catogary</th>
                        <th>Sub Catogary</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Brand</th>
                    </tr>';
        $prRows='';
        foreach($products as $key => $catogary){
            foreach($catogary as $ke => $subCatogary){
                foreach($subCatogary as $k => $value){
                    $prRows.='<tr>
                                <td>'.$key.'</td>'.
                                '<td>'.$ke.'</td>
                                <td>'.$value['id'].'</td>
                                <td>'.$value['name'].'</td>
                                <td>'.$value['brand'].'</td>'.
                            '</tr>';
                }
            }
        }
        $prTable.=$prRows.'</table>';
        echo $prTable;
    }
    function mobileSubcatogaryProduct($products){
        echo '<h2 class="centered">Product with mobile subcatogary</h2>';
        $prTable='<table id="productTable">
                    <tr>
                        <th>Catogary</th>
                        <th>Sub Catogary</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Brand</th>
                    </tr>';
        $prRows='';
        foreach($products as $key => $catogary){
            foreach($catogary as $ke => $subCatogary){
                foreach($subCatogary as $k => $value){
                    if($ke == "Mobile"){
                        $prRows.='<tr>
                                <td>'.$key.'</td>'.
                                '<td>'.$ke.'</td>
                                <td>'.$value['id'].'</td>
                                <td>'.$value['name'].'</td>
                                <td>'.$value['brand'].'</td>'.
                            '</tr>';
                    }
                    
                }
            }
        }
        $prTable.=$prRows.'</table>';
        echo $prTable;
    }
    
    function productWithBrandName($products,$brandName){
        echo '<h2 class="centered">Product with brand name</h2>';
        $prList='<div id="productList">';
        $prRows='';
        foreach($products as $key => $catogary){
            foreach($catogary as $ke => $subCatogary){
                foreach($subCatogary as $k => $value){
                    if($value['brand'] == $brandName){
                        $prRows.='<p><b>Product Id</b>: '.$value['id'].'</p>
                                 <p><b>Product Name: </b>'.$value['name'].'</p>
                                 <p><b>Subcatogary: </b>'.$ke.'</p>'.
                                 '<p><b>Catogary: </b>'.$key.'</p><br>';
                    }
                    
                }
            }
        }
        $prList.=$prRows.'</div>';
        echo $prList;
    }
    function updateProduct($products,$prId,$newName){
        echo '<h2 class="centered">Updated table</h2>';
        $prTable='<table id="productTable">
                    <tr>
                        <th>Catogary</th>
                        <th>Sub Catogary</th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Brand</th>
                    </tr>';
        $prRows='';
        foreach($products as $key => $catogary){
            foreach($catogary as $ke => $subCatogary){
                foreach($subCatogary as $k => $value){
                    if($value['id'] == $prId){
                        $value['name']=$newName;
                    }
                    $prRows.='<tr>
                    <td>'.$key.'</td>'.
                    '<td>'.$ke.'</td>
                    <td>'.$value['id'].'</td>
                    <td>'.$value['name'].'</td>
                    <td>'.$value['brand'].'</td>'.
                    '</tr>';
                    
                }
            }
        }
        $prTable.=$prRows.'</table>';
        echo $prTable;
    }
    function deleteWithProductId(&$products,$prId){
        foreach($products as $key => $catogary){
            foreach($catogary as $ke => $subCatogary){
                foreach($subCatogary as $k => $value){
                    if($value['id'] == $prId){
                        unset($products[$key][$ke][$k]);
                        break;
                    }
                }
            }
        }
    }
    deleteWithProductId($products,"PR003");
    catogaryWiseProduct($products);
    mobileSubcatogaryProduct($products);
    productWithBrandName($products,"Samsung");
    updateProduct($products,"PR002","BIG-555");
    
    

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PHP Array</title>
</head>
<body>
    
    <script src="script.js"></script>
</body>
</html>