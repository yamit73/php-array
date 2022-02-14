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
    catogaryWiseProduct($products);

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